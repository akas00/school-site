<?php include("header.php"); ?>

<!-- Banner Section -->
	<section class="banner-section banner-height" style="background-image: url('images/about-banner.jpg');">

		<div class="banner-overlay"></div>
		<div class="container">
			<div class="banner-slogan">
				<h1 class="slogan">About Us</h1>
			</div>
		</div>
	</section>




	<section class="about-page ">
		<div class="container">
			<div class="headings">
				<div class="left-heading">
					<h2>A word of welcome</h2>
					<p>We are one of the largest, most diverse universities in the USA with over 90,000 students in 
					USA, and a further 30,000 studying across 180 countries for Kingster University.<br><br>
					Kingster University was established by John Smith in 1920 for the public benefit and it is 
					recognized globally. Throughout our great history, Kingster has offered access to a wide 
					range of academic opportunities. As a world leader in higher education, the University has 
					pioneered change in the sector.
					<br>
					 Throughout our great history, Kingster has offered access to a wide 
					range of academic opportunities. As a world leader in higher education, the University has 
					pioneered change in the sector.</p>

				</div>
				<div class="right-heading">
					<h2>About</h2>
					<div class="about-image">
						<img src="images/about.jpg">
					</div>
				</div>
			</div>
	
		</div>
		
		
	</section>



	<section class="about-us section-gap"  style="background-image: url('images/about2.jpg'); ">
		
		<div class="container">
				<div class="circle">
					<div class="text">
						<p>39 <br>Teachers</p>
					</div>
				</div>
					<div class="circle">
						<div class="text">
							<p>39 <br>Teachers</p>
						</div>
					</div>
					<div class="circle">
						<div class="text">
							<p>39 <br>Teachers</p>
						</div>
					</div>
			<!-- </div> -->
			
		</div>
	</section>



	<section class="apply-letter " >
		<div class="container">
				<div class="apply-letter-text">
					Apply Letter For Admission to High School
				</div>
			<div class="apply-button">
				<a href="apply.php" data-toggle="modal" data-target=".bd-example-modal-lg"  >Apply Now</a>
			</div>


				<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				     <div class="apply-form">
   

					            <form class="form-horizontal" role="form">
					               
					                <div class="row">
					                    <div class="col-md-12 apply-form-title">
						                       <div class="join">
						                       		<h2>Join Us</h2>
						                       </div>
							                    <div class="close">
							                    	<a  data-dismiss="modal" href="#">×</a>
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
					                    
					                     		   <textarea name="textarea" cols="40" rows="5" class="wpcf7-form-control  form-control" id="message" aria-invalid="false" placeholder="Additional Information"></textarea>
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
  			 	 </div>
        	 </div> 
     	</div>
	 </div> 
</section>
    



	<?php include("footer.php"); ?>