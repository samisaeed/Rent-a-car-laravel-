<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Location;
use App\Vehicle;
use App\Customer;



class CustomerController extends Controller
{
  public function showDaybook(){
      $location = Location::all();
      return view('daybooking')->with('locations', $location);
  }
  public function searchcar(Request $request){
    $from = $request->input('from');
    $to = $request->input('to');
    $type = $request->input('type');


    $searched = DB::table('vehicles')
        ->join('locations', 'vehicles.user_id', '=', 'locations.userid')
        ->select('vehicles.*','locations.*')
        ->where('locations.from','=',$from)->where('locations.to','=',$to)->where('vehicles.type','=',$type)->where('vehicles.book','!=',1)
        ->orderBy('locations.cost', 'asc')->get();
        // return $searched;
       if ($searched->isEmpty()) {
         $availableTypes = DB::table('vehicles')
               ->join('locations', 'vehicles.user_id', '=', 'locations.userid')
               ->select('vehicles.type')
               ->where('locations.from','=',$from)->where('locations.to','=',$to)->where('vehicles.book','!=',1)
               ->distinct()
               ->get();
          $location = Location::all();

          return view('landing')->with(['availableTypes'=> $availableTypes, 'locations'=>$location, 'error' => 'Vehicle type is currenty not available from '.$from.' to '.$to.' service.']);
          // return $availableTypes;
        }
    return view('customer.searchedcar')->with(['searched'=> $searched, 'from' => $from, 'to' => $to, 'type'=>$type]);
  }

  public function searchcardesc(Request $request){
    $from = $request->input('from');
    $to = $request->input('to');
    $type = $request->input('type');


    $searched = DB::table('vehicles')
        ->join('locations', 'vehicles.user_id', '=', 'locations.userid')
        ->select('vehicles.*','locations.*')
        ->where('locations.from','=',$from)->where('locations.to','=',$to)->where('vehicles.type','=',$type)->where('vehicles.book','!=',1)
        ->orderBy('locations.cost', 'asc')->get();
        // return $searched;
       if ($searched->isEmpty()) {
         $availableTypes = DB::table('vehicles')
               ->join('locations', 'vehicles.user_id', '=', 'locations.userid')
               ->select('vehicles.type')
               ->where('locations.from','=',$from)->where('locations.to','=',$to)->where('vehicles.book','!=',1)
               ->distinct()
               ->get();
          $location = Location::all();

          return view('landing')->with(['availableTypes'=> $availableTypes, 'locations'=>$location, 'error' => 'Vehicle type is currenty not available from '.$from.' to '.$to.' service.']);
          // return $availableTypes;
        }
    return view('customer.searchedcar')->with(['searched'=> $searched, 'from' => $from, 'to' => $to, 'type'=>$type]);
  }

  public function customersignin(Request $request, $carnumber,$from,$to)
  {
    if (!Auth::guard('customers')->attempt($request->only(['email', 'password']) )) {
      return redirect()->back()->with('error', 'Credentials do not match');
    }


    return redirect('makeorder'.'/'.$carnumber.'/'.$from.'/'.$to)->with(['success'=> 'Welcome back!!']);

  }
  public function getsignup($carnumber,$from,$to){
    return view('customer.signup')->with(['carnumber'=> $carnumber, 'from'=>$from, 'to'=>$to]);
  }

  public function postsignup(Request $request, $carnumber,$from,$to){
    $this->validate($request, [
      'email'=> 'required|unique:customers|email',
      'name' => 'required',
      'password' => 'required|min:5',
    ]);

    $customers = new Customer;

    $customers->email = $request->input('email');
    $customers->name = $request->input('name');
    $customers->password = bcrypt($request->input('password'));

    $customers->save();
    return redirect('/order'.'/'.$carnumber.'/'.$from.'/'.$to);
  }

  public function logout(){
    Auth::guard('customers')->logout();
    return redirect('/');
  }

  public function ajax(){
      return view('daybooking');
  }

  public function searchajax(Request $request){
      $from =  $request->term;
      $getFrom = Location::where('from', 'like', '%' .$from. '%')->get();
      if(count($getFrom) == 0){
        $searchResult[] = 'No locations found';
  }
  else{
      foreach($getFrom as $key => $from){
          $searchResult[]  = $from->from;
      }
  }

    return $searchResult;
  }
  public function searchajaxTo(Request $request){
      $to =  $request->term;
      $getFrom = Location::where('to', 'like', '%' .$to. '%')->get();
      if(count($getFrom) == 0){
        $searchResult[] = 'No locations found';
  }
  else{
      foreach($getFrom as $key => $to){
          $searchResult[]  = $to->to;
      }
  }

    return $searchResult;
  }
}
