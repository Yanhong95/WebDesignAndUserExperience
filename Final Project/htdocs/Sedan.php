<?php 
session_start();
include ('header.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sedan</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/model.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
      <section class="sedanContent jumbotron jumbotron-fluid text-center" style="height:713px;
  background: linear-gradient(to right, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url(images/model-Sedan-background.jpg);
  background-size:100% 100%;">
       <div class="container text-white">
        <h1 class="display-3">SEDAN</h1>
          <p class="lead ">Sedan is a passenger car in a three-box configuration with A, B, & C-pillars and principal volumes articulated in separate compartments for engine, passenger and cargo.The primary purpose of the sedan is to transport people and their baggage on ordinary roads. Sedan versions of the automobile body style have a central pillar  that supports the roof and come in two- and four-door versions.</p>
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/kWJNU0pezAU" allowfullscreen></iframe>
          </div>
      </div>
    </section>
    <section>
    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active text-secondary" id="Economys-tab" data-toggle="tab" href="#Economy" role="tab" aria-controls="Economy" aria-selected="true"><h2 class="display-4">Economy</h2></a>
      </li>
      <li class="nav-item text-secondary">
        <a class="nav-link" id="Comfort-tab" data-toggle="tab" href="#Comfort" role="tab" aria-controls="Comfort" aria-selected="false"><h2 class="display-4">Comfort</h2></a>
      </li>
      <li class="nav-item text-secondary">
        <a class="nav-link" id="Luxury-tab" data-toggle="tab" href="#Luxury" role="tab" aria-controls="Luxury" aria-selected="false"><h2 class="display-4">Luxury</h2></a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="Economy" role="tabpanel" aria-labelledby="Economy-tab">
        
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="images/collection/Chevrolet-Malibu.png" alt="Honda-CR-V.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "11"> 
              <h5 class="card-title text-left">Chevrolet Malibu</h5>
              <h6 class="text-muted">Compact sport utility vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">MPG:<small> Up to 28 city / 34 highway</small><br>
                Dimensions:: <small>181″ L x 73″ W x 66-67″ H</small><br>
                Cargo volume: <small> 37.6 to 39.2 ft³, 75.8 ft³ with seat area</small><br>
                Engine: <small> 37.6 to 39.2 ft³, 75.8 ft³ with seat area</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $27,800</small></p>
            </form>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/collection/LEXUS-ES.png" alt="Toyota-RAV4-Hybrid.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "10"> 
              <h5 class="card-title text-left">LEXUS ES</h5>
              <h6 class="text-muted">Hybrid utility vehicle</h6>
             </div>
             <div class="seeMore">
             <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">MPG:<small> 34 city / 30 highway</small><br>
                Towing capacity: <small>1,750 lbs</small><br>
                Horsepower: <small>194 hp</small><br>
                Fuel tank capacity: <small>14.8 gal</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $47,800</small></p>
            </div>
            </form>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/collection/BMW-320i-M.png" alt="Lexus-NX.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "12"> 
              <h5 class="card-title text-left">BMW 320i M</h5>
              <h6 class="text-muted">Compact sport utility vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">Dimensions: <small>182″ L x 74″ W x 65″ </small><br>
                MPG:<small> Up to 33 city / 30 highway</small><br>
                Cargo volume: <small>16.8 to 17.7 ft³, 53.7 to 54.6 ft³ with seat area</small><br>
                Horsepower: <small>194 to 235 hp</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $49,800</small></p>
            </div>
            </form>
          </div>               
      </div>
    </div>
    <div class="tab-pane fade" id="Comfort" role="tabpanel" aria-labelledby="Comfort-tab">
        <div class="card-deck">
           <div class="card">
            <img class="card-img-top" src="images/collection/Benz-E-class.png" alt="AudiQ5.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "13"> 
              <h5 class="card-title text-left">Mercedes-Benz E class</h5>
              <h6 class="text-muted">Compact sport utility vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">MPG:<small> 23 city / 27 highway</small><br>
                Dimensions: <small> 184″ L x 75″ W x 65″ H</small><br>
                Cargo volume: <small>26.8 ft³, 60.4 ft³ with seat area</small><br>
                Horsepower: <small> 252 hp</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $77,800</small></p>
            </div>
            </form>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/collection/AudiA5.png" alt="bmw-x3.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "14"> 
              <h5 class="card-title text-left">Audi A5 Coupé</h5>
              <h6 class="text-muted">Compact sport utility vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left"><p class="card-text">Dimensions: <small>186″ L x 74-75″ W x 66″ H </small><br>
                MPG:<small> Up to 23 city / 30 highway</small><br>
                Cargo volume: <small>28.7 ft³, 62.7 ft³ with seat area</small><br>
                Horsepower: <small>248 to 355 hp</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $77,800</small></p>
            </div>
            </form>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/collection/LEXUS-IS.png" alt="Porsche-Macan.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "15"> 
              <h5 class="card-title text-left">LEXUS IS</h5>
              <h6 class="text-muted">Compact sport utility vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">MPG:<small> Up to 20 city / 25 highway</small><br>
                Dimensions: <small>184-185″ L x 76″ W x 63-64″ H</small><br>
                Horsepower: <small>252 to 440 hp</small><br>
                Engine: <small> 2.0 L 4-cylinder, 3.0 L V6, 3.6 L V6</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $51,800</small></p>
            </div>
            </form>
          </div>               
      </div>
    </div>
    <div class="tab-pane fade" id="Luxury" role="tabpanel" aria-labelledby="Luxury-tab">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="images/collection/Benz-S-class.png" alt="LandRover-Range-Rover.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "16"> 
              <h5 class="card-title text-left">Mercedes-Benz S class</h5>
              <h6 class="text-muted">Compact sport utility vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">MPG:<small> Up to 22 city / 28 highway</small><br>
                Dimensions: <small>197-205″ L x 78″ W x 72-74″ H</small><br>
                Curb weight: <small>4,958 to 5,745 lbs</small><br>
                Warranty: <small> 4 yr/50,000 mi basic, 4 yr/50,000 mi powertrain</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $121,800</small></p>
            </div>
            </form>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/collection/LEXUS-LS.png" alt="Maserati-Levante.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "17"> 
              <h5 class="card-title text-left">LEXUS LS</h5>
              <h6 class="text-muted">Luxury vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">Horsepower:<small> 345 to 590 hp</small><br>
                Dimensions: <small>197″ L x 78″ W x 66″ H</small><br>
                Gross vehicle weight rating: <small> 6,116 lbs</small><br>
                Engine: <small> 3.0 L V6, 3.8 L V8</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $141,500</small></p>
            </div>
            </form>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/collection/Bentley-W12-S.png" alt="Model-X.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "18"> 
              <h5 class="card-title text-left">Bentley W12 S</h5>
              <h6 class="text-muted">Vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">Range: <small>237 to 289 mi battery-only</small><br>
                Curb weight:<small> 5,185 to 5,531 lbs</small><br>
                Horsepower:<small> 518 hp</small><br>
                Towing capacity:<small> 4,980 lbs</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $641,500</small></p>
            </div>
            </form>
          </div>               
      </div>
    </div>
    </div>
    </section> 
   <footer> 
   <ul class="share-group col-12 col-sm-12 col-md-12">
      <li><a href="https://www.facebook.com/" class="fab fa-facebook fa-2x"></a></li>
      <li><a href="https://www.twitter.com/" class="fab fa-twitter fa-2x"></a></li>
      <li><a href="https://www.instagram.com/" class="fab fa-instagram fa-2x"></a></li>
      <li><a href="https://www.wechat.com/" class="fab fa-weixin fa-2x"></a></li>
    </ul>
     <div class="copy">
     Copyright &copy; 2018<br>
     <a href="mailto:@husky.neu.edu">@husky.neu.edu</a>
   </div>
  </footer> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<script>
    function foo(){
        var frm = window.event.srcElement;
        frm.hid.value = $(frm.hid).attr("index");
        return true;
    }
</script>
