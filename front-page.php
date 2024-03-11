<?php get_header(); 

// Hero Section Custom Field

$video = get_field('vidio_url');
$heroTitle = get_field('hero_section_title');

//  Case Study Section

$case1 = get_field('case_study_1');
$case2 = get_field('case_study_2');
$case3 = get_field('case_study_3');
$case4 = get_field('case_study_4');

// Section 4 

$sectionFour = get_field('section_4_title');
$sectionFourTouchLink = get_field('section_4_get_in_toch');
$sectionFourOurWorkLink = get_field('section_4_Our_Work');

// Section 2 

$sectionTwoTitle = get_field('section_2_title');



?>

<section class="page">
    <div class="containerr">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
        else : endif; ?>


        <div class="owl-carousel video-container owl-loaded owl-drag">

                <div class="item">
                    <video class="center-video" loop muted playsinline autoplay>
                        <source src="<?php echo $video; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="item">
                    <video class="center-video" loop muted playsinline autoplay>
                        <source src="<?php echo $video; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="item">
                    <video class="center-video" loop muted playsinline autoplay>
                        <source src="<?php echo $video; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
               
               
            
        </div>
        

        <div class="overlay-text">
            <?php if ($heroTitle) : ?>
       
            <p class="title"><?php echo($heroTitle);?></p>


      
                       


                   <?php endif; ?>
            <a href="#" class="d-flex align-items-center">
                <img class="play-icon" src="http://digitall-business.com/wp-content/uploads/2024/03/play-btn.png" alt="">
                <span class="watch-btn ml-2">Watch <br> Showreel</span>
            </a>
        </div>
        <div class="scrool-btn ">
            <a href="#sec2" class="d-flex align-items-center">
                <span class="watch-btn ml-2">Scrool <i class="fa-solid fa-angle-down"></i></span>
            </a>
        </div>
    </div>
</section>








<!-- Section  2 -->
<section id="sec2" class="sec-2 d-flex justify-content-center align-items-center ">
<img class="shadow" src="http://digitall-business.com/wp-content/uploads/2024/03/showreel-shadow-1.png" alt="Background Image">

    <div class="content col-md-8 col-md-offset-2 col-xs-12">
        
        <?php if ($sectionTwoTitle) : ?>
       
        <div>
            <h1 class="text-white sec-2-title"> <?php echo($sectionTwoTitle);?> </h1>

        </div>
                        


                    <?php endif; ?>


        <div class="more-sec2" style=" ">
            <a class="p-2" href="#"><span>KNOW MORE <i class="fa-solid fa-chevron-right "></i></span></a>
        </div>
    </div>
</section>














<!-- Case Study Section  -->

<div id="case-study">

<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="shadow" src="http://digitall-business.com/wp-content/uploads/2024/03/showreel-shadow-1.png" alt="Background Image">

      <div class="carousel-caption align-items-center w-100">
        
        <h3>SUPERDOME</h3>
        <a href="#" class="">Read More <i class="fa-solid fa-chevron-right "></i></a>
      </div>
      <video loop muted playsinline autoplay class="d-block w-100" src="<?php echo $case1; ?>" alt="First slide"></video>
    </div>
    <div class="carousel-item">
    <img class="shadow" src="http://digitall-business.com/wp-content/uploads/2024/03/showreel-shadow-1.png" alt="Background Image">

      <div class="carousel-caption align-items-center w-100">
        <h3>SUPERDOME</h3>
        <a href="#" class="">Read More <i class="fa-solid fa-chevron-right "></i></a>
      </div>
      <video loop muted playsinline autoplay class="d-block w-100" src="<?php echo $case2; ?>" alt="First slide"></video>
    </div>
    <div class="carousel-item">
    <img class="shadow" src="http://digitall-business.com/wp-content/uploads/2024/03/showreel-shadow-1.png" alt="Background Image">

      <div class="carousel-caption align-items-center w-100">
        <h3>SUPERDOME</h3>
        <a href="#" class="">Read More <i class="fa-solid fa-chevron-right "></i></a>
      </div>
      <video loop muted playsinline autoplay class="d-block w-100" src="<?php echo $case3; ?>" alt="First slide"></video>
    </div>
    <div class="carousel-item">
    <img class="shadow" src="http://digitall-business.com/wp-content/uploads/2024/03/showreel-shadow-1.png" alt="Background Image">

      <div class="carousel-caption align-items-center w-100">
        <h3>SUPERDOME</h3>
        <a href="#" class="">Read More <i class="fa-solid fa-chevron-right "></i></a>
      </div>
      <video loop muted playsinline autoplay class="d-block w-100" src="<?php echo $case4; ?>" alt="First slide"></video>
    </div>
  </div>
  <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a> -->
  <!-- <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>

</div>




<!-- End -->





<!-- Section 3 -->
<section id="sec3" class="sec-3 d-flex justify-content-center align-items-center ">
    <div class="content col-md-8 col-md-offset-2 col-xs-12">
        <div class="d-flex justify-content-center">
        <?php if ($sectionFour) : ?>
        <h1 class="text-white sec-2-title">
            <?php echo($sectionFour);?> 
        </h1>
                        


                    <?php endif; ?>
            <!-- <h1 class="text-white sec-2-title">TIME TO STOP SCROLLING</h1> -->
        </div>
        <div class="more-sec3 text-center">
    <?php if ($sectionFourTouchLink || $sectionFourOurWorkLink) : ?>
        <a class="p-2" href="<?php echo $sectionFourTouchLink; ?>"><span>Get in Touch <i class="fa-solid fa-chevron-right ml-2"></i></span></a>
        <a class="p-2" href="<?php echo $sectionFourOurWorkLink; ?>"><span>Our Work <i class="fa-solid fa-chevron-right ml-2"></i></span></a>
    <?php endif; ?>
</div>

    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        $(".video-container").owlCarousel({
            loop: false,
            animateOut: 'slideOutDown',
    animateIn: 'flipInX',
    items:3,
    
    video:true,
    stagePadding:30,
   
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>

<?php get_footer(); ?>
