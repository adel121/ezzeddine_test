<section  id="footer">


<div class="container container-footer">


<div class="row">

    
     <div class="col-sm">

       <br><br>
       <div style="color: #dbbe63;">
       <h1 style="font-family: 'Philosopher', sans-serif; font-size:3em;color: #dbbe63;"> <b> Mohammad Ezzeddine</b> </h1>

     
       <p style="color: #dbbe63;"> Freelance Financial Controller </p>
      
        <p style="color: #dbbe63;"> ERP Financial Consultant </p>
        </div>
        <br>
        
        <h3 style="color: #dbbe63;"> Beirut | Lebanon</h3>
     <h3 style="text-align:center;color: #dbbe63;"> +961 3 362828 <br> </h3>



  
    <?php 
               $badges = new WP_Query(array(      
              'posts_per_page' => 1,
              'post_type' => 'linkedin',
              'order' => 'ASC'
            ));

               while ($badges->have_posts()) 
               {
                $badges->the_post();

            ?>
            
            
     <a style="color:white; text-decoration: none;" 
     href="mailto:<?php echo get_field("email"); ?>"> <?php echo get_field("email"); ?> </a>
     
          
          
          <?php 
          
          
            
               }
               
               wp_reset_postdata();
          
          ?>
 <div class="social-links">
       <!-- <a  href=""><i class="fab fa-facebook-f"></i></a>
        
     
       
        <a href=""><i class="fab fa-linkedin-in"></i></a> -->
            <a href="https://www.facebook.com/mohamad.ezzedine.92" style="color:white" class="fa fab fa-facebook" id="nonbadgedicon"> </a>
        <a href="https://www.linkedin.com/in/m-ezzeddine/" style="color:white" class="fa fab fa-linkedin" id="nonbadgedicon"></a>
       
       
        <a href="https://www.linkedin.com/in/m-ezzeddine/" style="color:white" class="fa fab fa-instagram" id="nonbadgedicon"></a>
       
         </div>


 
    </div>
    <!--
    <div class="col-sm">
 
<br><br><br>
      <div class="social-card" >
     
        
        <div class="social-card-header">
          Linked&nbsp<i class="fa fa-linkedin-in"></i>
        </div>

        <div class="social-card-body">
     <br>
    
     <img style="border-radius: 50%; height: 80px; width: 80px;" src="https://media-exp1.licdn.com/dms/image/C4D03AQGjZFjYMBNq6A/profile-displayphoto-shrink_400_400/0/1620640730807?e=1643241600&v=beta&t=TxIoy-6VIMPMvv-C-oqwpRJiCJFKXQJnXE_oXJqEiDE">
        
        <hr>
        <h1 style="font-family:'philosopher', sans-serif; ">Mohammad Ezzeddine</h1>
        
        Freelance Financial Controller.
     
        <br><br>
        <a href="https://www.linkedin.com/in/m-ezzeddine/" style="text-align:center; border:2px solid #dbbe63; padding: 10px; text-decoration:none; color:black; border-radius:50px">
          
          View Profile
        </a>
      </div>


    </div>

  </div>
  -->
 
   <div class="col-sm" style="text-align:center">
       
  <br><br><br>
   
  <div class="badge-card">
    
    <div class="badge-header">
      Linked <i class="fab fa-linkedin badged"></i>
    </div>
    
    
    <?php 
               $badges = new WP_Query(array(      
              'posts_per_page' => 1,
              'post_type' => 'linkedin',
              'order' => 'ASC'
            ));

               while ($badges->have_posts()) 
               {
                $badges->the_post();

            ?>
            
    <div class="badge-pic-container">
        
        
      <img class="badge-pic" src="<?php echo get_field("profile"); ?>" alt="Profile Picture">
    </div>
    <div class="badge-name">
      <span><?php echo get_field("name"); ?></span>
    </div>
    <div class="badge-title">
      <span><?php echo get_field("title"); ?></span>
    </div>
    <div class="badge-description">
      <p> <?php echo get_field("description"); ?> </p>
    </div>
    <div class="badge-message">
     
      <a class="badge" href="https://www.linkedin.com/in/m-ezzeddine/"> <b>View Profile <b></a>
    </div>
  
   
  </div>

</div>
    
</div>

            
             

             <?php
             
             
           }
           wp_reset_postdata();
             ?>


<style>
    
    div.badge-base.LI-profile-badge {

        text-align: center;
        width:auto;
    }
    .badge-base__link {
        display:none;
    }
    
    
    div.profile-badge{
        margin: auto;
        z-index: -43243;
    }
    
    div.profile-badge.profile-badge--width-330.profile-badge--light{
    text-align:center;
    
    }
    
    
    
</style>



   

</div>


<div class="golden-separator" style="position:absolute; bottom:0"></div>

</section>

</body>
<div id="firstone">
    
<a href="https://wa.me/+9613362828" class="float" style="color:black" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
</div>

<div id="secondone">

<a href="https://wa.me/+9613362828" class="float_personal" target="_blank">
</a>
</div>










<?php wp_footer(); ?>


</html>
