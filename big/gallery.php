<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Tom's Web Developer Examples and Resources</title>
  <meta name="robots" content="noindex,nofollow">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/big.css">
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
   <script src="js/script.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/nav.css">
   <link rel="stylesheet" href="css/lightbox.css">

 </head>
 <body>
     <header>
     <a href="index.html"><h1>Tom's IT161 Website</h1></a>
     <nav id="cssmenu">
      <ul>
        <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> IT161</a></li>
        <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG</a></li>

        <!--drop down pages for research pages-->
        <li><a href="#"> Research</a>
          <ul>
            <li><a href="smo.php"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
            <li><a href="accessibility.php"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
            <li><a href="forms.php"><i class="fa fa-fw fa-paperclip"></i> Forms</a></li>
          </ul>
       </li>
        
       <li><a href="gallery.php"><i class="fa fa-fw fa-camera-retro"></i> Gallery</a></li>
        <!--drop down pages for google tools-->
        <li><a href="#"> Tools</a>
           <ul>
              <li><a href="seo.php"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
              <li><a href="calendar.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
              <li><a href="map.php"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
              <li><a href="webcams.php"><i class="fa fa-video-camera"></i> Webcam</a></li>
           </ul>
        </li>
        <li><a href="contact.php"><i class="fa fa-fw fa-envelope-o"></i> Contact Tom</a></li>
     </ul>
     </nav>
     </header>
     
   <div class="wrapper">
        <!-- START LEFT COLUMN -->
      <main>
        <h2 class="subheader">Lightbox II Gallery</h2>
         <div class="gallery"> 
          <figure> 
            <a href="images/breakfast-800x600.jpg" data-lightbox="meals" data-title="Breakfast"><img src="images/breakfast-175x175.jpg" alt="breakfast"></a>
            <figcaption>Breakfast</figcaption>
          </figure>
          <figure> 
            <a href="images/lunch-800x600.jpg" data-lightbox="meals" data-title="Lunch"><img src="images/lunch-175x175.jpg" alt="lunch"></a>
            <figcaption>Lunch</figcaption>
          </figure>
          <figure> 
            <a href="images/dinner-800x600.jpg" data-lightbox="meals" data-title="Dinner"><img src="images/dinner-175x175.jpg" alt="dinner"></a>
            <figcaption>Dinner</figcaption>
          </figure>
        </div>
      </main>
        <!-- END LEFT COLUMN -->
        
        <!-- START RIGHT COLUMN -->
        <aside>
        <h3>Additional Images Gallery</h3>
          <div class="gallery2">
          <figure> 
            <a href="images/gal1.jpg" data-lightbox="Vietnamese women" data-title="A Vietnamese woman"><img src="images/gal1.jpg" alt="A Vietnamese woman"></a>
            <figcaption>A woman</figcaption>
          </figure>
          <figure> 
            <a href="images/gal2.jpg" data-lightbox="Vietnamese women" data-title="two Vietnamese women chatting"><img src="images/gal2.jpg" alt="two Vietnamese women chatting"></a>
            <figcaption>Two women chatting</figcaption>
          </figure>
          <figure> 
            <a href="images/gal3.jpg" data-lightbox="Vietnamese women" data-title="A Vietnamese woman sitting"><img src="images/gal3.jpg" alt="A Vietnamese woman sitting"></a>
            <figcaption>A woman sitting</figcaption>
          </figure>
          <figure> 
            <a href="images/gal4.jpg" data-lightbox="Vietnamese women" data-title="A Vietnamese woman applying make-up"><img src="images/gal4.jpg" alt="A Vietnamese woman applying make-up"></a>
            <figcaption>A woman doing make-up</figcaption>
          </figure>
          </div>
        </aside>
        <!-- END RIGHT COLUMN -->

</div>

     <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Tom Cao</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
     
     
    <script src="js/lightbox.js"></script>

 </body>
</html>