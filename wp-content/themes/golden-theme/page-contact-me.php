<?php

// Handle AJAX request (start)
if( isset($_POST['contact_request']) ){
    
    //wp_mail( string|string[] $to, string $subject, string $message, string|string[] $headers = '', string|string[] $attachments = array() )

 $response = "";
 $response_code = 0;
 
if (filter_var($_POST['e_email'], FILTER_VALIDATE_EMAIL)) {
 $mail_is_sent = true;   
}
 $message = "Name: " . $_POST['e_name'] . "\n". "Email: " . $_POST['e_email'] . "\n" . "Message: " . $_POST['e_message'] ; 
 if ($mail_is_sent)
    $mail_is_sent = wp_mail("adelhajhasan76@gmail.com","Contact Request - " . $_POST['e_name'],$message, "", "");
 
 if ($mail_is_sent) {
    $response = "Thank You For Contacting Us! <br> Your message is received";
    $response_code = 1;
 }
 else 
    $response = "Email not sent. <br> Please retry and check you are filling all fields correctly as required";
 
 echo json_encode(array(
     'response' => $response,
     'response_code' => $response_code,
     ));
 exit;
}
// Handle AJAX request (end)
?>
<?php get_header(); ?>


<section id="contact_page_section">
	
<div class="golden-separator"></div>


<br>
<h1 style="font-family: 'philosopher', sans-serif; color: black; "> Contact <span style="color:#AE8625">Me</span></h1>

  <p style="color:black"> 
  We are always ready to answer any question or inquiry. Let’s Meet! </p>

  <br><br><br><hr>

<div class="container">
<form>
  <div class="row">
    <div class="col">
      <input name="FullName"  required type="text" class="form-control" placeholder="Name">
    </div>
    <div class="col">
      <input name="Email" required type="email" class="form-control" placeholder="Email">
    </div>
  </div>
  <br>

  <div class="row">
    
    <div class="col">
      

    <textarea name="Message" placeholder="Message (Max of 200 letters) " class="form-control" id="exampleFormControlTextarea1" maxlength="200" rows="3"></textarea>
    </div>
  </div>


<br>
 
</form>

 <p style="text-align:center;">
   <button  id="submit" class="button">Submit</button></p>

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
   $('#submit').click(function(){
        
 
     var name = $( "input[name='FullName']" ).val();
     var email = $( "input[name='Email']" ).val();
     var message = $( "textarea[name='Message']").val();
     $.ajax({
      type: 'post',
      data: {contact_request: 1, e_name : name, e_email: email, e_message: message  },//name: name, email: email , message: message},
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
      }
     });
    
 
   });
 });
 </script>
 <br>
 <div id="response-container" style="display:none; padding: 10px;margin:auto; border-radius:50px;background:red; width:60%; height:auto; color:white">
     
     <h5 style="text-align:center; " id="response"> </h5>
 </div>
 <br>

<div class="golden-separator"></div>
  
  </div>
</section>

<?php get_footer(); ?>

