<?php

    class ValidationPasword {
        function validate_Password($string) {
            
            if ($string =="" or $string == NULL) {
                return false;
            }
      
            if (strlen($string)<6 or strlen($string)>50) {
                return false;
            }
            
    $regex = '#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#';
            
            if (!preg_match($regex, $string)){
                return false;
            }
            return true;
        }
    }
?>