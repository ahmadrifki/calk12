<?php
    require "../../../lib/validation/validation.php";

    

    class validationTest extends PHPUnit_Framework_TestCase {

     public $validation;
      function __construct(){
        $this->validation = new Validation();
      }

     public $string= array(
                'username' =>"rifkiahmad",
                'email' =>"rifkiahmad@gmail.com",
                'password' =>"hasdgfA1" );

     public $expectation = true;

     // validation rule :
            // 1. not null
            // 2. only letter or number
            // 3. have to be started by letter
            // 4. minimal length = 6 and max length = 20


      function test_username_validation() {
            $realCase = $this->validation->validate_username($this->string["username"]);            
            $this->assertEquals($this->expectation,$realCase);      
        }
        
       function test_Email_validation() {                   
           $realCase = $this->validation->validate_Email($this->string["email"]);           
           $this->assertEquals($this->expectation,$realCase);
       }
        
         function test_Password_validation() {           
           $realCase = $this->validation->validate_Password($this->string["password"]);             
           $this->assertEquals($this->expectation,$realCase);
       }
  
    }

?>