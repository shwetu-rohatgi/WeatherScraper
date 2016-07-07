<!doctype html>

<head>
	<title>Weather</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<style>
html,body{
	width: 100%;
	height: 100%;
}
.form-group{
	padding-top: 120px;
	width: 50%;
}
.back{
	/*background-image: url("http://24.media.tumblr.com/tumblr_ma5owtAtJP1rwlsczo2_500.gif");*/
	background-image: url("img/11.jpg");
	background-size: cover;
	background-position: center;
	width: 100%;
	height: 100%;
}
button{
	margin-top: 20px; 
}
.alert{
	display: none;
	width: 70%;
	margin-top: 50px;
	font-size: 20px;
	font-family: Tangerine;
}
</style>

</head>

<body>
	<div class="container back">
		<center><h1 style="color: cyan; font-family: Lobster; font-size: 50px; padding-top: 40px">Weather Scraper</h1></center>
		<center><h3 style="color: white; font-family: monospace;">A website to get the current weather of any city around the globe.</h3></center>
	<div class="col-md-12">
	<center>
	<form>
		<div class="form-group">
		<input type="text" class="form-control" id="city" name="city" placeholder="San Francisco, New York, London, New Delhi, Hong Kong....">
		</div>
		<center><button class="btn btn-success btn-lg" id="weather">Find Weather !</button><center>
	</form>
	<div class="alert alert-success" id="success">Success!</div>
	<div class="alert alert-danger" id="fail">Fail!</div>

	</center>
	</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script>
		$("#weather").click(function( event ){
			event.preventDefault();
			if($("#city").val()!="") {
			$.get("scrapper.php?city="+ $("#city").val(),function( info ){
                    $(".alert").html(info).fadeIn("slow");

                    if(info==""){
                    	$("#fail").fadeIn("slow");
                    	$("#success").hide();
                    }
                    else{
                    	$("#fail").hide();
                    	$("#success").html(info).fadeIn("slow");
                    }
			});
			}
			else{
				alert("Please Enter a city name !");
			}
		});

	</script>
</body>

</html>