<?php 
/*
* Template Name: Home
*/
get_header(); 
?>

<div class="banner-container">
    <div class="container">
        <div class="banner-wrapper">
            <div class="content">
                <h3>Business theme</h3>
                <h2>We Grow Up your Business</h2>

                <p>We are a new Digital Agency based in USA. We have over 10 years of combined experience, and know a thing or two about designing websites and mobile apps.</p>

                <div class="actions-wrapper">
                    <a href="#" class="btn btn-primary">Get in touch</a>
                    <a href="#" class="btn btn-secondary">Buy theme</a>
                </div>
            </div>

            <div class="image-wrapper">
                <span>
                    <div class="play-button"></div>
                </span>
            </div>
        </div>
    </div>
</div>


<div class="experience-container">
    <div class="container">
        <p class="title">Over 10 years of combined experience, and know a thing or two about designing websites and mobile apps.</p>

        <div class="experience-wrapper">
            <div class="experience-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/bow.png" alt="">

                <h4>Web Development</h4>
                <p>Web development is a broad term for the work involved in developing a web site for the Internet.</p>
            </div>
            <div class="experience-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/diamond.png" alt="">

                <h4>Web & UI/UX Design</h4>
                <p>Web design encompasses many different skills and disciplines in the production and maintenance of all web.</p>
            </div>
            <div class="experience-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/briefcase.png" alt="">

                <h4>SEO & Marketing</h4>
                <p>A process of affecting the visibility of a website or a web page in a web search enrine's unpaid results.</p>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>