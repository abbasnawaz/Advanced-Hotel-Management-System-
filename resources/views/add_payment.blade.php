<!doctype html>
<html lang="en">

<head>
  <title>Payment</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/employee.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>
<ul>
            @foreach($data as $key)
            





<body class="back-color font-size">
    <div class="d-flex justify-content-end">
    <div class="d-flex justify-content-center triangle-border">
        <form action = "{{url('/payment')}}" method = "post" >
            
        @csrf
            <div class=" text-center mt-5 " class="col-auto">
                <label for="exampleInputEmail1" class="form-label font">Booking ID : </label>
                <br>
                <input type="number"  class="form-control form-back" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder={{$key}}  value= {{$key}} required name = "booking_id ">
            </div>
            <div class=" text-center mt-2" class="col-auto">
                <label for="phone" class="form-label font">Payment Type : </label>
                <br>
                <input type="text"  class="form-control form-back" id="phone" placeholder="Enter Payment type" required name = "P_type">
            </div>
            <div class=" text-center mt-2 " class="col-auto">
                <label for="date" class="form-label font">Payment Amount</label>
                <br>
                <input type="number"  class="form-control form-back" id="date" placeholder="Enter Amount " required name = "P_amount">
            </div>
            
            <div class="text-center mt-5 mb-5">
                <button type="submit" class=" btn-lg btn btn-outline-secondary btn-back"  style="height: 50px; width: 200px ">Pay !</button>
            </div>

        </form>
    </div>
</div>

            
@endforeach
        </ul>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>