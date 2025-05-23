
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>The Satrangi</title>
   <link rel="shortcut icon" href="assets/images/jsw-favicon.png" type="image/x-icon">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
   <meta name="description" content="">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="./css/style.css">
</head>

<body>

   <?php
   session_start();
   if(!empty($_SESSION['mail_response'])){
      $decoded = json_decode($_SESSION['mail_response'],true);
      $html_type = "danger";
      if(strtolower($decoded['status'])=="success"){
         $html_type = 'success';
      }
     echo '<div class="alert alert-'.$html_type.' alert-dismissible fade show" role="alert">
      '.$decoded['message'].'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      unset($_SESSION['mail_response']);
   }
   ?>
   <section class="header-top-section" style="background-image: url(./images/harbhajan.jpg);background-repeat: no-repeat;background-size:cover;">
         <div class="banner-top d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
              <figure>
            
              </figure>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
               <div class="company-logo d-flex">
                  <div class="satrangi">
                      <figure>
                        <img src="./images/satrangi.png" alt="" class="w-100">
                     </figure>
                  </div>
                  
                  <div class="mortgage">
                      <figure>
                           <a href="https://mortgagegiantsinc.com/" target="_blank"><img src="./images/mortgage-logo.png" alt="" class="w-100"></a>
                      </figure>
                  </div>
               </div>

               <div class="win-section text-center mt-5 pt-4">
                  <figure>
                           <img src="./images/res-img.png" alt="" class="res-img">
                        <img src="./images/gift.png" alt="w-100" >
                  </figure>
               </div>

                <div class="win-gift d-flex align-items-center">
                  <div class="gift">
                      <figure>
                        <img src="./images/bluetooth.png" alt="" class="w-100">
                     </figure>
                  </div>
                   <div class="gift">
                      <figure>
                        <img src="./images/headphone.png" alt="" class="w-100">
                     </figure>
                  </div>
                  <div class="gift">
                      <figure>
                           <img src="./images/cycle.png" alt="" class="w-100">
                      </figure>
                  </div>
               </div>
            </div>
         </div> 
   </section>

 
   <div class="details-wrapper">
   <section class="steps-section">
      <div class="container">
         <div class="steps">
            <div class="heading-style">
               <h2 class="title">Step Into the <span class="fw-semibold">Winner’s Circle</span></h2>
            </div>
            
            <div class="steps-container">
               <div class="step">
                  <div class="circle outlined">1</div>
                  <div class="description">
                  Fill out the form below<br>
                  with your correct information.
                  </div>
               </div>

               <div class="step">
                  <div class="circle outlined">2</div>
                  <div class="description">
                  Submit before the<br>deadline
                  </div>
               </div>

               <div class="step">
                  <div class="circle outlined">3</div>
                  <div class="description">
                  Wait for the draw - winners<br>
                  will be notified directly!
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="form-section">
     <div class="container">
      <form action="service/send_mordgage.php" method="post">
        <h3>One Step Closer to Winning – <span class="fw-semibold">Fill & Submit!</span></h3>
      <div class="form-row">
      <div class="form-group">
        <input type="text" id="name" name="name" placeholder=" " required>
        <label for="name">Name<span class="required">*</span></label>
      </div>

      <div class="form-group">
        <input type="tel" id="mobile" name="mobile" placeholder=" " required pattern="[0-9]{10}">
        <label for="mobile">Mobile Number<span class="required">*</span></label>
      </div>

      <div class="form-group">
        <input type="email" id="email" name="email" placeholder=" " required>
        <label for="email">Email ID<span class="required">*</span></label>
      </div>

      <div class="form-group">
        <input type="number" id="age" name="age" placeholder=" " required min="1">
        <label for="age">Age<span class="required">*</span></label>
      </div>

       <div class="form-group text-start">
               <button type="submit" class="submit-btn">Submit</button>
             </div>  
    </div>
    <div class="bottom-ribbion">
      <img src="./images/ribbion-bottom.png" />
    </div>
    </form>
  </div>
   </section>
   
 <section class="footer-top-section">
      <div class="container">
        <div class="heading-style text-center">
            <h2 class="title3">Chance To Win <span class="fw-semibold big">Big</span> With Mortgage Giants!</h2>
            <p class="mb-5">A trusted partner for all your mortgage needs, proudly sponsoring this event. 
                  Whether you are buying, refinancing, or need commercial financing, We are your go-to 
                  mortgage partner.</p>   
         </div>
         <div class="heading-style text-center my-3">
            <h5 class="title2">Residential Mortgages | Commercial Mortgages | Business Loan</h5>  
         </div>

         <div class="privacy text-center py-5">
            <p>Privacy Assurance:Your privacy is important to us. All information collected will be stored and used by mortgage giants only, it will not be shared with third party.</p>
         </div>
      </div>


   <footer>
      <div class="py-3 py-md-4 copyright">
         <div class="container">
            <p class="mb-0"><img src="./images/innovativeicon.png" class="me-2" alt=""> Design & Developed By <a href="https://www.innovativewebs.net" class="text-white" target="_blank">Innovative Web Solutions</a></p>
         </div>
      </div>
   </footer>
</div>
   <!-- JS, scripts -->
   <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
   
</body>
</html>