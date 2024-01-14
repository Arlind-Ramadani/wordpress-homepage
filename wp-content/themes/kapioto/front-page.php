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
                <h3><?= ( get_field('banner')['subtitle'] );?></h3>
                <h2><?= ( get_field('banner')['title'] );?></h2>

                <p><?= ( get_field('banner')['text'] );?></p>

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
        <?= ( get_field('experience')['title'] );?>

        <div class="experience-wrapper">
            <div class="experience-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/bow.png" alt="">

                <h4><?= ( get_field('experience')['title_1'] );?></h4>
                <p><?= ( get_field('experience')['text_1'] );?></p>
            </div>
            <div class="experience-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/diamond.png" alt="">

                <h4><?= ( get_field('experience')['title_2'] );?></h4>
                <p><?= ( get_field('experience')['text_2'] );?></p>
            </div>
            <div class="experience-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/briefcase.png" alt="">

                <h4><?= ( get_field('experience')['title_3'] );?></h4>
                <p><?= ( get_field('experience')['text_3'] );?></p>
            </div>
        </div>
    </div>
</div>

<div class="mission-container">
    <div class="image-wrapper">
        
    </div>
    <div class="content">
        <h4><?= ( get_field('mission')['title'] );?></h4>
        <?= ( get_field('mission')['text'] );?>

        <img src="<?= get_bloginfo('template_directory')?>/dist/img/signature.png" alt="">
    </div>
</div>

<div class="strategies-container">
    <div class="strategies-item">
        <h4><?= ( get_field('strategies')['title_1'] );?></h4>
        <?= ( get_field('strategies')['text_1'] );?>
    </div>
    <div class="strategies-item">
        <h4><?= ( get_field('strategies')['title_2'] );?></h4>
        <?= ( get_field('strategies')['text_2'] );?>
    </div>
    <div class="strategies-item">
        <h4><?= ( get_field('strategies')['title_3'] );?></h4>
        <?= ( get_field('strategies')['text_3'] );?>
    </div>
</div>

<div class="facts-container">
    <div class="container">
        <h4><?= ( get_field('facts')['title'] );?></h4>
        <?= ( get_field('facts')['text'] );?>

        <div class="facts-wrapper">
            <div class="facts-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/briefcase.png" alt="">

                <div class="content">
                    <p class="number"><?= ( get_field('facts')['fact_no_1'] );?></p>
                    <p><?= ( get_field('facts')['fact_text_1'] );?></p>
                </div>
            </div>
            <div class="facts-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/clock.png" alt="">

                <div class="content">
                    <p class="number"><?= ( get_field('facts')['fact_no_2'] );?></p>
                    <p><?= ( get_field('facts')['fact_text_2'] );?></p>
                </div>
            </div>
            <div class="facts-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/star.png" alt="">

                <div class="content">
                    <p class="number"><?= ( get_field('facts')['fact_no_3'] );?></p>
                    <p><?= ( get_field('facts')['fact_text_3'] );?></p>
                </div>
            </div>
            <div class="facts-item">
                <img src="<?= get_bloginfo('template_directory')?>/dist/img/heart.png" alt="">

                <div class="content">
                    <p class="number"><?= ( get_field('facts')['fact_no_4'] );?></p>
                    <p><?= ( get_field('facts')['fact_text_4'] );?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-container">
    <div class="container">
        <div class="content">
            <h5><?= ( get_field('contact')['title'] );?></h5>

            <p><?= ( get_field('contact')['text'] );?></p>
        </div>
        <a href="#" class="btn btn-primary">Get in touch</a>
    </div>
</div>

<div class="industries-container">
    <div class="container">
        <div class="industries-wrapper">
            <div class="content">
                <h4><?= ( get_field('industries')['title'] );?></h4>

                <p><?= ( get_field('industries')['text'] );?></p>

                <?= ( get_field('industries')['list'] );?>
            </div>
            <div class="slider">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>