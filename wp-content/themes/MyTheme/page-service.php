<?php

get_header();

?>

<?php

/*
    
    Template Name: Service
    
    */

?>

<section id="content-service" class="anchor">
    <div class="navigation-page">
        <ul>
            <li><a href="#anchor1" onclick="slowScroll('#anchor1')" class="navi-page-item" id="Home">01 <img src="img/black short.svg" alt=""></a></li>
            <li><a href="#content" onclick="slowScroll('#content')" class="navi-page-item">02 <img src="/mg/black short.svg" alt=""></a></li>
            <li><a href="#content-service" onclick="slowScroll('#content-service')" class="navi-page-item">03 Services <img src="img/black large.svg" alt=""></a>
            </li>
            <li><a href="#content-contact" onclick="slowScroll('#content-contact')" class="navi-page-item">04 <img src="/mg/black short.svg" alt=""></a>
            </li>
        </ul>
    </div>
    <div class="container" id="anchor4">

        <p> <?php the_post_(); ?></p>
        <div class="triangle"></div>
        <div class="content-sevice-text">
            Our clients are at the forefront of energy transition and innovation. Their task is complex: balance reliability and cost effectiveness with new customer demands, investment decisions, decarbonization goals and an evolving menu of
            <?php
            get_post_meta(get_the_ID(), 'zinur', true);
            ?>
        </div>
        <br>
        <ul class="ul-container">
            <ul class="ul-elements">

                <h2>Enterprise <br> Strategy</h2>
                <li><img src="/mg/Rectangle 326.svg" alt=""> Procurement and investment diligence</li>
                <li><img src="/mg/Rectangle 326.svg" alt=""> Customer engagement and retention</li>
                <li><img src="/mg/Rectangle 326.svg" alt=""> Renewable, DER, and EV program <br> structuring</li>
                <li><img src="/mg/Rectangle 326.svg" alt=""> Reliability planning and reporting</li>
                <br><br>
                <img src="img/strela.png" alt="">
            </ul>
            <ul class="ul-elements">

                <h2>Wholesale <br> Power </h2>
                <li><img src="img/Rectangle 326.svg" alt=""> Commodity advisory and RFPs</li>
                <li><img src="img/Rectangle 326.svg" alt=""> Energy, capacity, REC, RIN, and LCFS placement</li>
                <li><img src="img/Rectangle 326.svg" alt=""> Enterprise PPA structuring</li>
                <li><img src="img/Rectangle 326.svg" alt=""> Contract extensions and re-packaging</li>
                <br><br>
                <img src="img/strela.png" alt="">
            </ul>
            <ul class="ul-elements">
                <h2>Market <br> Development</h2>
                <li><img src="img/Rectangle 326.svg" alt=""> New venture setup</li>
                <li><img src="img/Rectangle 326.svg" alt=""> Demand planning and acquisition</li>
                <li><img src="img/Rectangle 326.svg" alt=""> Project development and regulatory support</li>
                <li><img src="img/Rectangle 326.svg" alt=""> Partnership structuring</li>
                <br><br>
                <img src="img/strela.png" alt="">
            </ul>

        </ul>
        <div class="content-sevice-text-2">
            Our clients are time constrained and under-resourced. Agendas shift, budgets move and priorities
            change. We understand. We are agile, creative and immediately responsive to your various working
            styles, governance requirements and evolving needs.
        </div>
    </div>

</section>

<?php

get_footer();

?>