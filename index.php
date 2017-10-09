<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	
		html, body {
			height:100%;
		}
		
		.container {
			background-image:url("weather.jpg");
			width:100%;
			height:100%;
			background-size:cover;
			background-position: center;
			padding-top: 150px;
		}
		
		.white {	
			color: white;
		}
		
		.center{
			text-align:center;
		}
		
		.alert{
			margin-top:20px;
			display:none;
		}
	</style>
   </head>
   <body>
   
   <div class ="container">
	<div class ="row">
	
		<div class =  "col-md-6 col-md-offset-3 white center"  >
			<h1> Weather Predictor </h1>
			<p class ="lead"> Enter your City to get a forecast </p>
			<form>
				<div class ="form-group">
				
					<input id="city" type = "text" class="form-control" name="city" placeholder="Eg: London, Dublin, Limerick" />
				
				</div>
				
				<button id = "Update"class="btn btn-success btn-lg"> Find My Weather </button>
			
			</form>
			
			<div id="Success" class="alert alert-success"> Success! </div>
			<div id="fail" class="alert alert-danger"> Please enter the city name </div>
			<div id="none" class="alert alert-danger"> Please enter the city name </div>
		
		</div>
			
	</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script>
	
	$("#Update").click(function(event){
		event.preventDefault();
		
			$(".alert").hide();
			
		if ($("#city").val()!=""){
		
		$.get("scrapper.php?city="+$("#city").val(), function( data ){
			
			
			if (data==""){
				
				$("#fail").fadeIn();
				
			} else {
				
				$("#Success").html(data).fadeIn();
			}
		});
		
		} else{
				
				$("#none").fadeIn();
		}
	});
	
	</script>

 </body>
  
</html>
