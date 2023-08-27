<!doctype html>
<html lang="en">

<head>
  <title>Book Now !</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/booknow.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body class="back-color font-size">


    


    <section class = "section " >

        <div class="d-flex justify-content-end">
          <div class="d-flex justify-content-end triangle-border">
              <form action="{{url('/booknow')}}" method = "post">
              @csrf
                <div class="row mt-4">
                <div  class="col-6">
                      <label for="name" class="form-label font">Name</label>
                      <input type="text"  class="form-control form-back" id="name" placeholder="Enter Name" required name ="name">
                </div>
                <div  class="col-6">
                      <label for="exampleInputEmail1" class="form-label font">Email address</label>
                      <input type="email"  class="form-control form-back" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address" required name = "email">
                  </div>
                </div>
                <div class="row mt-2">
                  <div  class="col-6">
                      <label for="phone" class="form-label font">Phone Number</label>
                      <input type="number"  class="form-control form-back" id="phone" placeholder="Enter Phone Number" required name = "phone_no">
                  </div>
                  <div  class="col-6">
                    <label for="address" class="form-label font">Address</label>
                    <input type="text"  class="form-control form-back" id="address" placeholder="Enter Address" required name = "address">
              </div>     
                </div>
                  <div class="row mt-2" >
                    <div class="col-6">
                      <label for="checkin_date" class="form-label font">Check in</label>
                      <input type="date"  class="form-control form-back" id="checkin_date" required name = "checkin">
                  </div>
                  <div class="col-6">
                    <label for="checkout_date" class="form-label font">Check out</label>
                    <input type="date"  class="form-control form-back" id="checkout_date"  required name = "checkout">
                </div>
                  
                  </div>
                  <div class="text-center mt-5 mb-5">
                      <button type="submit" class=" btn-lg btn btn-outline-secondary btn-back"  style="height: 50px; width: 150px ">Book NOW !</button>
                  </div>
      
              </form>
          </div>
      </div>

       


        

        

      </section>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>