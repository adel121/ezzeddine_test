<?php

// Handle AJAX request (start)
if( isset($_POST['consultation_request']) ){
    
    //wp_mail( string|string[] $to, string $subject, string $message, string|string[] $headers = '', string|string[] $attachments = array() )

 
 $response = "";
 $response_code = 0;
 
if (filter_var($_POST['e_email'], FILTER_VALIDATE_EMAIL) ){
 $mail_is_sent = true;   
}

    
    
 $message = "First Name: " . $_POST['e_first_name'] . "\n". "Last Name: "  . $_POST['e_last_name'] . "\n" . "Company: " . $_POST['e_company'] . "\n" . "Email: " . $_POST['e_email'] . "\n" . "Phone: " ;
 $message .= $_POST['e_phone'] . "\n" . "Address: " . $_POST['e_address'] . "\n" . "Service: " . $_POST['e_service'] . "\n" . "Message: " . $_POST['e_tell_us_more'] ; 
 if ($mail_is_sent)
$mail_is_sent = wp_mail("ezz.ddine.moh@gmail.com","Consultation Request - " . $_POST['e_first_name'] . " " . $_POST['e_last_name']  , $message, "", "");
 
 if ($mail_is_sent) {
    $response = "Thank You For Contacting Us! <br> Your message is received";
    $response_code = 1;
 }
 else 
    $response = "Email not sent. Please retry and check you are filling all fields correctly as required";
 
 echo json_encode(array(
     'response' => $response,
     'response_code' => $response_code,
   
     ));
 exit;
}
// Handle AJAX request (end)
?>

<?php get_header(); ?>


<section id="free_consultation">
	
	<div class="golden-separator"></div>

	<br>

	<h1 style="font-family: 'philosopher', sans-serif; color: black; "> <span style="color:#AE8625">F</span>ree <span style="color:#AE8625">C</span>onsultation</h1>



	<div class="row" style="width:90%; color:black;">
		<div class="col-sm content_styled">
			

				<br><br><br>

      		<h3 style="font-family: 'philosopher', sans-serif;"> Get Your Free  <span style="color:#AE8625"> Consultation  </span> </h3>
      		 <div class="container" style=" text-align:left">
                <?php the_post(); the_content(); ?>
		</div>
	</div>

		<div class="col-sm" style="padding-left: 100px;text-align:center;"> 
			 <div class="container" style="vertical-align: middle;">
			 	<br><br><br><br>
			<form>
  <div class="row">
    <div class="col">
      <input type="text" name="first_name" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" name="last_name" class="form-control" placeholder="Last name">
    </div>
  </div>
  <br>

<div class="row">
	
	<div class="col">
      <input type="text" name="company" class="form-control" placeholder="Company">
    </div>
</div>

<br>
  <div class="row">
    
    <div class="col">
      <input type="email" name="email" class="form-control" placeholder="Email">
    </div>

    <div class="col">
      <input type="tel" name="phone" class="form-control" placeholder="Phone">
    </div>
  </div>


  <br>

  <div class="row">
  	
  	<div class="col">
  		<input type="text" name="address" class="form-control" placeholder="Address">
  	</div>
  </div>
<br>
  <div class="row">
  	
  	<div class="col">
  		
  		<select name="service" class="form-control">
  			<option disabled selected> Select a service </option>


        <?php 
        $allServices = new WP_Query(array(

            'posts_per_page' => '-1',
            'post_type' => 'service',
        ));

        while($allServices->have_posts()) {

            $allServices->the_post();
            $service = get_the_title();
        ?>
  			<option value="<?php echo $service; ?>"> <?php echo $service; ?> </option>

  			<?php } 

        wp_reset_postdata();

        ?>
  		</select>
  	</div>
  </div>
<br>
 

<div class="row">
    
    <div class="col">
      

    <textarea name="tell_us_more" maxlength="200" placeholder="Tell Us More! (Max of 200 letters)" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </div>


<br>
  
</form>
<p style="text-align:center;">
   <button id="submit" class="button">Request</button></p>
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
   $('#submit').click(function(){
    
 
     var first_name = $( "input[name='first_name']" ).val();
     var last_name = $( "input[name='last_name']").val();
     var company = $( "input[name='company']").val();
     var email = $( "input[name='email']" ).val();
     var phone = $( "input[name='phone']").val();
     var address = $( "input[name='address']").val();
     var service = $( "select[name='service']").find(":selected").text();
     var tell_us_more = $( "textarea[name='tell_us_more']").val();
     console.log(service);
     if (service.trim() == "Select a service"){
        service = " no service selected";
        console.log("working");
        console.log(service);
     }
     
     $.ajax({
      type: 'post',
      data: {consultation_request: 1, e_first_name : first_name, e_last_name: last_name, e_company: company,  e_email: email, e_phone : phone, e_address: address, e_service: service, e_tell_us_more: tell_us_more  },//name: name, email: email , message: message},
      dataType: 'json',
      success: function(resp){
        
        $('#response-container').show();
        var status = parseInt(resp.response_code);
        if ( resp.response_code == 1) 
         $('#response-container').css("background", "linear-gradient(90deg,#388e3c, #8bc34a, #F7EF8A)");
        else 
        $('#response-container').css("background", "linear-gradient(90deg,#c21808, #F7EF8A)");
        document.getElementById('response').innerHTML = resp.response ;
        console.log(status);
        console.log(resp.message);
        
      }
     });
    
 
   });
 });
 </script>

        
 
 <br>
 <div id="response-container" style="display:none; padding: 10px;margin:auto; border-radius:50px;background:red; width:100%; height:auto; color:white">
     <h5 style="text-align:center; " id="response"> </h5>
 </div>
 <br>
</div>
		</div>
	</div>	
		

	</div>
</section>


<?php get_footer(); ?>