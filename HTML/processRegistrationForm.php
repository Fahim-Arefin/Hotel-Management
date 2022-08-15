<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
       <!-- recieved data by post method from same php file-->
       <?php

            $confirmpasserr=$phonenumerr=$usernameErr = $emailErr = $passwordErr =$fullNameErr = "";
            $confirmpass=$phonenum=$username = $email = $password = $fullName = "";

            $successfulInsert=false;
            $usernameflag = false;
            $emailflag = false;
            $passwordflag = false;
            $confirmpasswordflag = false;
            $fullNameflag = false;
            $phonenumflag=false;


            //checking empty,invalid inputs

            if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $username = input_filter($_POST['username']);  
                    //pattern check 
                    //use flag
                    if (!preg_match("/^[a-zA-Z0-9\_]*$/",$username)) {
                        $usernameErr = "Only letters and digits and underscore allowed";
                        
                    }else{
                        $usernameflag = true;
                    } 
                
               
                    $email = input_filter($_POST['email']);
                    //pattern check 
                    //useflag
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                    }else{
                        $emailflag = true;   
                    }
               
                
                    $password = input_filter($_POST['password']);
                    //pattern check 
                    //useflag
                
               
                    $fullName = input_filter($_POST['fullname']);
                    //pattern check 
                    //useflag
                   
                    $phonenum = input_filter($_POST['number']);
                    //pattern check 
                    //useflag

                    $confirmpass = input_filter($_POST['comfirmPassword']);
                    //pattern check 
                    //useflag
                

            }

                //after passing empty and valid input check

                

            //input filtering function
            function input_filter($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

        ?>
   </body>
</html>