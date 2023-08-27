<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\marigold;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
})->name("home.page");



//login

Route::get('/login', function () {
    return view('auth.login');
})->name("login.page");

Route::get('/registration', function () {
    return view('auth.registration');
})->name("registration.page");

Route::post('/login', [marigold::class,'loginuser']);

Route::post('/registration', [marigold::class,'registrationuser']);
Route::get('/logout', [marigold::class, 'logout'] );









Route::get('/dashboard', [marigold::class, 'dashboard'] 
    
)->name("dashboard.page")->middleware('isLoggedIn');




//room details


Route::get('/singleroom', function () {
    return view('single');
})->name("single.page");

Route::get('/doubleroom', function () {
    return view('double');
})->name("double.page");

Route::get('/tripleroom', function () {
    return view('triple');
})->name("triple.page");

Route::get('/quad', function () {
    return view('quad');
})->name("quad.page");

Route::get('/queen', function () {
    return view('queen');

})->name("queen.page");

Route::get('/king', function () {
    return view('king');

})->name("king.page");

Route::get('/twin', function () {
    return view('twin');

})->name("twin.page");


Route::get('/mastersuite', function () {
    return view('mastersuite');

})->name("mastersuite.page");


Route::get('/special', function () {
    return view('special');

})->name("special.page");


//forms

Route::get('/payment', function () {
    $data = [-1];
    return view('add_payment',compact('data'));

})->name("add_payment.page")->middleware('isLoggedIn');

Route::get('/customer', function () {
    return view('add_customer');

})->name("add_customer.page")->middleware('isLoggedIn');

Route::get('/manager', function () {
    return view('add_manager');
})->name("add_manager.page")->middleware('isLoggedIn');

Route::get('/addemployee', function () {
    return view('add_employee');
})->name("add_employee.page")->middleware('isLoggedIn');

Route::get('/booknow', function () {
    return view('booknow');
})->name("booknow.page");

Route::get('/addroom', function () {
    $data = [-1];
    return view('addRoom',compact('data'));
})->name("addroom.page")->middleware('isLoggedIn');

Route::get('/room', function () {
    return view('room');
})->name("room.page")->middleware('isLoggedIn');

Route::get('/booking', function () {
    $data = [-1];
    return view('add_booking',compact('data'));
})->name("add_booking.page")->middleware('isLoggedIn');

Route::get('/addroomid', function () {
    return view('addroomid');
})->name("addroomid.page")->middleware('isLoggedIn');




// form links

Route::post('/customer', [marigold::class,'insertCustomer']);
Route::post('/addemployee', [marigold::class,'insertEmployee']);

Route::post('/manager', [marigold::class,'insertManager']);
Route::post('/booking', [marigold::class,'insertBooking']);
Route::post('/payment', [marigold::class,'insertPayment']);
Route::post('/addroomid', [marigold::class,'insertroombooking']);

//Route::post('/room', [marigold::class,'insertroom']);
Route::post('/addroom', [marigold::class,'insertroom']);

Route::post('/booknow', [marigold::class,'insert_confirm_booking']);



//view the data

Route::get('/viewCustomer', [marigold::class, 'viewCustomer'] 
    
)->name("viewCustomer.page")->middleware('isLoggedIn');

Route::get('/viewManager', [marigold::class, 'viewManager'] 
    
)->name("viewManager.page")->middleware('isLoggedIn');

Route::get('/viewRoom', [marigold::class, 'viewRoom'] 
    
)->name("viewRoom.page")->middleware('isLoggedIn');

Route::get('/viewEmployee', [marigold::class, 'viewEmployee'] 
    
)->name("viewEmployee.page")->middleware('isLoggedIn');

Route::get('/viewConfirmBooking', [marigold::class, 'viewConfirmBooking'] 
    
)->name("viewConfirmBooking.page")->middleware('isLoggedIn');

Route::get('/viewBookedRooms', [marigold::class, 'viewBookedRooms'] 
    
)->name("viewBookedRooms.page")->middleware('isLoggedIn');

Route::get('/viewUnBookedRooms', [marigold::class, 'viewUnBookedRooms'] 
    
)->name("viewUnBookedRooms.page")->middleware('isLoggedIn');

Route::get('/viewBookingStatus', [marigold::class, 'viewBookingStatus'] 
    
)->name("viewBookingStatus.page")->middleware('isLoggedIn');

Route::get('/viewNonBookingStatus', [marigold::class, 'viewNonBookingStatus'] 
    
)->name("viewNonBookingStatus.page")->middleware('isLoggedIn');

Route::get('/viewRoomType', [marigold::class, 'viewRoomType'] 
    
)->name("viewRoomType.page")->middleware('isLoggedIn');

Route::get('/changestatus', function () {
    return view('changestatus');
})->name("changestatus.page")->middleware('isLoggedIn');

Route::post('/changestatus', [marigold::class,'changestatus']);

Route::post('/changebookingstatus', [marigold::class,'changebookingstatus']);

Route::get('/changebookingstatus', function () {
    return view('changebookingstatus');
})->name("changebookingstatus.page")->middleware('isLoggedIn');


Route::get('/viewCustomerPhone', [marigold::class, 'viewCustomerPhone'] 
    
)->name("viewCustomerPhone.page")->middleware('isLoggedIn');