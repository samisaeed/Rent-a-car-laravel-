<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Vehicle;
use App\Location;
use App\Order;
use App\Book;
use Image;
use Mail;
class CompanyController extends Controller
{
   public function __construct(){
      // $this->middleware('Usermiddleware');
   }
    public function signup(){
      if (Auth::check()) {
        $companyname = Auth()->User()->companyname;
        return redirect('company' . '/' . $companyname );
      }
      return view("company.signup");
    }
    public function storesignup(Request $request){
      $this->validate($request, [
        'email'=> 'required|unique:users|email',
        'companyname' => 'required|unique:users',
        'location' => 'required',
        'password' => 'required|min:5',
      ]);
      $companies = new User;
      $companies->email = $request->input('email');
      $companies->companyname = $request->input('companyname');
      $companies->location = $request->input('location');
      $companies->phoneNumber = $request->input('phoneNumber');
      $companies->password = bcrypt($request->input('password'));
      $companies->save();
      return redirect('/companysign');
    }
    public function signin(){
      if (Auth::check()) {
        $companyname = Auth()->User()->companyname;
        return redirect('company' . '/' . $companyname );
      }
      return view ("company.signin");
    }
    public function getsignin(Request $request)
    {
      if (!Auth::attempt($request->only(['email', 'password']) )) {
        return redirect()->back()->with('error', 'Credentials do not match');
      }
      $companyname = Auth()->User()->companyname;
      return redirect('company'.'/'.$companyname)->with(['success'=> 'Welcome back!!', 'companyname' => $companyname]);
    }
    public function profile($companyname){
      $company = User::where('companyname', $companyname)->first();
      $companyid = $company->id;
      $orders = Order::where('company_id',$companyid )->get()->count();
      $book = Book::where('companyid',$companyid )->get()->count();
      $cars = User::join('vehicles', 'vehicles.user_id', '=', 'users.id')
                   ->select('vehicles.*')
                   ->where('vehicles.user_id', '=',$companyid )
                   ->get();
      $totalCars = User::join('vehicles', 'vehicles.user_id', '=', 'users.id')
                   ->select('vehicles.*')
                   ->where('vehicles.user_id', '=',$companyid )
                   ->count();
      return view('company.profile')->with(['company'=>$company,'orders'=>$orders, 'book'=>$book, 'cars' => $cars, 'total' => $totalCars]);
    }
    public function addnewcar($companyid){
      $company = User::where('id', $companyid)->first();
      return view('company.addnewcar')->with('company', $company);
    }
    public function postnewcar(Request $request, $companyid, $companyname){
    //   $this->validate($request, [
    //     'carname' => 'required',
    //     'carmodel' => 'required',
    //     'carnumber' => 'required',
    //     'cartype' => 'required',
    //   ]);
      $vehicle = new Vehicle;
      $vehicle->user_id = $companyid;
      $vehicle->name = $request->input('carname');
      $vehicle->number = $request->input('carnumber');
      $vehicle->model = $request->input('carmodel');
      $vehicle->type = $request->input('cartype');
      $vehicle->description = $request->input('description');

      $vehicle->book = 0;
      if ($request->hasFile('carimage')) {
        $image = $request->file('carimage');
        $filename = time() . "." . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        image::make($image)->resize(800, 400)->save($location);
        $vehicle->image = $filename;
      }
      $vehicle->save();
      return redirect()->back()->with('success', 'New vehicle added');
    }
    public function addnewlocation($companyid){
      $company = User::where('id', $companyid)->first();
      return view('company.addnewlocation')->with('company', $company);
    }
    public function logout(){
      Auth::logout();
      return redirect('/companysign');
    }
    public function postnewlocation(Request $request, $companyid, $companyname){
      $this->validate($request, [
        'from' => 'required',
        'to' => 'required',
        'cost' => 'required',
      ]);
      $location = new Location;
      $location->userid = $companyid;
      $location->from = $request->input('from');
      $location->to = $request->input('to');
      $location->cost = $request->input('cost');
      $location->save();
      return redirect()->back()->with('success', 'New location added');
    }
    public function checkorders($companyid){
      $orders = Order::where('company_id',$companyid)->get();
      return view('company.orderlist')->with(['orders'=> $orders, 'companyid'=> $companyid]);
    }
    public function confirmorder($carnumber,$email,$pickupdate,$releasedate){
      $getCarnumber = Book::where('carnumber', $carnumber)->first();
       if (!$getCarnumber) {
         $post = Vehicle::where('number', $carnumber)->first();
         $companyid = $post->user_id;
         $post->book = 1;
         $post->save();
         $book = new Book;
         $book->email = $email;
         $book->carnumber = $carnumber;
         $book->dateFrom = $pickupdate;
         $book->dateTo = $releasedate;
         $book->companyid = $companyid;
         $book->save();
         $deleteorder = Order::where('carnumber', $carnumber)->first();
         $deleteorder->delete();
         $subject = "Confirmation message from rent a car";
         $messageBody = "Your order has been confirmed for". $carnumber. "Car will be arrived at your place at the right time.";
         $this->email($email, $subject, $messageBody);
         return redirect()->back()->with('success', 'confirmation message sent');
       }
       return redirect()->back()->with('success', 'Car is already booked');
     }
    public function bookedcars($companyid){
      $book = Book::where('companyid', $companyid)->get();
      return view('company.bookedcars')->with(['bookedcars' => $book, 'companyid' => $companyid]);
    }
    public function releasecar($carnumber){
      $book = Book::where('carnumber', $carnumber)->first();
      $book->delete();
      $release = Vehicle::where('number', $carnumber)->first();
      $release->book = 0;
      $release->save();
      return redirect()->back()->with('success', 'Car released');
    }
    public function cancelorders($carnumber, $email){
      $cancel = Order::where('carnumber', $carnumber)->first();
      $cancel->delete();
      $subject = "Order canceled";
      $messageBody = "Rent a car is extremely sorry to inform you that the car you ordered car(".$carnumber.")can not be reached for some reason. Please check for another one. Car will be arrived at your place at the right time.";
      $this->email($email, $subject, $messageBody);
      return redirect()->back()->with('success', 'Order canceled');
    }
    public function email($email, $subject, $messageBody){
      $data = [
        'email' => $email,
        'subject' => $subject,
        'messageBody' => $messageBody
      ];
      Mail::send('email.contacts', $data, function($message) use($data){
        $message->from('asifadhamshapnil9@gmail.com');
        $message->to($data['email']);
        $message->subject($data['subject']);
      });
    }
    public function sendemail(Request $request, $email, $carnumber){
      $companyid = Auth::user()->id;
      $this->validate($request, [
        'email' => 'required',
        'message' => 'required',
      ]);
      $data = [
        'email' => $request->email,
        'subject' => $request->subject,
        'messageBody' => $request->message
      ];
      Mail::send('email.contacts', $data, function($message) use($data){
        $message->from('asifadhamshapnil9@gmail.com');
        $message->to($data['email']);
        $message->subject($data['subject']);
      });
      return redirect('checkorders'.'/'.$companyid)->with('success', 'Confirmation message sent');
    }
}
