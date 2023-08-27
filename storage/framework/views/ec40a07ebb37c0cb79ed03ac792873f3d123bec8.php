<!doctype html>
<html lang="en">

<head>
  <title>Employee</title>
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
    <div class="d-flex justify-content-center">
    <div class="d-flex justify-content-center triangle-border">
        <form action = "<?php echo e(url('/addemployee')); ?>" method="post">
        <?php echo csrf_field(); ?>
            <div class=" text-center mt-5" class="col-auto">
                <label for="name" class="form-label font">Name</label>
                <br>
                <input type="text"  class="form-control form-back" id="name" placeholder="Enter Name" required name="E_name">
            </div>
            <div class=" text-center mt-2 " class="col-auto">
                <label for="exampleInputEmail1" class="form-label font">Email address</label>
                <br>
                <input type="email"  class="form-control form-back" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address" required name="Email">
            </div>
            <div class=" text-center mt-2" class="col-auto">
                <label for="phone" class="form-label font">Phone Number</label>
                <br>
                <input type="number"  class="form-control form-back" id="phone" placeholder="Enter Phone Number" required name="E_phone_no">
            </div>
            <div class=" text-center mt-2 " class="col-auto">
                <label for="date" class="form-label font">Hire Date</label>
                <br>
                <input type="date"  class="form-control form-back" id="date" placeholder="Enter the hire date " required name="hire_date">
            </div>
            <div class="row mt-2" >
            <div class="col-6">
                <label for="job" class="form-label font">Job type</label>
                <input type="text"  class="form-control form-back" id="job" placeholder="Enter Job Type" required name="job_type">
            </div>
            <div class="col-6">
                <label for="salary" class="form-label font">Salary</label>
                <input type="number"  class="form-control form-back" id="salary" placeholder="Enter Salary" required name="salary" >
            </div>
            </div>
            <div class="text-center mt-5 mb-5">
                <button type="submit" class=" btn-lg btn btn-outline-secondary btn-back"  style="height: 50px; width: 200px ">Add Employee</button>
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

</html><?php /**PATH E:\web php\marigold\resources\views/add_employee.blade.php ENDPATH**/ ?>