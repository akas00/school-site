<?php include("header.php"); ?>

<!-- Banner Section -->
    <section class="banner-section banner-height" style="background-image: url('images/event-banner.jpg');">

        <div class="banner-overlay"></div>
        <div class="container">
            <div class="banner-slogan">
                <h1 class="slogan">Admission</h1>
            </div>
        </div>
    </section>

<section class="apply-form">
    <div class="container">

            <form class="form-horizontal" role="form">
               
                <div class="row">
                    <div class="col-md-12">
                         <div class="right-heading">
                    <h2>Join Us</h2>
                  </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-12">
                       <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                
                        <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                        
                    
                </div>  
                    </div>



                    <div class="col-md-6 col-sm-12">
                         <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    
                        <input type="email" id="email" placeholder="Email" class="form-control">
                    
                          </div>
                    </div>


                    <div class="col-md-6 col-sm-12">
                        
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label" style="max-width:fit-content">Date of Birth</label>
                    
                        <input type="date" id="birthDate" class="form-control">
                    
                </div>
                    </div>



                    <div class="col-md-6 col-sm-12">
                         <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Address</label>
                     
                        <input type="address" id="address" placeholder="Address" class="form-control">
                    
                    
                         </div> 
                    </div>
               
               
               
                
               <div class="col-md-12">
                 <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Phone no.</label>
                     
                        <input type="phone" id="phone" placeholder="Phone no." class="form-control">
                    </div>
                    
                </div>
                     <div class="col-md-12">
                  <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Additional Info </label>
                    
                        <textarea name="textarea" cols="40" rows="10" class="wpcf7-form-control  form-control" id="message" aria-invalid="false" placeholder="Additional Information"></textarea>
                    </div>
                    
                </div> <!-- /.form-group -->
                <div class="col-md-12 col-sm-offset-3">
                <div class="form-group ">
                     
               Add your CV HERE: <span class="wpcf7-form-control-wrap">
                <input type="file" name="file-100" size="40" class="wpcf7-form-control  form-control" accept=".pdf,.doc" aria-required="true" aria-invalid="false"></span><br>
               <label>Only: pdf / doc  Size: less than 1 Mb</label>
                    </div>
              </div>
               
               <div class="col-md-12 col-sm-offset-3">
                <div class="form-group">
                    
                        <button type="submit" class="btn btn-primary btn-block">Apply Now</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div>
         </div> <!-- ./container -->
    
</section>



        <?php include("footer.php"); ?>