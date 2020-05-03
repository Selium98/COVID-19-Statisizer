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
<br>
<br>


<section class="corona_update container-fluid">
  <div class="mt-6">
    <h1 class="text-center">COVID-19 UPDATES OF INDIA</h1>
    <h5 class="text-center">(The Site Is Updated Every 5 Hour)</h5><br><br>
  </div>

  <div align="center">
    <div class="search_btn">
    <input type="text" name="Search" id="search" placeholder="Search State..." class="form-control" /> <br>
    </div>
  </div>

  <h4> INDEX : </h4> 
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" >
      <thead>
      <tr>
        <th>Last Updated Date and Time</th>
        <th>State</th>
        <th>Confirmed</th>
        <th>Active </th>
        <th>Recovered</th>
        <th>Deaths</th>
      </tr>
    </thead>
    </table>
    
  </div>

  <br>

  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
      <thead>
      <tr>
        <th class="text-capitalize">Last Updated Time</th>
        <th class="text-capitalize">State</th>
        <th class="text-capitalize">Confirmed</th>
        <th class="text-capitalize">Active</th>
        <th class="text-capitalize">Recovered</th>
        <th class="text-capitalize">Deaths</th>
      </tr>

      <?php
      $data = file_get_contents('https://api.covid19india.org/data.json');
      $coronalive = json_decode($data, true);

      $statescount = count($coronalive['statewise']);

      $i=1;
      while($i < $statescount){

        ?> 

        <tr>
          
            <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?> </td>
            <td><?php echo $coronalive['statewise'][$i]['state'] ?> </td>
            <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?> </td>
            <td><?php echo $coronalive['statewise'][$i]['active'] ?> </td>
            <td><?php echo $coronalive['statewise'][$i]['recovered'] ?> </td>
            <td><?php echo $coronalive['statewise'][$i]['deaths'] ?> </td>

            </tr>
        <!-- echo $coronalive['statewise'][$i]['lastupdatedtime'] . "<br>";
        echo $coronalive['statewise'][$i]['state'] . "<br>";
        echo $coronalive['statewise'][$i]['confirmed'] . "<br>";
        echo $coronalive['statewise'][$i]['active'] . "<br>";
        echo $coronalive['statewise'][$i]['recovered'] . "<br>";
        echo $coronalive['statewise'][$i]['deaths'] . "<br>"; -->

        <?php

        $i++;

      }
      

      ?>

    </thead>
    </table>
    
  </div>

  

  
  
  
</section>


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

  

  </script>



</body>
</html>