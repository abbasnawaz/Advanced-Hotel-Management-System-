<!doctype html>
<html lang="en">

<head>
  <title>Booking</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="<?php echo e(asset('img/logo4.png')); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/employee.css')); ?>">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body class="back-color font-size">
        
            


            
    <div class="d-flex justify-content-end">
    <div class="d-flex justify-content-end triangle-border">
        
        <form action = "<?php echo e(url('/changestatus')); ?>" method="post">
        <?php if(Session::has("success")): ?>
            <div class="alert alert-success" >
                <?php echo e(Session::get('success')); ?>

              
            </div>
            <?php endif; ?>
            <?php if(Session::has("duplicate")): ?>
            <div class="alert alert-success" >
                <?php echo e(Session::get('duplicate')); ?>

              
            </div>
            <?php endif; ?>
            <?php if(Session::has("fail")): ?>
            <div class="alert alert-success" >
                <?php echo e(Session::get('fail')); ?>

              
            </div>
            <?php endif; ?>
        <?php echo csrf_field(); ?>
            <div class=" text-center mt-5 p-80" class="col-auto">
                <label for="bid" class="form-label font">Room ID</label>
                <br>
                <input type="number"  class="form-control form-back" id="bid" placeholder="Enter Room ID" required name="R_id" >
            </div>
           
            <div class="text-center mt-5 mb-5 ">
                <button type="submit" class=" btn-lg btn btn-outline-secondary btn-back"  style="height: 50px; width: 200px ">Update</button>
            </div>

        </form>
    </div>
</div>




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html><?php /**PATH E:\web php\marigold\resources\views/changestatus.blade.php ENDPATH**/ ?>