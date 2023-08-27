<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body class="back-color font-size">
    <div class="d-flex justify-content-end">
    <div class="d-flex justify-content-center triangle-border">
        <form action="{{url('/login')}}" method = "post">
        @if(Session::has("success"))
            <div class="alert alert-success" >
                {{Session::get('success')}}
              
            </div>
            @endif
            @if(Session::has("fail"))
            <div class="alert alert-success" >
                {{Session::get('fail')}}
              
            </div>
            @endif
            @csrf
          @csrf
           <div class="mb-3 text-center mt-5" class="col-auto">
                <label for="exampleInputEmail1" class="form-label font">Email address</label>
                <br>
                <input type="text"  class="form-control form-back" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address" name ="email" >
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>
            <div class="mb-3 text-center mt-5" class="col-auto font">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <br>
                <input type="password"  class="form-control form-back" id="exampleInputPassword1 "  placeholder="Enter your password" name="password" >
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>

            <div class="text-center mt-5 mb-5">
                <button type="submit" class=" btn-lg btn btn-outline-secondary btn-back"  style="height: 50px; width: 150px ">login</button>
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

</html>