<?php

//Validation Username
    class Validation {
        function validate_username($string) {
            
            if ($string =="" or $string == NULL) {
                return false;}  

            if (strlen($string)<3 or strlen($string)>20) {
                return false;} 

            if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $string) ){
                return false;}
            
            return true;
        }

//Validation Email
        function validate_Email($string) {
            
            if ($string =="" or $string == NULL) {
                return false;}            
            
        //     $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';            
        //     if ( !preg_match($regex, $string)){
        //         return false;}

        //     return true;
        // }


        if ( filter_var($string==FILTER_VALIDATE_EMAIL)){
                return false;}

            return true;}
  
// Validation Password
        function validate_Password($string) {
            
            if ($string =="" or $string == NULL) {
                return false;}
      
            if (strlen($string)<5 or strlen($string)>50) {
                return false;}
            
            $regex = '#.*^(?=.{5,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#';            
            if (!preg_match($regex, $string)){
                return false;}
                
            return true;}

//Validation Not null
        function validate_is_not_null($string){

          if(trim($string)=="" or $string === NULL){
            return false;
          }
          return true;
        }
}

?>