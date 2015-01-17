<?php

    class ValidationEmail {
        function validate_Email($string) {
            
            if ($string =="" or $string == NULL) {
                return false;
            }
      
//            if (strlen($string)< or strlen($string)>50) {
//                return false;
//            }
            
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
            
            if ( !preg_match($regex, $string)){
                return false;
            }
            return true;
        }
    }
?>


