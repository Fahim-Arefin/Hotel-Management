<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS/bootstrap.min2.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../CSS/style2.css">

    <title>Contact Form #6</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4">What Service Do you need!</h3>
              <p>please write your room number and a brief details of service you need for understanding purpuse. And wait a while to respond on the other side.</p>

              <p><img src="image/undraw-contact.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              
              <form class="mb-5" action="proccessService.php" method="POST">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <!-- <input type="text" class="form-control" name="name" id="name" placeholder="Your name"> -->
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <!-- <input type="text" class="form-control" name="email" id="email" placeholder="Email"> -->
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="type" id="subject" placeholder="enter your room number" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="service" id="message" cols="30" rows="7" placeholder="Write your service in details" required></textarea>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-12">
                    <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>