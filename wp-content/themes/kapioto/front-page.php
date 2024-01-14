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


<div class="mission-container">
    <div class="image-wrapper">
        
    </div>
    <div class="content">
        <h4>Our Mission</h4>
        <p>We use an agile approach to test assumptions and connect with the needs of vour audience early and often. technology enables great experiences. We like and use technology but we have tried</p>
        <p>Clever use of technology and lean processes enable us to wor faster and smarter.</p>

        <img src="<?= get_bloginfo('template_directory')?>/dist/img/signature.png" alt="">
    </div>
</div>

<div class="strategies-container">
    <div class="strategies-item">
        <h4><b>01.</b> Discussion</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto aspernatur sapiente vitae rerum sequi reprehenderit!</p>
    </div>
    <div class="strategies-item">
        <h4><b>02.</b> Development</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto aspernatur sapiente vitae rerum sequi reprehenderit!</p>
    </div>
    <div class="strategies-item">
        <h4><b>03.</b> Release Project</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto aspernatur sapiente vitae rerum sequi reprehenderit!</p>
    </div>
</div>

<div class="facts-container">
    <div class="container">
        <h4>Some Facts about us</h4>

        <p>Vivamus ut scelerisque tellus. Morbi egestas neque et lorem sodales faucibus. Etiam efficitur vehicula commodo. Curabitur ac libero ullamcorper, interdum arcu et, posuere arcu.</p>

        <div class="facts-wrapper">
            <div class="facts-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/briefcase.png" alt="">

                <div class="content">
                    <p class="number">548</p>
                    <p>Projects completed</p>
                </div>
            </div>
            <div class="facts-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/clock.png" alt="">

                <div class="content">
                    <p class="number">1465</p>
                    <p>Working Hours</p>
                </div>
            </div>
            <div class="facts-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/star.png" alt="">

                <div class="content">
                    <p class="number">612</p>
                    <p>Positive Feedbacks</p>
                </div>
            </div>
            <div class="facts-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/heart.png" alt="">

                <div class="content">
                    <p class="number">735</p>
                    <p>Happy clients</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>