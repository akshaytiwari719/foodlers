<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use App\models\Customer;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function signup(){
      return view('signup');
    }

    public function login(){
      return view('login');
    }
    public function display(){
      return view('dashboard');
    }
    public function storeCustomer(Request $request){
      $this->validate($request,[
        'name'=>'required|min:6',
        'email'=>'email:rfc,dns',
        'c_no'=>'required|min:10|max:10',
        'DOB'=>'required',
        'address'=>'required',
        'password'=>'required|confirmed|min:6',
      ]);

        $customer=new Customer;

        $customer->Name=$request->name;
        $customer->Email=$request->email;
        $customer->contact_no=$request->c_no;
        $customer->DOB=$request->DOB;
        $customer->Address=$request->address;
        $customer->Password=$request->password;
        if($customer->save())
        {
          return Redirect::to('dashboard');
        }
        return 'unsuccessful';
    }

    public function varifyLogin(Request $request){
    /*  $this->validate($request,[
        'email'     =>  'required|email',
        'password'  =>  'required|min:6'
      ]);
*/
      $customer = Customer::select('*')->where([['Email', '=', $request['email']], ['Password', '=', $request['password']]])
      ->get()
      ->toArray();
       if ($customer == null) {
           return redirect()->back()->with('error','wronglogin detail');
       }
       else{
         return Redirect::to('dashboard');
       }
    }
}
