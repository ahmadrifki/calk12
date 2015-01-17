<?php

//Validation Username
    class Validation {
        function validate_username($string) {
            
            if ($string =="" or $string == NULL) {
                return false;
            }
            
            if (strlen($string)<6 or strlen($string)>20) {
                return false;
            }
            
            if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $string) ){
                return false;
            }
            
            return true;
        }
    }


//Validation Email

     class ValidationEmail {
        function validate_Email($string) {
            
            if ($string =="" or $string == NULL) {
                return false;
            }            
            
            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';            
            if ( !preg_match($regex, $string)){
                return false;
            }
            return true;
        }
    }

    
// Validation Password

      class ValidationPasword {
        function validate_Password($string) {
            
            if ($string =="" or $string == NULL) {
                return false;
            }
      
            if (strlen($string)<6 or strlen($string)>50) {
                return false;
            }
            
            $regex = '#.*^(?=.{6,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#';            
            if (!preg_match($regex, $string)){
                return false;
            }
            return true;
        }
    }

?>