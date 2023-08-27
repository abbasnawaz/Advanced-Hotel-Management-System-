<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customerModel;
use App\Models\customerPhone;
use App\Models\employeeModel;
use App\Models\managerModel;
use App\Models\bookingModel;
use App\Models\paymentModel;
use App\Models\addroombooking;
use App\Models\confirm_booking;
use App\Models\addroom;
use App\Models\User;
use Hash;
use Session;



class marigold extends Controller
{


  /*public function login()
  {
    return "login";

  }
  public function register()
  {
    return "Register";
    
  }*/

  public function loginuser(Request $request)
  {
    $request->validate([      
      'email' => 'required|email',
      'password' => 'required|min:5|max:12',
    ]);

    $user = User::where('email','=',$request->email)->first();
    if($user)
    {
      if(Hash::check($request->password,$user->password)){
        $request->session()->put("loginid",$user->id);
        return redirect('dashboard');

      }
      else{
        return back()->with('fail',"Password not match ");

      }

    }
    else{
      return back()->with('fail',"This email is not registered");

    }
    


  }

  public function registrationuser(Request $request)
  {
    $request->validate([
      "name" => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:5|max:12',
    ]);

    $user = new User();
    $user -> name = $request->name;
    $user -> email = $request->email;
    $user -> password = Hash::make($request->password);

    $res = $user->save();

    if($res){
      return back()->with('success',"You have registered successfully");

    }
    else{
      return back()->with('fail',"Something went wrong");

    }

  }

  public function dashboard()
  {
    $data = array();
    if(Session::has('loginid')){
      $data = User::where('id','=', Session::get('loginid'))->first();
    }
    return view('dashboard',compact('data'));
  }

  public function logout(){
    if(Session::has('loginid')){
      Session::pull('loginid');
      return redirect('login');
      
    }
    
  }


  public function insertCustomer(Request $request)
  {

          
    $phone_no = $request->phone_no;

    $customerModel = new customerModel();

    $customerModel->C_First_Name = $request->C_First_Name;
    $customerModel->C_Last_Name = $request->C_Last_Name;
    $customerModel->address = $request->address;
    $customerModel->CNIC = $request->CNIC;
    
    $customerModel->save();
        
    if($customerModel)
    {
      $customer_id=$customerModel->id;
      $data = [$customer_id];

      $this->insertCustomerPhone($phone_no,$customer_id);
      return view('add_booking',compact("data"));


    }
    else
    {
      return redirect("customer")->back()->with('error_msg','Unable to add user');
    }
    
  } 

  public function insertCustomerPhone($phone_no,$customer_id)
  {

    $customerPhone = new customerPhone();

    $customerPhone->C_id=$customer_id;

    $customerPhone -> C_phone_no = $phone_no;
    $customerPhone -> save();

    if($customerPhone)
    {
      return redirect("");
    }


    
  }

 


  public function insertBooking(Request $request)
  {
    $check = 0;
    $booking = new bookingModel();

    $managerModel = new managerModel();



    $booking->booking_id =  $request->booking_id;
    $booking->entry_date =  $request->entry_date;
    $booking->exit_date =  $request->exit_date;
    $booking->B_status =  "Active";
    $booking->C_id =  $request->C_id;
    $booking->M_id =  $request->M_id;
    $room = $request->R_id;
    
    $managers = DB::table('manager')->select('M_id')->get();
    
 
    

    foreach ($managers as $manager) 
    {
      if($request->M_id == $manager->M_id )
      {
        $check = 1;
      }
      

    }
    if($check == 1)
    {
      $booking->save();
      if($booking)
      {
        $data = [$booking->booking_id];
        //dd($request->all());
        //$this->insertroombooking($booking->booking_id,$room);
        return view("addRoom",compact('data'));//insertRoom
        
      }
      else
      {
        return redirect()->back()->with('error_msg','Unable to add Booking');

      }

    }
    else
    {
      return redirect()->back()->with('error_msg','Unable to add Booking');

    }
    
  }

  


  

  public function insertroom(Request $request)
  {

    $add_room = new addroom();
    $booking_id = $request -> booking_id;
    $add_room->R_number  = $request->R_number;
    $add_room->roomtype_id = $request->roomtype_id;
    $add_room->floor = $request->floor;
    $add_room->R_status = $request->R_status;
    $add_room->save();
    
    if ($add_room)
    {
      $data = [$booking_id];
      $this->insertroombooking($add_room->roomtype_id , $booking_id);
      //dd($data); 
      return view("add_payment",compact('data'));
    }
    else
    {
      return redirect()->back()->with('error_msg','Unable to add Payment');

    }


    


  }



  public function insertroombooking($roomtype_id, $booking_id)
  {
    $add_room_booking = new addroombooking();
    $add_room_booking->R_id  = $roomtype_id;
    $add_room_booking->booking_id = $booking_id;
    
    

    $add_room_booking->save();
    if($add_room_booking)
    {
      return redirect("");
    }
    
   
    

  }

  public function insertEmployee(Request $request)
  {

    
      

    $employeeModel = new employeeModel();

    $employeeModel->E_name = $request->E_name;
    $employeeModel->E_phone_no = $request->E_phone_no;
    $employeeModel->salary= $request->salary;
    $employeeModel->job_type = $request->job_type;
    $employeeModel->hire_date = $request->hire_date;
    $employeeModel->Email = $request->Email;
    $employeeModel->save();

    if($employeeModel)
    {
      
      if($employeeModel->job_type == "Manager" || $employeeModel->job_type == "manager") 
      {
        $this->insertManager($employeeModel->id, $employeeModel->job_type, $employeeModel->E_name);

      }
      return redirect("addemployee");
    }
    else
    {
      return redirect("dashboard")->back()->with('error_msg','Unable to add user');

    }
    
 

  }

