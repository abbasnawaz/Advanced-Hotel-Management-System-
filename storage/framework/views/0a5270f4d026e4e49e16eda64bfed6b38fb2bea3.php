<!doctype html>
<html lang="en">

<head>
  <title>View Booking Status </title>
  <link rel="icon" type="image/x-icon" href="<?php echo e(asset('img/logo4.png')); ?>">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <link rel="stylesheet" href="<?php echo e(asset('css/details_room.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
  <link href="<?php echo e(asset('https://fonts.googleapis.com/css?family=Roboto')); ?>" rel='stylesheet'>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="back-color">
  <div class = "table-responsive">
    <div class = triangle-border>
      <table class="table table-striped mt-4 mb-4 tablecolor table-borderless table-hover  ">
        <thead class = "thread-dark">
          <tr>
            <th scope="col">Customer ID</th>
            <th scope="col">Phone Number</th>
          </tr>

        </thead>
        <tbody>
          <?php $__currentLoopData = $phone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($row->C_id); ?></td>
            <td><?php echo e($row->C_phone_no); ?></td>
         
         </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>


    </div>
  </div>

  <footer class="footer_color">
    <div class="container-fluid text-center text-md-left">

    

  
      <div class="row">
  
        <div class="row   no-gutters">
          <div class="col-md-4 mb-md-0 mb-4 d-flex">
            <div class="con con-1 w-100 py-5">
              <div class="con-info w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="ion-ios-call"></span>
                </div>
                <div class="text">
                  <span>0321-9704177</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-md-0 mb-4 d-flex">
            <div class="con con-2 w-100 py-5">
              <div class="con-info w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="ion-ios-mail"></span>
                </div>
                <div class="text">
                  <span>marigold@email.com</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-md-0 mb-4 d-flex">
            <div class="con con-3 w-100 py-5">
              <div class="con-info w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="text">
                  <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        
  
         
        
        
  
      </div>
  
    </div>
    
    <div class="footer-copyright text-center py-3">© 2022 Copyright:
      <a href="\Web Project\index.html"> MARIGOLD</a>
      
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html><?php /**PATH E:\web php\marigold\resources\views/viewCustomerPhone.blade.php ENDPATH**/ ?>