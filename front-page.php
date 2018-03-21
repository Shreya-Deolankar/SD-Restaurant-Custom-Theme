<?php
get_header();

function sd_convert_html(){
  return 'text/html';
}

if(array_key_exists('sd_submit_form', $_POST)){
    $to = "shreya_deolankar@yahoo.co.in";
    $subject = "Wordpress Restaurant Mesaage";
    $body = '';
    $body .= 'Name: '.$_POST["Name"]. '<br />';
    $body .= 'Number of people: '.$_POST["People"]. '<br />';
    $body .= 'Date: '.$_POST["date"]. '<br />';
    $body .= 'Message: '.$_POST["Message"]. '<br />';

    add_filter('wp_mail_content_type','sd_convert_html');

    wp_mail($to,$subject,$body);

    remove_filter('wp_mail_content_type','sd_convert_html');
  }

?>
<div>
  <div class="top-div"><img src="<?php echo get_theme_file_uri('/images/glass.png');?>" class="img-move" style="width: 90%;" onclick="onClick(this)" alt="Signature1"></div>
   <div class="top-div-next text-white large">
    <a href="#contact" class="a-anchor1" style="width: 28%;"><span class="xxlarge" style="font-family: 'Shrikhand', cursive;">RESERVE</span> a table today</a>
    <a href="#" class="a-anchor1"><span class="xxlarge" style="font-family: 'Shrikhand', cursive;">SUBSCRIBE</span> to our newsletter</a>
  </div>
  <div class="top-div-right"><img src="<?php echo get_theme_file_uri('/images/glass.png');?>" class="img-move" style="width: 90%;" onclick="onClick(this)" alt="Signature1"></div>
</div>


<div class="container padding-64 large" style="background-color: #e2df84;">
  <div class="content">
    <span style="margin-left: 45%;"><a href="javascript:void(0)" class="a-anchor" onclick="openHotelMenu(this)"><i style="font-size: 25px;" class="fa fa-angle-down"></i>&nbsp;Open Menu&nbsp;<i style="font-size: 25px;" class="fa fa-angle-down"></i></a></span>
    <div id="hideMenu" style="display: none;">
      
      <h1 class="center jumbo"  id="menu" style="margin-bottom:64px">THE MENU</h1>
      <div class="row center border text-black xlarge" style="background-color: #e2dc15;filter: grayscale(50%);">
        <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
          <div class="col s4 tablink padding-16 hover-red active-red">Main Course</div>
        </a>
        <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
          <div class="col s4 tablink padding-16 hover-red active-red">Salads</div>
        </a>
        <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
          <div class="col s4 tablink padding-16 hover-red active-red">Starter</div>
        </a>
      </div>
      

      <div id="Pizza" class="container menu padding-32 white large">
        <h2><b>Margherita</b><span class="tag green round">Veg</span> <span class="right tag dark-grey round large">$12.50</span></h2>
        <p class="text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
        <hr>
     
        <h2><b>Formaggio</b> <span class="tag green round">Veg</span><span class="right tag dark-grey round large">$15.50</span></h2>
        <p class="text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
        <hr>
        
        <h2><b>Chicken</b> <span class="right tag dark-grey round large">$17.00</span></h2>
        <p class="text-grey">Fresh tomatoes, mozzarella, chicken, onions</p>
        <hr>

        <h2><b>Pineapple'o'clock</b> <span class="right tag dark-grey round large">$16.50</span></h2>
        <p class="text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
        <hr>

        <h2><b>Meat Town</b> <span class="tag red round">Hot!</span><span class="right tag dark-grey round large">$20.00</span></h2>
        <p class="text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p>
        <hr>

        <h2><b>Parma</b> <span class="tag grey round">New</span><span class="right tag dark-grey round large">$21.50</span></h2>
        <p class="text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p>
      </div>

      <div id="Pasta" class="container menu padding-32 white large">
        <h2><b>Lasagna</b> <span class="tag grey round">Popular</span> <span class="right tag dark-grey round large">$13.50</span></h2>
        <p class="text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
        <hr>
     
        <h2><b>Ravioli</b> <span class="tag green round">Veg</span><span class="right tag dark-grey round large">$14.50</span></h2>
        <p class="text-grey">Ravioli filled with cheese</p>
        <hr>
        
        <h2><b>Spaghetti Classica</b> <span class="right tag dark-grey round large">$11.00</span></h2>
        <p class="text-grey">Fresh tomatoes, onions, ground beef</p>
        <hr>

        <h2><b>Seafood pasta</b> <span class="right tag dark-grey round large">$25.50</span></h2>
        <p class="text-grey">Salmon, shrimp, lobster, garlic</p>
      </div>


      <div id="Starter" class="container menu padding-32 white large">
        <h2><b>Today's Soup</b> <span class="tag grey round">Seasonal</span><span class="right tag dark-grey round large">$5.50</span></h2>
        <p class="text-grey">Ask the waiter</p>
        <hr>
     
        <h2><b>Bruschetta</b> <span class="tag green round">Veg</span><span class="right tag dark-grey round large">$8.50</span></h2>
        <p class="text-grey">Bread with pesto, tomatoes, onion, garlic</p>
        <hr>
        
        <h2><b>Garlic bread</b> <span class="tag green round">Veg</span><span class="right tag dark-grey round large">$9.50</span></h2>
        <p class="text-grey">Grilled ciabatta, garlic butter, onions</p>
        <hr>
        
        <h2><b>Tomozzarella</b> <span class="tag green round">Veg</span><span class="right tag dark-grey round large">$10.50</span></h2>
        <p class="text-grey">Tomatoes and mozzarella</p>
      </div><br>
    
    </div>
  
  </div>
