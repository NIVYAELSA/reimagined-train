<!DOCTYPE html>
<html lang="en">
  <head>
    <script type"javascript">
function myFunction() {
    alert("I am an alert box!");
}
</script>
  <script>
    var autocomplete;
    function initMap() {
        infoWindow = new google.maps.InfoWindow({
          content: document.getElementById('info-content')
        });
        autocomplete = new google.maps.places.Autocomplete((document.getElementById('autocomplete')));
        places = new google.maps.places.PlacesService(map);
        autocomplete.addListener('place_changed', onPlaceChanged);
      }

      function onPlaceChanged() {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
          document.getElementById('autocomplete').placeholder = 'Enter a city';
        }
      }

	  function validateForm()
{
var a=document.forms["reg"]["mname"].value;
var b=document.forms["reg"]["rno"].value;
var c=document.forms["reg"]["nos"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c==""))
  {
  alert("All Field must be filled out");
  return false;
  }
	if (a==null || a=="")
  {
  alert("Model name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Registration number must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Number of seats must be filled out");
  return false;
  }
}

    </script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vehicle Deatils</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet"  />
<script type='text/javascript'>
function preview_image(event)
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
<style>
#wrapper
{
 text-align:left;
 margin:0 auto;
 padding:0px;
 width:995px;
}
#output_image
{
 max-width:300px;
}
</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >#sharemyride</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
    <!--  <ul class="nav navbar-nav">
        <li class="active"><a href="#" data-vivaldi-spatnav-clickable="1">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#" data-vivaldi-spatnav-clickable="1">Link</a></li>

      </ul>

-->  <ul class="nav navbar-nav navbar-right">
    <li><a href="main.php" data-vivaldi-spatnav-clickable="1">Find Ride</a></li>
  </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" data-vivaldi-spatnav-clickable="1">You</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="jumbotron">
<div id="headp">


      <h1>Offer a Ride</h1>
      <p>Share empty seats of your ride!</p>

  </div>
  </div>
<div class="container">


    <h1>Enter the Vehicle Details</h1>
    <br/>

    <form name="reg" class="form-horizontal" onsubmit="return validateForm()" form method="post" action="insert_vehicle.php" enctype="multipart/form-data">
  <fieldset>


    <div class="form-group">
      <div class="col-lg-10" id="autocomplete" >
        <input type="text" name="mname" class="form-control" id="mname" placeholder="Model Name" >
      </div>

    </div>

    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" name="rno"  pattern="[A-Z]{2}\s[0-9|\s]{1,2}\s[A-Z|\s]{1,2}\s[0-9]{1,4}" class="form-control" id="rno" placeholder="Registraion Number eg(KL xx x xxxx)" >
      </div>
     </div>

     <div class="form-group">
       <div class="col-lg-10">
         <input type="number" name="nos" class="form-control" id="nos" placeholder="Number of seats" >
       </div>
      </div>

  <!--   <div class="form-group">
       <label for="date" class="col-lg-2 control-label">Date</label>
       <div class="col-lg-10">
         <input type="text" class="form-control" id="date" placeholder="date">
       </div>
      </div>
      <div class="form-group">
        <label for="time" class="col-lg-2 control-label">Time</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="time" placeholder="time">
        </div>
       </div>

       <div class="form-group">
         <label for="fare" class="col-lg-2 control-label">Fare</label>
         <div class="col-lg-10">
           <input type="text" class="form-control" id="fare" placeholder="fare">
         </div>
       </div> -->
    <div class="form-group">
      <div class="col-lg-10">
        <textarea name="vdesc" class="form-control" rows="3" id="rdesc" placeholder="Short Description about the vehicle.."  ></textarea>
      </div>
    </div>


<!--    <div class="form-group">
      <label class="col-lg-2 control-label">Radios</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
-->
<div class="form-group">
  <div class="col-lg-10">
    <!--<input type="file" name="myimage" class="form-control" id="nos" >-->
    <input type="file" accept="image/*" onchange="preview_image(event)" name="myimage" class="form-control" id="myimage" >
    <div id="wrapper">
      <br>
    <img id="output_image"/>
    </div>
  </div>
 </div>

    <div class="form-group" >
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default" >Cancel</button>
        <button type="submit" onclick="validateForm()" class="btn btn-success" value="Upload Image" >Save</button>
        <script>
        function myFunction() {
            alert("I am an alert box!");
        }
        </script>
      </div>
    </div>
  </fieldset>
</form>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
