<?php

get_header();

?>

<?php

/*
    
    Template Name: AboutUs
    
    */

?>


<section id="content">
    <div class="navigation-page">
        <ul>
            <li><a href="#anchor1" onclick="slowScroll('#anchor1')" class="navi-page-item" id="Home">01 <img src="img/black short.svg" alt=""></a></li>
            <li><a href="#content" onclick="slowScroll('#content')" class="navi-page-item">02 About</a><img src="img/black large.svg" alt=""></li>
            <li><a href="#content-service" onclick="slowScroll('#content-service')" class="navi-page-item">03 <img src="img/black short.svg" alt=""></a>
            </li>
            <li><a href="#content-contact" onclick="slowScroll('#content-contact')" class="navi-page-item">04 <img src="img/black short.svg" alt=""></a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="inner_content">
            <h2 id="anchor3"><?php the_title(); ?></h2>
            <div class="triangle"></div>
            <br><br>
            <div class="p_container">
                <img src="<?php echo pods_field_display( 'img-aboutus' ); ?>">
                
                <p>
                    <?php
                    echo get_post_meta(get_the_ID(), 'zinur', true);
                    ?>

                </p>
            </div>
        </div>
    </div>

</section>


<?php

get_footer();

?>