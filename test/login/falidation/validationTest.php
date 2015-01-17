<?php
    require "../../../lib/validation/validation.php";
//    require "../../../lib/validation/validationEmail.php";
//    require "../../../lib/validation/validationPassword.php";

    class validationTest extends PHPUnit_Framework_TestCase {
        function test_username_validation() {
            // validation rule :
            // 1. not null
            // 2. only letter or number
            // 3. have to be started by letter
            // 4. minimal length = 6 and max length = 20
        
            $username = "terserah123";                
            $expectation = true;            
            $validation = new Validation();            
            $realCase = $validation->validate_username($username);            
            $this->assertEquals($expectation,$realCase);      
            
        }
        
       function test_Email_validation() {
            
           $email = "rifkiahmad111@gmail.com";           
           $expectation = true;           
           $validationEmail = new ValidationEmail();           
           $realCase = $validationEmail->validate_Email($email);           
           $this->assertEquals($expectation,$realCase);
       }
        
         function test_Password_validation() {
            
           $password = "gS3sf2";             
           $expectation = true;             
           $validationPassword = new ValidationPasword();             
           $realCase = $validationPassword->validate_Password($password);             
           $this->assertEquals($expectation,$realCase);
       }
        
    }

?>