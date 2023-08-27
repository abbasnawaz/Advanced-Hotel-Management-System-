<!doctype html>
<html lang="en">

<head>
  <title>Booking</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/employee.css')); ?>">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body class="back-color font-size">
        <ul>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            


            
    <div class="d-flex justify-content-center">
    <div class="d-flex justify-content-center triangle-border">
        
        <form action = "<?php echo e(url('/booking')); ?>" method="post">
        <?php echo csrf_field(); ?>
            <div class=" text-center mt-5 p-80" class="col-auto">
                <label for="bid" class="form-label font">Booking ID</label>
                <br>
                <input type="number"  class="form-control form-back" id="bid" placeholder="Enter Booking ID" required name="booking_id" >
            </div>
            
            <div class=" text-center mt-3 " class="col-auto">
                <label for="cid" class="form-label font">Customer ID</label>
                <br>
                <input type="number"  class="form-control form-back" id="cid" placeholder=<?php echo e($key); ?> value=<?php echo e($key); ?> required name="C_id">
            </div>
            <div class=" text-center mt-3 " class="col-auto">
                <label for="mid" class="form-label font">Manager ID</label>
                <br>
                <input type="number"  class="form-control form-back" id="mid" placeholder="Enter Manager ID" required name="M_id">
            </div>
            
            <div class="row mt-3 " >
            <div class="col-6">
                <label for="indate" class="form-label font">Check in</label>
                <br>
                <input type="date"  class="form-control form-back" id="indate" placeholder="Enter the hire date " required name="entry_date">
            </div>
            <div class="col-6">
            <label for="outdate" class="form-label font">Check out</label>
                <br>
                <input type="date"  class="form-control form-back" id="outdate" placeholder="Enter the hire date " required name="exit_date">
            </div>
            </div>
            <div class="text-center mt-5 mb-5 ">
                <button type="submit" class=" btn-lg btn btn-outline-secondary btn-back"  style="height: 50px; width: 200px ">Add Booking</button>
            </div>

        </form>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html><?php /**PATH C:\Users\sb\Desktop\WEB\web php\web php\marigold\resources\views/add_booking.blade.php ENDPATH**/ ?>