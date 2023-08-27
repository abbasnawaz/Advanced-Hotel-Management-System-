<!doctype html>
<html lang="en">

<head>
  <title>DashBoard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body class="back-color font-size">

  <nav class="navbar navbar-expand-lg navbar-light nav-color ">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo e(route('dashboard.page')); ?>">
        <img src="<?php echo e(asset('img/logo4.png')); ?>" alt="" width="100" height="60">
      </a>
      <a class="navbar-brand" style="font-size: 35px ;color:black;" href="#">MariGold</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        
          <a class="nav-link" href='<?php echo e(url("/logout")); ?>' style="color:black;">
          <table class="table table-striped table-responsive">
            <thead>
              
                <th>Name : <?php echo e($data->name); ?></th>
                
              
            
                <th>Email : <?php echo e($data->email); ?></th>
                
              
                <th>Logout!
            <img src="<?php echo e(asset('img/house.svg')); ?>" alt=""  width="30" height="24" class="d-inline-block align-text-top"></th>
                
              
              
          </table>
          
          
          
            
          </a>
          
         
        
      </div>
      
    </div>
  </nav>
  

    <div class="row">
      <div class="col-lg-3">
        <div id="box1"><div class="vertical-menu col  ">
          <a href="#" class="active ">DashBoard</a>
              
              <a class="nav-link" href="<?php echo e(route('add_customer.page')); ?>">Customer</a>
              <a class="nav-link" href="<?php echo e(route('add_booking.page')); ?>">Add Booking</a>
              <a class="nav-link" href="#">Room</a>
              <a class="nav-link" href="<?php echo e(route('add_employee.page')); ?>">Add Employees</a>
              <a class="nav-link" href="#">Rooms Description</a>
              <a class="nav-link" href="<?php echo e(route('add_payment.page')); ?>">Payment</a>
              <a class="nav-link" href="#">Customer Phone</a>
              <a class="nav-link" href="<?php echo e(route('changestatus.page')); ?>">Change Room Status</a>
              <a class="nav-link" href="<?php echo e(route('changebookingstatus.page')); ?>">Change Booking Status</a>
              <a class="nav-link" href="<?php echo e(route('registration.page')); ?>">Add New User</a>
              
    
    
                    
              </div></div>
      </div>
      <div class="col-lg-3 ">
        <div id="box2">
         <div class="col mt-4 ml-5">
          <div class="card card_style shadow ">
             <div class="card-body">
              <h5 class="card-title">Customer</h5>
              <p class="card-text">View Total Customer </p>
              <div class="d-grid gap-2 ">
                <a class="btn btn-back"  type="button" href = "<?php echo e(url('/viewCustomer')); ?>" target = "_blank">View</a>
              </div>
            </div>
          </div>   
    
        </div></div>
        <div id="box3"><div class=" col mt-4 ml-5">
          <div class="card  card_style shadow" >
            <div class="card-body">
              <h5 class="card-title">Room Type</h5>
              <p class="card-text">View all room types</p>
              <div class="d-grid gap-2 ">
                <a class="btn btn-back"  type="button" href = "<?php echo e(url('/viewRoomType')); ?>" target = "_blank">View</a>
              </div>
            </div>
          </div>   
        </div></div>
        <div id="box4"><div class=" col mt-4 ml-5">
          <div class="card card_style shadow" >
            <div class="card-body">
              <h5 class="card-title">Confirm Booking</h5>
              <p class="card-text">View all Confirmed Booking</p>
              <div class="d-grid gap-2 ">
                <a class="btn btn-back"  type="button" href = "<?php echo e(url('/viewConfirmBooking')); ?>" target = "_blank">View</a>
              </div>
            </div>
          </div>   
        </div></div>
      </div>
      <div class="col-lg-3">
        <div id="box2"><div class=" col mt-4 ml-5">
          <div class="card card_style shadow" >
            <div class="card-body">
              <h5 class="card-title">Employees</h5>
              <p class="card-text">View All Employess </p>
              <div class="d-grid gap-2 ">
                <a class="btn btn-back"  type="button" href = "<?php echo e(url('/viewEmployee')); ?>" target = "_blank">View </a>
              </div>
            </div>
          </div>   
        </div></div>
        <div id="box3"><div class=" col mt-4 ml-5">
          <div class="card card_style shadow" >
            <div class="card-body">
              <h5 class="card-title">Unbooked Rooms</h5>
              <p class="card-text">View all unbooked rooms </p>
              <div class="d-grid gap-2 ">
                <a class="btn btn-back"  type="button" href = "<?php echo e(url('/viewUnBookedRooms')); ?>" target = "_blank">View</a>
              </div>
            </div>
          </div>   
        </div></div>
        <div id="box4"><div class=" col mt-4 ml-5">
          <div class="card card_style shadow" >
            <div class="card-body">
              <h5 class="card-title">Active Booking</h5>
              <p class="card-text">View All Active Booking </p>
              <div class="d-grid gap-2 ">
                <a class="btn btn-back"  type="button" href = "<?php echo e(url('/viewBookingStatus')); ?>" target = "_blank">View</a>
              </div>
            </div>
          </div>   
        </div></div>
      </div>
      <div class="col-lg-3">
        <div id="box2"><div class=" col mt-4 ml-5">
          <div class="card card_style shadow" >
            <div class="card-body">
              <h5 class="card-title">Managers</h5>
              <p class="card-text">View all Managers</p>
              <div class="d-grid gap-2 ">
                <a class="btn btn-back"  type="button" href = "<?php echo e(url('/viewManager')); ?>" target = "_blank">View</a>
              </div>
            </div>
          </div>   
        </div></div>
        <div id="box3"><div class=" col mt-4 ml-5">
          <div class="card card_style shadow " >
            <div class="card-body">
              <h5 class="card-title">Booked Rooms</h5>
              <p class="card-text">View all booked rooms</p>
              <div class="d-grid gap-2 ">
                <a class="btn btn-back"  type="button" href = "<?php echo e(url('/viewBookedRooms')); ?>" target = "_blank">View</a>
              </div>
            </div>
          </div>   
        </div></div>
        <div id="box4"><div class=" col mt-4 ml-5">
          <div class="card card_style shadow">
            <div class="card-body">
              <h5 class="card-title">Non Active Booking</h5>
              <p class="card-text">View All Non Active Booking  </p>
              <div class="d-grid gap-2 ">
                <a class="btn btn-back"  type="button" href = "<?php echo e(url('/viewNonBookingStatus')); ?>" target = "_blank">View</a>
              </div>
            </div>
          </div>   
        </div></div>
      </div>
      
  













  

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html><?php /**PATH C:\Users\sb\Desktop\WEB\web php\web php\marigold\resources\views/dashboard.blade.php ENDPATH**/ ?>