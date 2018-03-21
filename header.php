<!DOCTYPE html>
<html>
<head>
  <?php wp_head();?>
  <script type="text/javascript" src="<?php echo get_theme_file_uri('/js/main-script.js');?>"></script>
</head>
<body>
  <header style="height:350px;">
    
   <div class="top hide-small black opacity center">
    <div class="bar xlarge hover-opacity-off" id="myNavbar">
      <a href="#" class="bar-item button">HOME</a>
      <a href="#about" class="bar-item button smoothScroll">ABOUT</a>
      <a href="#signDish" class="bar-item button smoothScroll">SIGNATURE DISHES</a>
      <a href="#contact" class="bar-item button smoothScroll">CONTACT</a>
    </div>
  </div>
  

<!-- Header with image -->
<div class="bgimg display-container yellow grayscale-min" style="position: absolute;height: 57%;" id="home">

  <div class="display-topleft logo">
    <a href="#" class="a-anchor"><img src="<?php echo get_theme_file_uri('/images/logo.png');?>" style="width: 50%;" alt="logo"></a>
  </div>

 </div>

 <div class="bottom black opacity center">
    <div class="bar large">
      	<span>Become a member and get a free drink of your choice when you visit us</span>
    	<span>Offer Valid only for the first time</span>
    	<a href="#">Join us now</a>
    </div>
  </div>

</header>