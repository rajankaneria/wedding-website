<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Yesha-Rishabh</title>
    <!-- CSS-->
      
    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>



    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    

    
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://use.fontawesome.com/4c9f41dc36.js"></script>

</head>
<body>
   
   <nav>
    <div class="nav-wrapper wedding-nav">
       

      <a href="" >
        <img class="logo" src="<?php echo  base_url(); ?>html/images/logo.png">
      </a>
        <!--<ul id="nav-mobile" class="left hide-on-med-and-down brand">
        <li class="brand-logo"><a class="brand-logo-a" href="sass.html">R</a></li>
        <li class="heart-logo"><a class="brand-logo-i" href="sass.html"><i class="fa fa-heart brand-logo-i" aria-hidden="true"></i></a></li>
        <li class="brand-logo"><a  class="brand-logo-a" href="collapsible.html">Y</a></li>
      </ul>-->
     

      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="nav-menu" href="#home">home</a></li>
        <li><a href="#couple" class="nav-menu">couple</a></li>
        <li><a href="#program" class="nav-menu">programs</a></li>
         <li><a href="#key_person" class="nav-menu">key persons</a></li>
          <li><a href="#" class="nav-menu">gallery</a></li>
      </ul>
  </div>
    </div>
  </nav>