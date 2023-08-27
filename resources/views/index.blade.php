<!doctype html>
<html lang="en">
  <head>
    <title>MariGold</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('css/section1.css')}}">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

  </head>
  <body class = "background">

    

    <nav class="navbar navbar-expand-lg navbar-color">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home.page')}}">
                <img src="{{asset('img/logo4.png')}}" alt="" width="100" height="60">
              </a>
          <a class="navbar-brand" href="{{route('home.page')}}">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#aboutus">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#showrooms">Rooms</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#gallery">Gallery</a>
              </li>

              
              
          </div>

          <span class="collapse navbar-collapse d-flex justify-content-end " id="navbarNav">
            <ul class="navbar-nav">

          

              <li class="nav-item m-2">
                <a type="button" class="btn btn-outline login btn-lg btn-block " href="{{route('booknow.page')}}" >BOOK NOW !</a> 
              </li>
              <li class="nav-item m-2">
                <a type="button" class="btn btn-outline login btn-lg btn-block " href="{{route('login.page')}}" >LOGIN</a> 
              </li>
              
              
            
          
            </ul>
          </span>
        </div>
      </nav>


      <section class = "section " >
        <div class="d-flex justify-content-end">
          <div class="d-flex justify-content-end textback">
            <div>
              <h3 class="display-11">
                The Hotel is a modern, elegant 4-star hotel overlooking
                the sea,perfect for a romantic, charming vacation, in 
                the enchanting setting of Taormina and the Ionian Sea.
                The rooms at the Panoramic Hotel are new, well-lit 
                and inviting.Our reception staff will be happy to 
                help you during your stay in Taormina, suggesting 
                itineraries, guided visits and some good restaurants 
                in the historic centre.

              </h3>
            </div>
            
              
          </div>
          
      </div>
      <div class="row">
        <div class="col justify-content-center">
          <a type="button" class="btn btn-outline login btn-lg btn-block position btn1" href="{{route('booknow.page')}}" >BOOK NOW !</a>

        </div>
      </div>
      

       
        

        
      </section>
      <section id = "gallery">
        
        <div class="row">
          <div class="column">
  
            
            <!--<div class="embed-responsive embed-responsive-16by9">
              <video autoplay muted controls>
                <source src="C:\Users\abbas\OneDrive\Desktop\Web Project\img\video1.ts" type="video/mp4">
                
              </video>
             
            </div>-->
  
  
            <img src="{{asset('img/1.jpg')}}">
            <img src="{{asset('img/2.jpg')}}">
            
            
          </div>
          <div class="column">
            <img src="{{asset('img/3.jpg')}}">
            <img src="{{asset('img/4.jpg')}}">
            
            
          </div>
          <div class="column">
            <img src="{{asset('img/5.jpg')}}">
            <img src="{{asset('img/6.jpg')}}">
            
            
            
          </div>
          <div class="column">
            <img src="{{asset('img/10.jpg')}}">
            <img src="{{asset('img/8.jpg')}}">
            
            
          </div>
          
        </div>
  

      </section>

      <section id="showrooms">
        <div class="container-fluid">
          <div class="row">
            <div class="col-4 col-sm-4 p-3 mt-3">
               
              <div class="card shadow text-center" style="width: 25rem;">
                
                <div class="card-header cardback animation">
                  <div class="row align-items-center"  >
                    <div class="col">
                      <h3 class="display-5" >Single</h3>
                      
                    </div>
                    <div class="col display-3">
                      <h3 class="display-3">01</h3>
                    </div>
      
                  </div>
                  
                  
                  
                </div>
                <div class="card-footer">
                  <h5>
                    <a type="button" class="btn btn-outline text-center detailsview btn-sm btn-block " href="{{route('single.page')}}" target="_blank" >View Details  <img src="{{asset('img/arrow.svg')}}" > </a>  
                  </h5>

      
                </div>
              </div>
      
            </div>
            
            <div class="col-4 col-sm-4 p-3 mt-3">
  
              <div class="card shadow text-center" style="width: 25rem;">
                <div class="card-header cardback animation">
                  <div class="row align-items-center"  >
                    <div class="col">
                      <h3 class="display-5" >Double</h3>
                    </div>
                    <div class="col display-3">
                      <h3 class="display-3">02</h3>
                    </div>
      
                 </div>
                </div>
                
                <div class="card-footer">
                  <h5>
                    <a type="button" class="btn btn-outline text-center detailsview btn-sm btn-block " href="{{route('double.page')}}" target="_blank">View Details  <img src="{{asset('img/arrow.svg')}}" > </a>  
                  </h5>
      
                </div>
              </div>
      
            </div>
              
            <div class="col-4 col-sm-4 p-3 mt-3">
  
              <div class="card shadow text-center" style="width: 25rem;">
                <div class="card-header cardback animation">
                  <div class="row align-items-center"  >
                    <div class="col">
                      <h3 class="display-5" >Triple</h3>
                    </div>
                    <div class="col display-3">
                      <h3 class="display-3">03</h3>
                    </div>
      
                  </div>
                  
                  
                  
                </div>
                <div class="card-footer">
                  <h5>
                    <a type="button" class="btn btn-outline text-center detailsview btn-sm btn-block " href="{{route('triple.page')}}" target="_blank" >View Details  <img src="{{asset('img/arrow.svg')}}" > </a>  
                  </h5>
      
                </div>
              </div>
      
            </div>


           <div class="col-4 col-sm-4 p-3 mt-3">
  
            <div class="card shadow text-center" style="width: 25rem;">
              <div class="card-header cardback animation">
                <div class="row align-items-center"  >
                  <div class="col">
                    <h3 class="display-5" >Quad</h3>
                  </div>
                  <div class="col display-3">
                    <h3 class="display-3">04</h3>
                  </div>
    
                </div>
                
                
                
              </div>
              <div class="card-footer">
                <h5>
                  <a type="button" class="btn btn-outline text-center detailsview btn-sm btn-block " href="{{route('quad.page')}}" target="_blank" >View Details  <img src="{{asset('img/arrow.svg')}}" > </a>  
                </h5>
    
              </div>
            </div>
    
          </div>


          <div class="col-4 col-sm-4 p-3 mt-3">
    
            <div class="card shadow text-center" style="width: 25rem;">
              <div class="card-header cardback animation">
                <div class="row align-items-center"  >
                  <div class="col">
                    <h3 class="display-5" >Queen</h3>
                  </div>
                  <div class="col display-3">
                    <h3 class="display-3">05</h3>
                  </div>
    
                </div>
                
                
                
              </div>
              <div class="card-footer">
                <h5>
                  <a type="button" class="btn btn-outline text-center detailsview btn-sm btn-block " href="{{route('queen.page')}}" target="_blank" >View Details  <img src="{{asset('img/arrow.svg')}}" > </a>  
                </h5>
    
              </div>
            </div>
  
        </div>
           
  
            
        <div class="col-4 col-sm-4 p-3 mt-3">
  
          <div class="card shadow text-center" style="width: 25rem;">
            <div class="card-header cardback animation">
              <div class="row align-items-center"  >
                <div class="col">
                  <h3 class="display-5" >King</h3>
                </div>
                <div class="col display-3">
                  <h3 class="display-3">06</h3>
                </div>
  
              </div>
              
              
              
            </div>
            <div class="card-footer">
              <h5>
                <a type="button" class="btn btn-outline text-center detailsview btn-sm btn-block " href="{{route('king.page')}}" target="_blank">View Details  <img src="{{asset('img/arrow.svg')}}" > </a>  
              </h5>
  
            </div>
          </div>
  
        </div>
        <div class="col-4 col-sm-4 p-3 mt-3">
  
          <div class="card shadow text-center" style="width: 25rem;">
            <div class="card-header cardback animation">
              <div class="row align-items-center"  >
                <div class="col">
                  <h3 class="display-5" >Twin</h3>
                </div>
                <div class="col display-3">
                  <h3 class="display-3">07</h3>
                </div>
  
              </div>
              
              
              
            </div>
            <div class="card-footer">
              <h5>
                <a type="button" class="btn btn-outline text-center detailsview btn-sm btn-block " href="{{route('twin.page')}}" target="_blank">View Details  <img src="{{asset('img/arrow.svg')}}" > </a>  
              </h5>
  
            </div>
          </div>
  
        </div>
        <div class="col-4 col-sm-4 p-3 mt-3">
  
          <div class="card shadow text-center " style="width: 25rem;">
            <div class="card-header cardback animation" >
              <div class="row align-items-center"  >
                <div class="col">
                  <h3 class="display-7" >Master Suite</h3>
                </div>
                <div class="col display-3">
                  <h3 class="display-3">08</h3>
                </div>
  
              </div>
              
              
              
            </div>
            <div class="card-footer">
              <h5>
                <a type="button" class="btn btn-outline text-center detailsview btn-sm btn-block " href="{{route('mastersuite.page')}}" target="_blank" >View Details  <img src="{{asset('img/arrow.svg')}}" > </a>  
              </h5>

  
            </div>
          </div>
  
        </div>
        <div class="col-4 col-sm-4 p-3 mt-3">
  
          <div class="card shadow text-center" style="width: 25rem;">
            <div class="card-header cardback animation">
              <div class="row align-items-center"  >
                <div class="col">
                  <h3 class="display-7" >MariGold Special</h3>
                </div>
                <div class="col display-3">
                  <h3 class="display-3">09</h3>
                </div>
  
              </div>
              
              
              
            </div>
            <div class="card-footer">
              <h5>
                <a type="button" class="btn btn-outline text-center detailsview btn-sm btn-block " href="{{route('special.page')}}" target="_blank">View Details  <img src="{{asset('img/arrow.svg')}}" > </a>  
              </h5>
  
            </div>
          </div>
  
        </div>
            
            </div>
            
            
            
  
             
  
            
            
            
          </div>
         

        </div>
        
        
      </section>

      


      </div>

      


      







   
      

      
      
      

     
      
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>



   
<footer class="page-footer font-small blue pt-4 footer_color" id="aboutus">

 
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
    <a href="{{route('home.page')}}"> MARIGOLD</a>
    
  </div>

</footer>



  </body>
</html>