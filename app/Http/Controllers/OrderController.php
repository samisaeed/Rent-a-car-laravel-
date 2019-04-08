<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Customer;
use App\Vehicle;
use App\Order;



class OrderController extends Controller
{
    public function orders($carnumber,$from,$to){
      if (Auth::guard('customers')->check()) {
        $email = Auth::guard('customers')->user()->email;
        return view('customer.order')->with(['carnumber'=> $carnumber, 'email'=> $email, 'from'=>$from, 'to'=>$to]);
      }
        return view('customer.signin')->with(['carnumber'=> $carnumber, 'from'=>$from, 'to'=>$to]);


    }

    public function makeorders($carnumber,$from,$to){

      return view('customer.order')->with(['carnumber'=> $carnumber, 'from'=>$from, 'to'=>$to]);
    }

    public function postorder(Request $request, $carnumber){

    $company = Vehicle::Where('number', $carnumber)->first();
    $companyid = $company->user_id;

      $this->validate($request, [
        'from'=> 'required',
        'to' => 'required',
        'pickupAddress' => 'required',
        'pickupTime' => 'required',
        'email' => 'required',
        'date' => 'required',


      ]);

      $orders = new Order;

      $orders->email = $request->input('email');
      $orders->from = $request->input('from');
      $orders->to = $request->input('to');
      $orders->pickupAddress = $request->input('pickupAddress');
      $orders->pickupTime = $request->input('pickupTime');
      $orders->pickupdate = $request->input('date');
      $orders->releasedate = $request->input('releasedate');
      $orders->carnumber = $carnumber;


      $orders->company_id = $companyid;




      $orders->save();
      return redirect()->back()->with('success', 'Wait for the confirmation massage to  your email');
    }

}
