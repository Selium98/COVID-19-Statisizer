<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include  'link/links.php'; ?>
	<?php include 'css/style.php' ; ?>
</head>
<body onload="fetch()">

	<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID 19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="indiacorona.php">India Statistics</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact Us</a>
      </li>

     
      
     
    </ul>
    
  </div>
</nav>

<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="imgs/people.jpg" width="400" height="400">
			</div>
				
			
			
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_ani"><img src="imgs/circle.png" height="60" width="60"></span>na Virus</h1>
				
			</div>

		</div>
		
	</div>
	
</div>

<!-- ************************ corona update section ******************* -->

<section class="corona_update container-fluid">
	<div class="mb-3">
		<h1 class="text-center">COVID-19 UPDATES OF ALL THE COUNTRIES</h1><br>
	</div>

	<div align="center">
		<div class="search_btn">
		<input type="text" name="Search" id="search" placeholder="Search Country..." class="form-control" /> <br>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center" id="tbval">
			<thead>
			<tr>
				<th>Country</th>
				<th>Total Confirmed</th>
				<th>Total Recovered</th>
				<th>Total Deaths</th>
				<th>New Confirmed</th>
				<th>New Recovered</th>
				<th>New Deaths</th>
			</tr>
		</thead>
		</table>
		
	</div>

</section>

<!-- ************************ about corona ******************* -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>
			About COVID-19
		</h1>
	</div>

	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5">
			<img src="imgs/about.jpg" height="600" class="img-fluid">
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h2>What Is COVID-19 (Coronavirus)</h2><br>
			<p>Coronavirus disease 2019 (COVID-19) is an infectious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The disease was first identified in December 2019 in Wuhan, the capital of China's Hubei province, and has since spread globally, resulting in the ongoing 2019–20 coronavirus pandemic.</p>
			<p>The virus is primarily spread between people during close contact,[a] often via small droplets produced by coughing,[b] sneezing, or talking. The droplets usually fall to the ground or onto surfaces rather than remaining in the air over long distances. People may also become infected by touching a contaminated surface and then touching their face.</p>
			<p>Currently, there is no vaccine or specific antiviral treatment for COVID-19.  Management involves the treatment of symptoms, supportive care, isolation, and experimental measures. </p>
			
		</div>
		
	</div>
	
</div>

<!-- ************************ corona symptoms ******************* -->

<div class="container-fluid  pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>
			Corona Symptoms
		</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center"><img src="imgs/cough.jpg" class="img-fluid" width="200" height="100"><figcaption>COUGH</figcaption></figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center"><img src="imgs/fever.jpg" class="img-fluid" width="200" height="100"><figcaption>FEVER</figcaption></figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center"><img src="imgs/diff.jpg" class="img-fluid" width="200" height="100"><figcaption>DIFFICULTY IN BREATHING</figcaption></figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center"><img src="imgs/headache.jpg" class="img-fluid" width="200" height="100"><figcaption>HEADACHE</figcaption></figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center"><img src="imgs/sorethr.jpg" class="img-fluid" width="200" height="100"><figcaption>SORE THROAT</figcaption></figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center"><img src="imgs/cstpain.jpg" class="img-fluid" width="200" height="100"><figcaption>CHEST PAIN</figcaption></figure>
			</div>

		</div>
	</div>

<!-- ************************ corona prevention ******************* -->

	<div class="container-fluid  sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>
			Prevention Against Coronavirus
		</h1>
	</div>

	<div class="container">
		<div class="row">

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center"><img src="imgs/wash.jpg" class="img-fluid" width="200" height="200"><figcaption></figcaption></figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							<b>Wash your hands regularly</b> for 20 seconds, with soap and water or alcohol-based sanitiser.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center"><img src="imgs/mask.jpg" class="img-fluid" width="200" height="200"><figcaption></figcaption></figure>
						
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							<b>Cover Your Nose & Mouth</b> with a disposible tissue or flexed elbow when you cough or sneeze.
						</p>
					</div>

					
					
				</div>
				
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center"><img src="imgs/social.jpg" class="img-fluid" width="200" height="200"><figcaption></figcaption></figure>
						
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							<b>Avoid Close Contact</b> with people who are unwell. Maintain at least a distance of 3 feet while speaking.
					</div>

					
					
				</div>
				
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center"><img src="imgs/home.jpg" class="img-fluid" width="200" height="200"><figcaption></figcaption></figure>
						
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							<b>Stay At Home</b> and self-isolate yourself from people in the household others in the society as much as possible.
						</p>
					</div>

					
					
				</div>
				
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center"><img src="imgs/news.jpg" class="img-fluid" width="200" height="200"><figcaption></figcaption></figure>
						
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							<b>Stay Informed & Alert</b> by watching the news and follow the recommended practices experts give on TV.
						</p>
					</div>

					
					
				</div>
				
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center"><img src="imgs/symp.jpg" class="img-fluid" width="200" height="200"><figcaption></figcaption></figure>
						
					</div>

					<div class="col-lg-8 col-md-8 col-12 ">
						<p>
							<b>Seek Medical Help</b> immediately if you face any of the symptoms and contact medical care early.
						</p>
					</div>

					
					
				</div>
				
			</div>


			
		</div>
		
	</div>