  public function insertManager($id, $job_title, $E_name)
  {

  
    $managerModel = new managerModel();

    $managerModel->M_id= $id;
    $managerModel->M_Name = $E_name;

    $managerModel->save();

    if($managerModel)
    {
      $M_id=$managerModel->M_id;
      
      //$this->insertBooking($M_id);


    }
    else
    {
      return redirect()->back()->with('error_msg','Unable to add user');
    }


  } 


  public function insertPayment(Request $request)
  {

    $payment = new paymentModel();
    
    //$property_id = $request->input('property_id');
     
    $payment->booking_id_  = $request->booking_id_ ;
    $payment->P_type = $request->P_type;
    $payment->P_amount = $request->P_amount;
    // dd($request->booking_id_);

    $payment->save();
    
    if ($payment)
    {
      return redirect("dashboard");
    }
    else
    {
      return redirect()->back()->with('error_msg','Unable to add Payment');

    }
  }

  public function insert_confirm_booking(Request $request)
  {

    $confirm_booking = new confirm_booking();
    
    //$property_id = $request->input('property_id');
     
    $confirm_booking -> name = $request-> name; 
    $confirm_booking -> email = $request-> email;
    $confirm_booking -> phone_no = $request-> phone_no;
    $confirm_booking -> address = $request-> address;
    $confirm_booking -> checkin = $request-> checkin;
    $confirm_booking -> checkout = $request-> checkout;
    // dd($request->booking_id_);

    $confirm_booking->save();
    
    if ($confirm_booking)
    {
      return redirect("/");
    }
    else
    {
      return redirect()->back()->with('error_msg','Unable to add Payment');

    }
  }



  public function viewCustomer(Request $request)
  {

    $customer = DB::table('customer')->select('C_id','C_First_Name','C_last_name','address','CNIC')->get();
    //dd($customer);
    return view('viewCustomer',compact('customer'));



  }

  public function viewManager(Request $request)
  {

    $manager = DB::table('manager')->select('M_id','M_Name')->get();
    //dd($customer);
    return view('viewManager',compact('manager'));

  }

  public function viewRoom(){
    $room = DB::table('room')->select('R_id','R_number','floor','R_status','roomtype_id')->get();
   
    return view('viewRoom',compact('room'));
  }

  public function viewEmployee(){
    $employee = DB::table('employee')->select('E_id','E_name','E_phone_no','salary','job_type','hire_date','Email')->get();
    
    return view('viewemployee',compact('employee'));
  }

  public function viewConfirmBooking(){
    $confirm_booking = DB::table('confirm_booking')->select('name','email','phone_no','checkin','CB_ID','checkout','address')->get();
 
    return view('viewConfirmBooking',compact('confirm_booking'));
  }

  public function viewBookedRooms(){
 
    $room = DB::table('room')->where('R_status','=','Booked')->get();
    return view('viewBookedRooms',compact('room'));
  }

  public function viewUnBookedRooms(){
 
    $room = DB::table('room')->where('R_status','=','UnBooked')->get();
    return view('viewUnBookedRooms',compact('room'));
  }

  public function changestatus(Request $request)
  {

    $addroom = new addroom();
    $id = $request->R_id;

    $check =  DB::select("select * from room where R_id= ?",[$id]) ;
    $dump = 0;
    //dd($check);
     
    
    foreach ($check as $checks) 
    {
      if($checks->R_status != "Unbooked")
      {
        //$managers = DB::table('manager')->select('M_id')->get();
        
        $dump = 1;
        //dd($dump);

      }

    }
    
    if($dump == 1){
      $data = addroom::where("R_id" , $id)->update(['R_status'=>"Unbooked"]);
      if($data)
      {
      
        
        return back()->with('success',"Room Status Changed");



      }
      else
      {
        return back()->with('duplicate',"Room Status already set to Unbooked");

      }

    }
    else{
      return back()->with('fail',"ID does not match");

    }
    

    



  }

  public function viewBookingStatus(){
 
    $booking = DB::table('booking')->where('B_status','=','Active')->get();
    return view('viewBookingStatus',compact('booking'));
  }

  public function viewNonBookingStatus(){
 
    $booking = DB::table('booking')->where('B_status','=','Non-Active')->get();
    return view('viewNonBookingStatus',compact('booking'));
  }

  public function viewRoomType(){
 
    $type = DB::table('room_type')->get();
    return view('viewRoomType',compact('type'));
  }


  public function changebookingstatus(Request $request)
  {

    $bookingModel = new bookingModel();
    $id = $request->booking_id;
    

    $check =  DB::select("select * from booking where booking_id= ?",[$id]) ;
    //dd($check);
    $dump = 0;
    //dd($check);
     
    
    foreach ($check as $checks) 
    {
      if($checks->B_status != "Non-Active")
      {
        
        $dump = 1;
       
      }

    }
    //dd($bookingModel);
    
    if($dump == 1)
    {
      $data = bookingModel::where('booking_id' , $id)->update(['B_status'=>"Non-Active"]);
      //dd($data);
      if($data)
      {
      
        
        return back()->with('success',"Booking Status Changed");



      }
      else
      {
        return back()->with('duplicate',"Booking Status already set to Non-Active");

      }

    }
    else{
      return back()->with('fail',"ID does not match");

    }
    

    



  }

  public function viewCustomerPhone(){
 
    $phone = DB::table('customer_phone')->get();
    return view('viewCustomerPhone',compact('phone'));
  }
  
  

}
