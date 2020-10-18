<!DOCTYPE html>
<html> 
<head>
	<title></title>
	<style type="text/css"></style>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.css"></script>
	<script type="text/javascript" src="jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="jquery/jquery-1.11.3.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style5.css">
	<script src='js/font.js'></script>
</head>
<style type="text/css">
	 
</style>
<body>
	<div class="text-row mx-auto">
		<h1 align="center">DelphianLogin in Action</h1>
		<p class="text-center">The classes below is used to style the elements further The classes below is used to </p>

	</div>
	<div class="container">

		<div class="row">

			<div class="col-md-3 first-col">
				<div class="firstbox">
				<div class="col-md-12 first-col-img" id="btn1">
					<div id="s1"><img src="img/DL-learning.svg" height="50px" width="50px" id="img1" > Learning<img src="img/minus-01.svg" class="math"></div>
				</div>

				<div class="col-md-12 first-col-img" id="btn2">
					<div id="s2"><img src="img/DL-technology.svg" height="50px" width="50px" > Technology<img src="img/plus-01.svg" class="math"></div>
				</div>

				<div class="col-md-12 first-col-img" id="btn3">
					<div id="s3"><img src="img/DL-communication.svg" height="50px" width="50px"> Communication<img src="img/minus-01.svg" class="math"></div>
				</div>
				</div>
			</div>

			<div class="col-md-4 second-col" id="w1">
				<div class="triangle-right1"></div>
				<div class="second-top-para1">
					<p class="text-center">DIGITAL LEARNING INFRASTRUCTRE</p><br>
				</div>
				<div class="second-col-para1">
					<p>Usability enhancement and Training 111 Transaction Portal For Customers</p><br>
				</div>
				<p class="text-center learnmore1">Learn More <i class="fa fa-arrow-right" style='font-size:10px'></i></p>
				<div id="slider" class="carousel-slide" data-ride="carousel">
				    <ol class="carousel-indicators">
				        <li data-target="#slider" data-slide-to="0" class="active"></li>
				        <li data-target="#slider" data-slide-to="1" ></li>
				        <li data-target="#slider" data-slide-to="2"></li>
				    </ol>
				</div>
			</div>
			<div class="col-md-4 second-col" id="w2">
				<div class="triangle-right2"></div>
				<div class="second-top-para2">
					<p class="text-center">DIGITAL LEARNING INFRASTRUCTRE</p><br>
				</div>
				<div class="second-col-para2">
					<p>Usability enhancement and Training 222 Transaction Portal For Customers</p><br>
				</div>
				<p class="text-center learnmore2">Learn More <i class="fa fa-arrow-right" style='font-size:10px'></i></p>
				<div id="slider" class="carousel-slide" data-ride="carousel">
				    <ol class="carousel-indicators">
				        <li data-target="#slider" data-slide-to="0" ></li>
				        <li data-target="#slider" data-slide-to="1" class="active" ></li>
				        <li data-target="#slider" data-slide-to="2"></li>
				    </ol>
				</div>
			</div>
			<div class="col-md-4 second-col" id="w3">
				<div class="triangle-right3"></div>
				<div class="second-top-para3">
					<p class="text-center">DIGITAL LEARNING INFRASTRUCTRE</p><br>
				</div>
				<div class="second-col-para3">
					<p>Usability enhancement and Training 333 Transaction Portal For Customers</p><br>
				</div>
				<p class="text-center learnmore3">Learn More <i class="fa fa-arrow-right" style='font-size:10px'></i></p>
				<div id="slider" class="carousel-slide" data-ride="carousel">
				    <ol class="carousel-indicators">
				        <li data-target="#slider" data-slide-to="0" ></li>
				        <li data-target="#slider" data-slide-to="1" class="active" ></li>
				        <li data-target="#slider" data-slide-to="2"></li>
				    </ol>
				</div>
			</div>

			<div class="col-md-5 third-col">
				<div id="w11">
					<img src="img/DL-learning.jpg" class="img" height="370px" width="400px">
				</div>
				<div id="w22">
					<img src="img/DL-technology.jpg" class="img" height="370px" width="400px">
				</div>
				<div id="w33">
					<img src="img/DL-communication.jpg" class="img" height="370px" width="400px">
				</div> 
			</div>
		</div>
	</div>

	<script type="text/javascript" src="jquery/jquery-1.11.3.js"></script>

<script id="text/javascript">
	
	$(document).ready(function(){
		$("#w1").show();
			$("#w2").hide();
			$("#w3").hide();
			$("#w11").show();
			$("#w22").hide();
			$("#w33").hide();
			// $("#dot1").css('background-color','#A0D1DE');
			// $("#dot2").css('background-color','');
			// $("#dot3").css('background-color','');
			
	$("#btn1").click(function(){
	
	$("#w1").show(100);
	$("#w2").hide(100);
	$("#w3").hide(100);
	$("#w11").show(100);
	$("#w22").hide(100);
	 $("#w33").hide(100);
	// $("#dot1").css('background-color','#A0D1DE');
	// $("#dot2").css('background-color','');
	// $("#dot3").css('background-color','');
	// $("#s1").hide(100);

	});
	
	$("#btn2").click(function(){
	$("#w2").show(100);
	$("#w1").hide(100);
	$("#w3").hide(100);
	$("#w22").show(100);
	$("#w11").hide(100);
	$("#w33").hide(100);
	
	});

	$("#btn3").click(function(){
	$("#w3").show(100);
	$("#w1").hide(100);
	$("#w2").hide(100);
	$("#w33").show(100);
	$("#w11").hide(100);
	$("#w22").hide(100);
	
	});
	});
</script>
<script>
$(document).ready(function () {
	  $('#btn1').addClass('active'); 
		$("#btn1").click(function () {
        $('#btn1').removeClass('active');
        $('#btn2').removeClass('active');
        $('#btn3').removeClass('active');
        $(this).addClass('active'); 
    });
});
$(document).ready(function () {
		$("#btn2").click(function () {
        $('#btn1').removeClass('active');
        $('#btn2').removeClass('active');
        $('#btn3').removeClass('active');
        $(this).addClass('active');
    });
});
$(document).ready(function () {
		$("#btn3").click(function () {
        $('#btn1').removeClass('active');
        $('#btn2').removeClass('active');
        $('#btn3').removeClass('active');
       
        $(this).addClass('active');
    });
});
</script>

</head>
<style type="text/css">
	.btn
	{
		size: 100px;
		margin: 12px;

	}
	.dot
{
	 background-color: #A0D1DE;
}
	#btn1.active{
		background-color: white;
box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 100px 0 rgba(0, 0, 0, 0.19);
}

#btn2.active{
background-color: white;
box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 100px 0 rgba(0, 0, 0, 0.19);
}
#btn3.active{
background-color: white;
box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 100px 0 rgba(0, 0, 0, 0.19);
}
</style>

</body>
</html>