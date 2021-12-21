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
 <div class="golden-separator"></div>

<section id="first_sec">
 

  <div class="global_container_section_one">
  <div class="content_container_section_one">
   <div class="name">
       
  		<h1 id="name_in_section" class="animate-charcter" style=""> MOHAMMAD EZZEDDINE</h1>
  		<h3> Freelance Financial Controller </h3>
  		<h3> ERP Financial Consultant </h3>
  		
  	</div>
  
  	</div>
<div id="social_links_first_section">
  	    <a style="color:white" href="https://www.facebook.com/mohamad.ezzedine.92" class="fa fab fa-facebook" id="nonbadgedicon"> </a>
        <a style="color:white" href="https://www.linkedin.com/in/m-ezzeddine/" class="fa fab fa-linkedin" id="nonbadgedicon"></a>
 <a style="color:white" href="https://www.linkedin.com/in/m-ezzeddine/" class="fa fab fa-instagram" id="nonbadgedicon"></a>

</div>
</div>
     
	

  </section>
    
<section id="second_sec" >

<div class="providing_virtual">

  <h2 class= "get_in_touch_text" style="font-family: 'Philosopher', sans-serif;"> Providing outsourced controlling, consulting, and accounting services to small and mid-size business. </h2>

  
<p style="text-align:center;">
      <a href="<?php echo site_url('contact-me'); ?>" style="text-align:center;">
   
   <button class="button">Get In Touch</button></a> </p>
<br>
</div>

</section>

<section id="about">
<div class="golden-separator"></div>

    <h1 style="font-family: 'philosopher', sans-serif;"> 

      <br><a style="text-decoration:none; color:black;" href="<?php echo site_url('about-me'); ?>"> About <span style="color:#AE8625"> Me </span> </a> </h1>

      <p> A Trusted Partner You Can Rely On </p>
  


  <div class="row" style="width: 100%;">

     <div class="col-sm">
      <?php 
    $page = get_posts([
    'name'      => 'about-me',
    'post_type' => 'page'
    ]);
    
    ?>
    <div class='intro'>
      <p style="text-align:justify-all; padding: 40px;" class="content_styled container">
          
          <?php echo wp_trim_words($page[0]->post_content, 35); ?></p></div>
     </div>


     <div class="col-sm">


     <p style="font-family: 'Philosopher', sans-serif;;"> <b> <span style="color:#AE8625"> M</span>ohammad <span style="color:#AE8625"> E</span>zzedine</b> </p>
     <?php 

     $id = get_page_by_path('about-me')->ID;

      $url = wp_get_attachment_url( get_post_thumbnail_id($id));



     ?>
     
     <br>
     
     <img style="border-radius: 50px; height: 250px; width: 250px;" src="<?php echo $url; ?>">
       
    </div>
    
  </div>
  <br>
  
    <a href="<?php echo site_url('about-me'); ?>" style="text-align:center;">
   <button class="button">See More</button></a>
</section>

 <section id="services">
 
<br>
 <h1 style="font-family: 'philosopher', sans-serif;"> <span style="color:#AE8625">S</span>ervices  </h1>

      <p> Credibility is our key to serve you </p>
  


  <div class="row" style="width: 100%;">

     <?php 
               $allServices = new WP_Query(array(      
              'posts_per_page' => 3,
              'post_type' => 'service',
              'order' => 'ASC',
            ));

               while ($allServices->have_posts()) 
               {
                $allServices->the_post();

            ?>
           <div class="col-sm"> 
     <a href="<?php the_permalink(); ?>" > <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100px; height:100px; border-radius:50%"></a>
      <br>

     <a href="<?php the_permalink(); ?> " style="color:white; text-decoration:none"><?php the_title(); ?>
     </a>
    </div>
             

             <?php
           }
           wp_reset_postdata();
      ?>
    

   
  
   

  </div>
 <br><br>
   <p style="text-align:center;">
   <button class="button">Click a service to learn more</button></p>
  </section>

<section id="articles">
<div class="golden-separator"></div>
<br>

  <?php 

  $recentArticles = new WP_Query(array(      
              'posts_per_page' => 3,
              'post_type' => 'post',
            ));



  ?>
  <h1 style="font-family: 'philosopher', sans-serif; "> <span style="color:#AE8625">A</span>rticles </h1>



    <div class="row"  style="width:80%; margin: auto; text-align:center;">

      <?php 
       while($recentArticles->have_posts()) {
            $recentArticles->the_post();
      ?>
<div class="col-sm">
          <div class="row" style="width:100%">
            <div class="col-sm">
              <a href="<?php the_permalink(); ?>">
              <img style="height:150px; width:150px; border-radius:50px"  src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
            </div>
          </div>

          <hr>

           <div class="row" style="width:100%">
             <div class="col-sm"><a href="<?php the_permalink(); ?>" style="color:black; text-decoration:none" ><?php the_title(); ?></a></div>
          </div>
        </div>

    <?php } 

wp_reset_postdata();
    ?>
        

     
      </div>
<br>
      <a href="<?php echo site_url('articles'); ?>" style="text-align:center;">
   <button class="button">Tell Me More</button></a>

  

  
  </section>


 

<section id="contact">
  

  <h1 style="font-family: 'philosopher', sans-serif; color: white">Contact <span style="color:#AE8625">Me</span></h1>

  <p style="color:white"> 
  We are always ready to answer any question or inquiry. Let’s Meet! </p>
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