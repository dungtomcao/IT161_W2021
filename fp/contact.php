<?php 
include('includes/config.php');
include('includes/header.php'); ?>

<div class='wrapper'>
    <main>
    <h1>Contact One Starfish Team</h1>
        <?php

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "tomcao090@gmail.com";  //place your/your client's email address here
        $toName = "Tom Cao"; //place your client's name here
        $website = "http://web-students.net/site8/it161_W21/fp/";  //place NAME of your client's website

       echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    </main>
    <aside>

    </aside>
</div>

<?php 
include('includes/footer.php'); ?>