</div>

<!--<div style="display: inline-block;width: 25%;">
  <img src="<?php //echo get_theme_file_uri('/images/apple.png');?>" class="img-move" style="width: 25%;" onclick="onClick(this)" alt="Signature1">-->


<!-- About Container -->
<div class="container padding-64 large grayscale-min" id="about" style="background-color: #bad6f9;">
  <div class="content">
    <h1 class="center jumbo" style="margin-bottom:64px">ABOUT</h1>
    <p>The Food Den Restaurant was founded in blabla by Mr. Italiano in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  
    <p>Have a look at our interiors.</p>
      <div id="animate1">
        <img src="<?php echo get_theme_file_uri('/images/restaurant1.jpg');?>" class="one-fourth" onclick="onClick(this)" alt="Signature1">

      
      
        <img src="<?php echo get_theme_file_uri('/images/restaurant2.jpg');?>" class="one-fourth" onclick="onClick(this)" alt="Signature2">
      

      
        <img src="<?php echo get_theme_file_uri('/images/restaurant3.jpg');?>" class="one-fourth" onclick="onClick(this)" alt="Signature3">
      
      
        <img src="<?php echo get_theme_file_uri('/images/restaurant4.jpg');?>" class="one-fourth" onclick="onClick(this)" alt="Signature4">
      </div>
      <div>
        <div class="desc">Description of the image</div>
        <div class="desc">Description of the image</div>
        <div class="desc">Description of the image</div>
        <div class="desc">Description of the image</div>
      </div>
      <div>
        <h2><b>OPENING HOURS</b></h2>
      
        <div class="row">
            <div class="col s6">
              <p>Mon 11 a.m - 12 p.m</p>
              <p>Tue 11 a.m - 12 p.m</p>
              <p>Wednesday 11 a.m - 12 p.m</p>
              <p>Thursday 11 a.m - 12 p.m</p>
            </div>
            <div class="col s6">
              <p>Friday 11 a.m - 12 p.m</p>
              <p>Saturday 11 a.m - 12 p.m</p>
              <p>Sunday Closed</p>
            </div>
        </div>
      </div>
    </div>
    
  </div>
</div>


<div class="container padding-64 large grayscale-min" id="signDish" style="background-color: #bef36b;">
  <div class="content">
    <h1 class="center jumbo" style="margin-bottom:64px">SIGNATURE DISHES</h1>
    
      <div id="animate2">
        <img src="<?php echo get_theme_file_uri('/images/sign1.jpg');?>" class="one-fourth" onclick="onClick(this)" alt="Signature1">

      
      
        <img src="<?php echo get_theme_file_uri('/images/sign2.jpg');?>" class="one-fourth" onclick="onClick(this)" alt="Signature2">
      

      
        <img src="<?php echo get_theme_file_uri('/images/sign3.jpg');?>" class="one-fourth" onclick="onClick(this)" alt="Signature3">
      
      
        <img src="<?php echo get_theme_file_uri('/images/sign4.jpg');?>" class="one-fourth" onclick="onClick(this)" alt="Signature4">
      </div>
    
    <div>
      <div class="desc">Description of the image</div>
      <div class="desc">Description of the image</div>
      <div class="desc">Description of the image</div>
      <div class="desc">Description of the image</div>
    </div>
  
  </div>
</div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="modal black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="button black xxlarge display-topright">×</span>
    <div class="modal-content animate-zoom center transparent padding-64">
      <img id="img01" class="image">
      <p id="caption"></p>
    </div>
  </div>

<div class="container padding-64 large grayscale-min" style="background-color: #f5d8df;">
  <div class="content" id="contact">
    <h1 class="center jumbo" style="margin-bottom:64px">CONTACT</h1>
    <p>Find us at some address at some place or call us at 05050515-122330</p>
    <p><span class="tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p>Reserve a table, ask for today's special or just send us a message:</p>
    <form action="#" method="post">
      <p>
        <div class="animate3"><label class="form-label" for="Name">What is your name?</label></div><input id="Name" class="input padding-16 border" type="text" required name="Name" onfocus="animate3()">
      </p>
      <p>
        <div class="animate3"><label class="form-label" for="People">Number of People?</label></div><input id="People" class="input padding-16 border" type="number" required name="People">
      </p>
      <p>
        <div class="animate3"><label class="form-label" for="date">When(date and time)</label></div><input id="date" class="input padding-16 border" type="datetime-local" required name="date">

      </p>
      <p>
        <div class="animate3"><label class="form-label" for="Message">Any special requirements?</label></div><input id="Message" class="input padding-16 border" type="text" required name="Message">
      </p>
      <p><input type="submit" name="sd_submit_form" value="send" class="button block"></p>
    </form>
  </div>
</div>


<?php
get_footer();

?>