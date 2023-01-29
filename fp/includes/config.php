<?php 

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$nav['index.php'] = 'Home';
$nav['careers.php'] = 'Careers';
$nav['cart.php'] = 'Cart';
$nav['contact.php'] = 'Contact';
$nav['products.php'] = 'Products';

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'One Starfish Greeting Cards'; 
        break;

        case 'careers.php':
            $title = 'Careers at One Starfish Greeting Cards'; 
            break;

            case 'cart.php':
                $title = 'Shopping Cart of One Starfish Greeting Cards'; 
                break;

                case 'contact.php':
                    $title = 'Contact One Starfish Greeting Cards'; 
                    break;

                    case 'products.php':
                        $title = 'Products of One Starfish Greeting Cards'; 
                        break;
}
