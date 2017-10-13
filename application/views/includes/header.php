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

    <!-- Animation -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/animations.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/css/animations.min.css">

    <!-- Gallery -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/lightgallery/latest/css/lightgallery.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/g/lightgallery@1.3.5,lg-fullscreen@1.0.1,lg-hash@1.0.1,lg-pager@1.0.1,lg-share@1.0.1,lg-thumbnail@1.0.1,lg-video@1.0.1,lg-autoplay@1.0.1,lg-zoom@1.0.3"></script>


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
  <nav class="nav-fixed">
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

    <div class="nav-wrapper container">
      <a href="#"><img class="logo" src="<?php echo  base_url(); ?>html/images/logo.png"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a id="scrollHome" class="nav-menu" href="#home">home</a></li>
        <li><a id="scrollCouple" href="#couple" class="nav-menu">couple</a></li>
        <li><a id="scrollProgram" href="#program" class="nav-menu">Functions</a></li>
        <li><a id="scrollKey_person" href="#key_person" class="nav-menu">key persons</a></li>
        <li><a id="scrollGallery" href="#gallery" class="nav-menu">gallery</a></li>
        <li><a href="#rsvpModal" class="nav-menu modal-trigger">RSVP</a></li>

      </ul>
    



    <!-- Mobile Slide Menu -->
    <ul id="slide-out" class="side-nav">
      <li><center><label><h5>Menu</h5></label></center></li>
      <li><a id="scrollHome" class="nav-menu" href="#home">home</a></li>
        <li><a id="scrollCouple" href="#couple" class="nav-menu">couple</a></li>
        <li><a id="scrollProgram" href="#program" class="nav-menu">Functions</a></li>
        <li><a id="scrollKey_person" href="#key_person" class="nav-menu">key persons</a></li>
        <li><a id="scrollGallery" href="#gallery" class="nav-menu">gallery</a></li>
        <li><a href="#rsvpModal" class="nav-menu modal-trigger">RSVP</a></li>
    </ul>
    
    </div>     
  </nav>