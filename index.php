<?php get_header();?>
    </header>

  
 
  <main>
<section>
    
    <div class="container">
        <section >
            <div class="row">
              <div class="col-12">
                <div class="wrapper py-5" class="d-flex justify-content-center" >
              <h1 class="text-white d-flex justify-content-center">FIND A RECIPE</h1>
              <input class="col-10 offset-1 py-2 "  type="text" placeholder="Search..">
              </div>
              </div>
            </div>
          </section>

          <section class="space-tb">
            <div class="row">
              <div class="col-12 border-top border-bottom">
                <div class="row">

                 <img class="col-12 col-sm-5 col-md-6 pt-3 pb-3" src="<?php echo get_template_directory_uri(); ?>/images/swirl.cookie.png" alt="orange and white swirled cookies.">
                 <div class="col-sm-5 mt-3 mt-md-5" id="move-down">
                 <h2>WICKED TREATS FOR YOUR GHOULISH HALLOWEEN PARTY</h2>
                 <p>Impress all your guests with these mounth-watering recipes. Pies, cakes, cookies, and more.</p>
                 </div>
                 </div>
              </div>
            </div>
            </section>

            <section class="mt-3">
              <div class="container">
              <div class="row">
                <?php
                $args = array(
                  'post_type' => 'recipes'
                );
                $query = new WP_Query($args);
                ?>


                 <div class="card col-5 offset-1 col-md-3 offset-md-0" >
                 <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post() ; ?>
                 <?php the_post_thumbnail('large') ;?>
                 <!--<img class="card-img-top" src="<?php echo get_template_directory_uri() ; ?>/images/devil.cake.png" alt="Card image cap"> -->
                      <div class="card-body">
                      <h2 class="card-title pt-1"><?php the_title() ; ?></h2>
                   <p>test</p>
                       
                      </div>
<?php endwhile; endif;?>
                 </div>
                 <div class="card col-5 col-md-3 offset-md-0 " >
                  <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/monster.cookie.png" alt="Card image cap">
                  <div class="card-body">
                  <h2 class="card-title pt-1">MONSTER COOKIES</h2>
            
                  </div>
             </div>
             

             <div class="card col-5 offset-1 pt-4 col-md-3 offset-md-0 pt-md-0" >
              <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/pecan.donut.png" alt="Card image cap">
              <div class="card-body">
              <h2 class="card-title pt-1 pb-3">BUTTER PECAN DONUTS</h2>
            
               
              </div>
         </div>

         <div class="card col-5 pt-4 col-md-3 offset-md-0 pt-md-0" >
          <a href="pumpkinroll.html "> <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/pumpkin.roll.png" alt="Card image cap"></a>
          <div class="card-body">
          <a href="pumpkinroll.html "><h2 class="card-title pt-1 ">PUMPKIN ROLL</h2></a>
       
           
          </div>
     </div>
              </div>
              </div>
              </section>

      


<section class="mt-3">
  <div class="container">
  <div class="row">
    <div class="col-10  pt-4">
      <h2 class="col-md-8">OUR RECIPES</h2>
      <p class="col-md-8">Our recipes have a wide range of flavors and price points that are sure to fit your needs. We always take note of what you like so we can always keep it fresh while sticking to flavor profiles we know you'll enjoy. 
      </p>
      </div>
     <div class="card col-12  col-md-4 offset-md-0" >
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/carrot.cake.png" alt="Card image cap">
          <div class="card-body">
          <h2 class="card-title pt-1">CARROT CAKE SQUARES</h2>
       
           
          </div>
     </div>
     <div class="card col-12 col-md-4 offset-md-0 " >
      <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/chocolate.cake.png" alt="Card image cap">
      <div class="card-body">
      <h2 class="card-title pt-1">CHOCOLATE CAKE</h2>

      </div>
 </div>
 

 <div class="card col-12  pt-4 col-md-4 offset-md-0 pt-md-0" >
  <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/apple.pie.png" alt="Card image cap">
  <div class="card-body">
  <h2 class="card-title pt-1 pb-3">APPLE PIE</h2>

   
  </div>
</div>




</div>
</div>
  </div>
  </div>
  </section>
</main>

<?php get_footer();?>
</body>

</html>