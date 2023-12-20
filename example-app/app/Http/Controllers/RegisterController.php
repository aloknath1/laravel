<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function index()
    {
        $url = url('/register');
        $title = 'Customer Registration';
        $data = compact('url', 'title');
        return view('register')->with($data);
    }


    public function register(Request $request)
    {
        $request->validate(
            [
            "user_name" => 'required',
            "user_email" => 'required|email',
            "user_password" => 'required',
            "user_phone" => 'required',
            "user_country" => 'required',
            "user_image" => 'required'
            ]
        );
             
        $filename = time()."_ws.".$request->file('user_image')->getClientOriginalExtension();
        //$image_path = 'uploads/'.$filename;
        $request->file('user_image')->storeAs('uploads/', $filename);
        //echo "->".$filename;
        $customer = new Register;
        $customer->name = $request['user_name'];
        $customer->email = $request['user_email'];
        $customer->phone = $request['user_phone'];
        $customer->password = $request['user_password'];
        $customer->country = $request['user_country'];
        $customer->image = $filename;
        
        //dataFormat(($customer));
        //die();
        $customer->save(); 
       
        return redirect('/register/view');
    }

    
    public function view()
    {
        $customers = Register::paginate(1);
        // echo "<pre>";
        // print_r($customers->toArray());
        // echo "</pre>";
        $data = compact('customers');
        return view('view')->with($data);
    }

    public function trash()
    {
        // $customers = Register::onlyTrashed()->all();      
        // $data = compact('customers');
        // return view('customer.trash')->with($data);
    }

    public function delete($id)
    {
       $customer = Register::find($id);
       if(!is_null($customer)){
            $customer->delete();
       }
       return redirect('register/view');
    }

    public function edit($id)
    {
       $customer = Register::find($id);
       if(is_null($customer)){
        return view('register/view');
       }else{
        $url = url('/register/update').'/'.$id;
        $title = 'Update Customer';
        $data = compact('customer', 'url', 'title');
        return view('register')->with($data);
       }
      
    }

    public function update($id, Request $request)
    {
        $customer = Register::find($id);          
        $customer->name = $request['user_name'];
        $customer->email = $request['user_email'];
        $customer->phone = $request['user_phone'];
        $customer->password = $request['user_password'];
        $customer->country = $request['user_country'];
        $customer->save();
        return redirect('register/view'); 
    }
}