</div>


<!-- ************************ contact ******************* -->


<div class="container-fluid  pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact Us</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<form action="" method="POST">

				  <div class="form-group">
				    <label >Username</label>
				    <input type="text" class="form-control" name="username" placeholder="Enter Your Name" autocomplete="off" required/>
				  </div>

				  <div class="form-group">
				    <label >Mobile Number</label>
				    <input type="number" class="form-control" maxlength="10" name="phone" placeholder="Enter Your 10-Digit Phone Number" autocomplete="off" required>
				  </div>

				  <div class="form-group">
				    <label >Email Address</label>
				    <input type="email" class="form-control"  name="email" required placeholder="Enter Your E-Mail ID" autocomplete="off" >
				  </div>

				  <div class="form-group">
				    <label >Select Symptom</label><br>
				    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				    	<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
				    	<label class="custom-control-label" for="customcheckbox1">Cold</label>
				    </div>

				    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				    	<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
				    	<label class="custom-control-label" for="customcheckbox2">Fever</label>
				    </div>

				    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				    	<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breathe">
				    	<label class="custom-control-label" for="customcheckbox3">Difficulty In Breathing</label>
				    </div>

				    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				    	<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
				    	<label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
				    </div>
				  </div>

				  <div class="form-group">
				    <label>Enter Message</label>
				    <textarea class="form-control" name="message" rows="3"></textarea>
				  </div>

				  <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>

				</form>

			</div>
			
		</div>
		
	</div>
</div>


<!-- ************************ top cursor ******************* -->
<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
</div>

<!-- ************************ footer ******************* -->

<footer class="mt-5 mb-0">
	<div class="footer_style text-white text-center container-fluid">
		<p>Copyright© by Selium98</p>
	</div>
</footer>



<!-- ************************ for top button ******************* -->
<script type="text/javascript">

	$('.count').counterUp({
		delay:10,
		time:3000,
	})
	mybutton = document.getElementById("myBtn");
	window.onscroll = function() {scrollFunction()};
	function scrollFunction () {
		if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
			mybutton.style.display = "block";
		}
		else {
			mybutton.style.display = "none";
		}
	}

	function topFunction() {
		document.body.scrollTop = 0; // for safari
		document.documentElement.scrollTop = 0; // for chrome and opera
	}

	//for table

	function fetch() {
		$.get("https://api.covid19api.com/summary" ,

			function (data) {
				//console.log(data['Countries'].length)
				var tbval = document.getElementById('tbval');
				for(var i=1; i<(data['Countries'].length); i++) {
					var x =  tbval.insertRow();
					x.insertCell(0);
					tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
					tbval.rows[i].cells[0].style.background = '#7a4a91';
					tbval.rows[i].cells[0].style.color = '#fff';

					x.insertCell(1);
					tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
					tbval.rows[i].cells[1].style.background = '#4dd7d8';

					x.insertCell(2);
					tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
					tbval.rows[i].cells[2].style.background = '#26C281';

					x.insertCell(3);
					tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
					tbval.rows[i].cells[3].style.background = '#f36e23';

					x.insertCell(4);
					tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
					tbval.rows[i].cells[4].style.background = '#4bb7d8';

					x.insertCell(5);
					tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
					tbval.rows[i].cells[5].style.background = '#9cc850';

					x.insertCell(6);
					tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
					tbval.rows[i].cells[6].style.background = '#f36e23';




				}
			}

		);

	}

	//for search button 

	$(document).ready(function(){
		$('#search').keyup(function(){
			search_table($(this).val());
		});

		function search_table(value){
			$('#tbval tr').each(function(){
				var found = 'false';
				$(this).each(function(){
					if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
					{
						found = 'true';
					}

				});
				if(found == 'true')
				{
					$(this).show();
				}
				else {
					$(this).hide();
				}
			});
		}
	});


</script>



</body>
</html>

<!--
<?php

include 'C:\wamp64\www\Corona\link\dbcon.php';

if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$symp = $_POST['coronasym'];
	$message = $_POST['message'];

	$chk = "";

	foreach ($symp as $chk1) {
		$chk .=$chk1." ," ;
		
	}

	$insertquery = " insert into coronacase(username, phone, email, symp, message) values('$username' , '$phone', '$email' , '$chk', '$message') ";

	$query = mysqli_query($con, $insertquery);

	if($query) {
		?>
		<script>
			alert("insertion yes")
		</script>
		<?php
	}else{
		?>
		<script>
			alert("insertion no")
		</script>
		<?php
	}
}

?>

-->