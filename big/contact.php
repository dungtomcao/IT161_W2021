<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Tom's Web Developer Examples and Resources</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/nav.css">
   <link rel="stylesheet" href="css/form.css">
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
   </div>
     </nav>
     </header>
     
   <div class="wrapper">
        <!-- START LEFT COLUMN -->
      <section class="fullwidth">
        <h2 class="subheader">Contact Tom</h2>
        <?php

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "tomcao090@gmail.com";  //place your/your client's email address here
        $toName = "Tom Cao"; //place your client's name here
        $website = "http://web-students.net/site8/";  //place NAME of your client's website

       //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
        
      </section>
        <!-- END LEFT COLUMN -->

</div>

     <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Tom Cao</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
     
     
     
 </body>
</html>