<!doctype html>
<html lang="en">

<head>
  <title>Add Room</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/employee.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

            





<body class="back-color font-size">

    <div class="container">
        <div class="row">
            
            <div class="col-4 magincard">
                <div class="card card_style shadow" >
                    <div class="card-body">
                        <h5 class="card-title">Room Type</h5>
                        <p class="card-text">View all Room Type</p>
                        <div class="d-grid gap-2 ">
                            <a class="btn btn-back"  type="button" href = "{{url('/viewRoomType')}}" target = "_blank">View</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">
                    <ul>
                    @foreach($data as $key)
                    

            <div class="d-flex justify-content-end">
            <div class="d-flex justify-content-end triangle-border">
                <form action = "{{url('/addroom')}}" method = "post" >
                    
                @csrf
                    <div class=" text-center mt-5 " class="col-auto">
                        <label for="exampleInputEmail1" class="form-label font">Booking ID : </label>
                        <br>
                        <input type="number"  class="form-control form-back" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder={{$key}}  value={{$key}}  required name = "booking_id">
                    </div>
                    <div class=" text-center mt-2" class="col-auto">
                        <label for="phone" class="form-label font">Room ID : </label>
                        <br>
                        <input type="text"  class="form-control form-back" id="phone" placeholder="Enter Room ID" required name = "roomtype_id">
                    </div>
                    <div class=" text-center mt-2" class="col-auto">
                        <label for="phone" class="form-label font">Room Number : </label>
                        <br>
                        <input type="text"  class="form-control form-back" id="phone" placeholder="Enter Room ID" required name = "R_number">
                    </div>
                    <div class=" text-center mt-2" class="col-auto">
                        <label for="phone" class="form-label font">Room Status : </label>
                        <br>
                        <input type="text"  class="form-control form-back" id="phone" value="Booked" required name = "R_status">
                    </div>
                    <div class=" text-center mt-2" class="col-auto">
                        <label for="phone" class="form-label font">Room Floor : </label>
                        <br>
                        <input type="text"  class="form-control form-back" id="phone" value="1" required name = "floor">
                    </div>
                    
                    
                    <div class="text-center mt-5 mb-5">
                        <button type="submit" class=" btn-lg btn btn-outline-secondary btn-back"  style="height: 50px; width: 200px ">Add !</button>
                    </div>

                </form>
            </div>
        </div>

        @endforeach
                </ul>



            </div>
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