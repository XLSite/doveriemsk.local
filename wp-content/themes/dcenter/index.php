<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ) ?>">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ) ?>"/>      
      <title><?php bloginfo( 'name' ) ?> - Главная страница</title>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <?php wp_head(  ); ?>
   </head>
<body>
      <!---header-and-banner-section-->
      <div class="header-and-banner-con w-100 float-left position-relative">
         <div class="header-and-banner-inner-con">
            <header class="main-header">
               <!--navbar-start-->
               <div class="container pl-0 pr-0">
                  <div class="header-con">
                     <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        if( $custom_logo_id ){
                           $logo_img = wp_get_attachment_image( $custom_logo_id, array(50,50), false, array(
                              'class'    => 'svglogo',
                              'itemprop' => 'logo',
                              'alt' => 'АНО Доверие-Вакансии логотип',
                           ) );
                        }
                        
                        echo $logo_img;
                        
                         ?> 
                       <!-- <a class="navbar-brand p-0" href="index.html">
                        <img src="<?php //bloginfo('template_url') ?>/assets/image/logo.svg" alt="АНО Доверие-Вакансии Лого" class="img-fluid img-logo"> -->
                        </a>
                        <button class="navbar-toggler p-0 collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                           <ul class="navbar-nav ml-auto">                              
                              
                              <li class="nav-item">
                                 <a class="nav-link p-0" href="#service-con">О нас</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link p-0" href="#about-con">Наши услуги</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link p-0" href="#Portfolio">Вакансии</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link p-0" href="#testimonials">Отзывы</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link p-0" href="#blog">Партнеры</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link p-0" href="#Contact">Контакты</a>
                              </li>
                           </ul>
                           <div class="d-inline-block contact">
                              <a href="tel:88007003977">8-800-700-3977</a>
                           </div>
                        </div>
                     </nav>
                  </div>
               </div>
               <!--navbar-end-->
            </header>
            <section class="banner-main-con" id="home">
               <div class="container pl-0 pr-0">
                  <!--banner-start-->
                  <div class="footer-social-icon banner-social-icon mb-0">
                     <ul class="mb-0 list-unstyled">
                        <li class="">
                           <a href="https://vk.com/public219931913"><i class="fab fa-vk d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li class="mt-3 mb-3">
                           <a href="https://ok.ru/group/70000002371283"><i class="fab fa-odnoklassniki d-flex align-items-center justify-content-center ml-0 mr-0 "></i></a>
                        </li>
                        <li class="">
                           <a href="https://t.me/sosrabotamoskva"><i class="fab fa-telegram d-flex align-items-center justify-content-center"></i></a>
                        </li>
                     </ul>
                  </div>
                  <div class="banner-con text-lg-left text-center">
                     <div class="row">
                        <div class="col-lg-7 col-sm-12 d-flex justify-content-center flex-column">
                           <div class="banner-left-con wow slideInLeft">
                              <div class="banner-heading">
                                 <h2> <?php the_field('top_title'); ?></h2>                                 
                                 <ul class="dynamic-txts">
                                    <li><h1>Работа ЕСТЬ!</h1></li>
                                    <li><h1>Работа ЕСТЬ!</h1></li>
                                    <li><h1>Работа ЕСТЬ!</h1></li>
                                    <li><h1>Работа ЕСТЬ!</h1></li>
                                  </ul>
                                 <p>
                                    <?php the_field('zagolovok'); ?>
                                 </p>
                              </div>
                              <div class="banner-btn generic-btn d-inline-block">
                                 <a href="tel:88007003977">8-800-700-3977</a>
                              </div>
                              <a href="#Contact" class="See-btn">Контакты >>></a>
                           </div>
                        </div>
                        <div class="col-lg-5 col-sm-12">
                           <div class="banner-right-con position-relative wow slideInRight" id="banner-right-con">
                              <figure class="mb-0">
                                 <img src="<?php bloginfo('template_url') ?>/assets/image/banner-right-img01.png" alt="banner-right-img" id="banner-right-img">
                              </figure>
                              <div class="best-award-con d-inline-block wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
                                 <div class="best-award-inner-con">
                                    <figure class="mb-0">
                                       <img src="<?php bloginfo('template_url') ?>/assets/image/cup-img.png" alt="cup-img" class="img-fluid">
                                    </figure>
                                    <div class="best-award-title">
                                       <p class="mb-0">При поддержке<br>
                                          правительства Москвы
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="best-award-con d-inline-block happy-con wow bounceInUp " data-wow-duration="1s" data-wow-delay="1s">
                                 <div class="best-award-inner-con text-center">
                                    <figure>
                                       <img src="<?php bloginfo('template_url') ?>/assets/image/admin-icon.png" alt="admin-icon" class="img-fluid">
                                    </figure>
                                    <div class="best-award-title d-inline-block ml-0">
                                       <p class="mb-0 d-inline-block">>4000</p>
                                       <p class="mb-0 d-inline-block">человек</p>
                                       <span class="d-block">Нашли у нас<br>
                                       Работу</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="cursor"></div>
                              <div class="cursor2"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--banner-end-->
               </div>
            </section>
         </div>
      </div>
      <!---header-and-banner-section-->
      <!-- service section -->
      <section class="w-100 float-left service-con padding-top padding-bottom position-relative" id="service-con" >
         <div class="container">
            <div class="service-inner-con position-relative">
               <div class="generic-title text-center">
                  <h6>Национальный центр развития технологий социальной поддержки и реабилитации</h6>
                  <h2 class="mb-0">Наши услуги</h2>
               </div>
               <div class="service-box wow fadeInUp">
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class="service-box-item">
                           <figure class="mb-0">
                              <img src="<?php bloginfo('template_url') ?>/assets/image/service-icon1.png" alt="service-icon" class="img-fluid">
                           </figure>
                           <div class="service-box-item-content">
                              <h4>Социальные услуги</h4>
                              <p>Социальные услуги направленные на поддержание и сохранение здоровья получателей социальных услуг 
                              путем организации ухода, оказания содействия в проведении оздоровительных мероприятий
                              </p>
                              
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="service-box-item">
                           <figure class="mb-0">
                              <img src="<?php bloginfo('template_url') ?>/assets/image/service-icon2.png" alt="service-icon" class="img-fluid">
                           </figure>
                           <div class="service-box-item-content">
                              <h4>Патронаж</h4>
                              <p>Услуги патронажных специалистов могут быть получены как в условиях стационара, так и на дому.
                               Вы можете выбрать наиболее удобный для Вас график пребывания нашего специалиста
                              </p>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-0">
                     <div class="col-lg-6 col-md-6">
                        <div class="service-box-item">
                           <figure class="mb-0">
                              <img src="<?php bloginfo('template_url') ?>/assets/image/service-icon3.png" alt="service-icon" class="img-fluid">
                           </figure>
                           <div class="service-box-item-content">
                              <h4>Реабилитация</h4>
                              <p>Команда специалистов, и разработанная ими индивидуальная лечебная и реабилитационная программа, 
                              имеет решающее значение в оказании помощи пациентам при восстановлении утраченных навыков
                              </p>
                              
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="service-box-item mb-0">
                           <figure class="mb-0">
                              <img src="<?php bloginfo('template_url') ?>/assets/image/service-icon4.png" alt="service-icon" class="img-fluid">
                           </figure>
                           <div class="service-box-item-content">
                              <h4>Медицинские услуги</h4>
                              <p>В условиях нашего центра предоставляются медицинские услуги, осуществляемые профессиональными и опытными медсестрами.
                              </p>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- service section -->
      <!-- skill section -->
      <section class="w-100 float-left skill-con padding-top padding-bottom position-relative" id="about-con">
         <div class="container">
            <div class="skill-inner-con position-relative">
               <div class="row">
                  <div class="col-lg-6 order-lg-0 order-2">
                     <div class="dov-photo text-center wow slideInLeft" >
                        <div class="row mb-4">
                           <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="skill-box">
                                <img src="<?php bloginfo('template_url') ?>/assets/image/office/off01.jpg" alt="service-icon" class="img-fluid">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="skill-box">
                               <img src="<?php bloginfo('template_url') ?>/assets/image/office/off02.jpg" alt="service-icon" class="img-fluid">                            
                              </div>
                           </div>
                        </div>
                        <div class="row service-skill-sttaf-con">
                           <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="skill-box">
                               <img src="<?php bloginfo('template_url') ?>/assets/image/office/off03.jpg" alt="service-icon" class="img-fluid">
                                 
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="skill-box">
                               <img src="<?php bloginfo('template_url') ?>/assets/image/office/off04.jpg" alt="service-icon" class="img-fluid">                               
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center">
                     <div class="skill-right-con wow slideInRight" >
                        <h6>О нас</h6>
                        <h2></h2>
                        <p>Наши специалисты обеспечат профессиональную медицинскую и социальную помощь по восстановлению и уходу за пожилыми и тяжелобольными пациентами 
                        с ограничением самообслуживания, ослабленными после тяжёлых заболеваний и операций, травм.
                        </p>
                        <p>Команда специалистов, и разработанная ими индивидуальная лечебная и реабилитационная программа, имеет решающее значение 
                        в оказании помощи пациентам при восстановлении утраченных навыков, результатом которой будет являться возможность улучшения 
                        качества жизни наших пациентов и их родственников.
                        </p>
                        
                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- skill section -->
      <!-- portfolio section -->
      <section class="w-100 float-left portfolio-con padding-top" id="Portfolio">
         <div class="container">
            <div class="generic-title text-center">
               <h6 class="text-white">Найди себя!</h6>
               <h2 class="mb-0 text-white">ВАКАНСИИ</h2>
            </div>
            <div class="text-center text-white">
              <p>В нашем центре Вы всегда можете найти работу по своей специальности и желаниям, а также получить новые знания и квалификацию.
              </p>
            </div>
         </div>
      </section>
      <!-- portfolio section -->
      <!-- portfolio section -->
      <section class="w-100 float-left portfolio-body-con">
         <div class="container">
            <div class="portfolio-img-con position-relative w-100 float-left wow fadeInUp" >
               <div class="filterDiv cars position-relative">
                  <a href="#" data-toggle="modal" data-target="#modal11">
                     <div class="portfolio-img position-relative">
                        <figure>
                           <img src="<?php bloginfo('template_url') ?>/assets/image/portfolio-img1.png" alt="portfolio-img1" class="img-fluid"> 
                        </figure>
                     </div>
                  </a>
                     <div class="portfolio-img-content text-left">
                        <div class="portfolio-img-title d-inline-block">
                           <h4>Сиделки</h4>
                           <p>Уход за больными на дому и в стационарах</p>
                        </div>
                     <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modal11">
                      <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i>
                  </a> 
                  </div>
                  
               </div>
               <div class="filterDiv colors fruits position-relative">
                  <a href="#" data-toggle="modal" data-target="#modal12">
                     <div class="portfolio-img position-relative">
                        <figure>
                           <img src="<?php bloginfo('template_url') ?>/assets/image/portfolio-img2.png" alt="portfolio-img1" class="img-fluid"> 
                        </figure>
                     </div>
                  </a>
                     <div class="portfolio-img-content text-left">
                        <div class="portfolio-img-title d-inline-block">
                           <h4 >Медсестра</h4>
                           <p>Проведение процедур в больницах и на дому</p>
                        </div>
                     <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modal12">
                     <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i>
                     </a>
                  </div>
                  
               </div>
               <div class="filterDiv cars position-relative">
                  <a href="#" data-toggle="modal" data-target="#modal13">
                     <div class="portfolio-img position-relative">
                        <figure>
                           <img src="<?php bloginfo('template_url') ?>/assets/image/portfolio-img3.png" alt="portfolio-img1" class="img-fluid"> 
                        </figure>
                     </div>
                  </a>
                     <div class="portfolio-img-content text-left">
                        <div class="portfolio-img-title d-inline-block">
                           <h4 >Старшая медсестра</h4>
                           <p >Работа в больницах Москвы и области</p>
                        </div>
                  <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modal13">
                  <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i></a>
                  </div>
                 
               </div>
               <div class="filterDiv colors position-relative">
                  <a href="#" data-toggle="modal" data-target="#modal14">
                     <div class="portfolio-img position-relative">
                        <figure>
                           <img src="<?php bloginfo('template_url') ?>/assets/image/portfolio-img4.png" alt="portfolio-img1" class="img-fluid"> 
                        </figure>
                     </div>
                  </a>
                     <div class="portfolio-img-content text-left">
                        <div class="portfolio-img-title d-inline-block">
                           <h4 >Санитарка</h4>
                           <p >Гибкий график, разные условия</p>
                        </div>
                  <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modal14">
                  <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i></a>
                  </div>
                  
               </div>
               <div class="filterDiv cars animals position-relative">
                  <a href="#" data-toggle="modal" data-target="#modal15">
                     <div class="portfolio-img position-relative">
                        <figure>
                           <img src="<?php bloginfo('template_url') ?>/assets/image/portfolio-img5.png" alt="portfolio-img1" class="img-fluid"> 
                        </figure>
                     </div>
                  </a>
                     <div class="portfolio-img-content text-left">
                        <div class="portfolio-img-title d-inline-block">
                           <h4 >Младший медицинский персонал</h4>
                           <p >Всегда требуются фельдшеры, уборщики и разнорабочие в больницу</p>
                        </div>
                  <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modal15">
                  <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i></a>
                  </div>
                  
               </div>
            </div>
         </div>
      </section>
      <!-- portfolio section -->
      <!-- tastimonials section -->
      <section class="w-100 float-left padding-top padding-bottom tastimonials-con position-relative text-lg-left text-center" id="testimonials">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="tastimonials-left-con wow slideInLeft" >
                     <figure class="mb-0">
                        <img src="<?php bloginfo('template_url') ?>/assets/image/tastimonials-img.png" alt="tastimonials-img" class="img-fluid">
                     </figure>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div id="carouselExampleControls" class="carousel slide wow slideInRight" data-ride="carousel" >
                     <div class="carousel-inner">
<?php
   $my_posts = get_posts( array(
	'category_name'    => 'reviews',
	'orderby'     => 'date',
	'order'       => 'DESC',
	'post_type'   => 'post',
	'suppress_filters' => true, 
) );

global $post;

foreach( $my_posts as $post ){
	setup_postdata( $post );

   ?>
   <div class="carousel-item 
   <?php 
   if(($post -> ID) == '62') {echo 'active';}
   ?>
   ">
                           <div class="testimonials-content">
                              <h6>Отзывы наших клиентов</h6>
                              <h2><?php the_field('zagolovok'); ?></h2>
                              <figure class="mb-0">
                                 <img src="<?php bloginfo('template_url') ?>/assets/image/comma-icon.png" alt="comma-icon" class="img-fluid">
                              </figure>
                              <div class="testimonials-inner-content">
                                 <p><?php the_content(); ?>
                                 </p>
                                 <span class="d-block auther-name"><?php the_title( ); ?></span>
                                 <span class="d-block"><?php the_field('data'); ?></span>
                              </div>
                           </div>
                        </div>
   <?php
}

wp_reset_postdata(); 
?>
                        
                        
                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                     <i class="fas fa-arrow-left d-flex align-items-center justify-content-center"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                     <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- tastimonials section -->
      <!-- blog section -->
      <section class="w-100 float-left blog-con padding-top padding-bottom position-relative" id="blog">
         <div class="container">
            <div class="blog-inner-con position-relative">
               <div class="generic-title text-center">
                  <h6>Наши партнеры</h6>
                  <h2 class="mb-0">Государственные и частные медучреждения</h2>
               </div>
             <div class="blog-box wow fadeInUp" >
                  <div class="partsld">


                  <?php
   $my_posts = get_posts( array(
	'category_name'    => 'partners',
   'numberposts'  => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'post_type'   => 'post',
	'suppress_filters' => true, 
) );

global $post;

foreach( $my_posts as $post ){
	setup_postdata( $post );

   ?>
                  <div class="blog-box-item">
                           <div class="blog-img">
                                 <figure class="mb-0">
                                 <?php 
                                 $title = get_the_title(  );
                                 the_post_thumbnail( 'full', array(
                                    'class' => "img-fluid",
                                    'alt'   => $title . '- фото',
                                 ) ); ?>
                                 </figure>
                           </div>
                           <div class="blog-content">
                              <div class="blog-auteher-title">
                                 <span><?php the_field( 'city' ); ?></span>                                 
                              </div>
                                 <h4><?php the_title(  ); ?></h4>
                              <p><?php
                                    $content = get_the_content();
                                    $trimmed_content = wp_trim_words( $content, 40 );
                                    echo $trimmed_content;
                                    ?></p>
                           </div>
                  </div> 
                    
     <?php
}
wp_reset_postdata(  );
     ?>                
                        
                  </div>
                
               </div>
            </div>
         </div>
      </section>
      <!-- blog section -->
      <!-- form section -->
      <section class="w-100 float-left form-main-con padding-top padding-bottom" id="Contact">
         <div class="container">
            <div class="form-main-inner-con position-relative">
               <div class="generic-title text-center">
                  <h6>Контакты</h6>
                  <h2 class="mb-0">Обратная связь
                  </h2>
               </div>
               <div class="row">
                  <div class="col-lg-4 order-lg-0 order-2">
                     <div class="contact-information position-relative wow slideInLeft" >
                        <ul class="list-unstyled">
                           <li>
                              <figure class="mb-0 d-flex align-items-center justify-content-center">
                                 <img src="<?php bloginfo('template_url') ?>/assets/image/location-icon.png" alt="location-icon" class="img-fluid">
                              </figure>
                              <div class="contact-information-content">
                                 <h5>Адрес офиса:</h5>
                                 <p class="mb-0">г.Москва<br>Алтуфьевское ш., д.40Г
                                 </p>
                              </div>
                           </li>
                           <li>
                              <figure class="mb-0 d-flex align-items-center justify-content-center">
                                 <img src="<?php bloginfo('template_url') ?>/assets/image/message-icon.png" alt="message-icon" class="img-fluid">
                              </figure>
                              <div class="contact-information-content">
                                 <h5>Email:</h5>
                                 <p class="mb-0">doveriecenter2023@yandex.ru</p>
                              </div>
                           </li>
                           <li class="mb-0">
                              <figure class="mb-0 d-flex align-items-center justify-content-center">
                                 <img src="<?php bloginfo('template_url') ?>/assets/image/phone-icon.png" alt="phone-icon" class="img-fluid">
                              </figure>
                              <div class="contact-information-content">
                                 <h5>Телефоны:</h5>
                                 <p class="mb-0">8 (800) 700-39-77</p>
                                 <p class="mb-0">Бесплатный звонок</p>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="contact-form wow slideInRight text-lg-left text-center">
                    <?php echo do_shortcode( '[contact-form-7 id="3c18d3d" title="Контактная форма 1"]' ); ?>
                    </div> 
                     
                    <!-- <form class="contact-form wow slideInRight text-lg-left text-center" >
                        <div class="row">
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-0">    
                                 <input type="text"  placeholder="Имя" name="name" id="name"> 
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-0">
                                 <input type="email"  placeholder="Email">
                                 <small id="emailHelp" class="form-text text-muted"></small>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-0">    
                                 <input type="tel"  placeholder="Телефон"> 
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-0">    
                                 <input type="text"  placeholder="Тема сообщения"> 
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class=" form-group mb-0">    
                                 <textarea  placeholder="Сообщение" rows="3" name="comments" id="comments"></textarea>
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="appointment-btn">Отправить</button>
                     </form> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- form section -->
      <!-- weight footer section -->
      <div class="w-100 float-left weight-footer-con position-relative">
         <div class="container">
            <div class="weight-footer-content text-center wow fadeInUp" >
               <figure class="">
                  <img src="<?php bloginfo('template_url') ?>/assets/image/logo.png" alt="footer-logo" class="img-fluid">
               </figure>
               <div class="footer-navbar">
                  <ul class="list-unstyled">
                     <li class="d-inline-block"><a href="#about-con">О нас</a></li>
                     <li class="d-inline-block"><a href="#service-con">Наши услуги</a></li>
                     <li class="d-inline-block"><a href="#Portfolio">Вакансии</a></li>
                     <li class="d-inline-block"><a href="#testimonials">Партнеры</a></li>
                     <li class="d-inline-block pr-0"><a href="#Contact">Контакты</a></li>
                  </ul>
               </div>
               <div class="footer-social-icon">
                  <ul class="mb-0">
                     <li class="d-inline-block">
                        <a href="https://vk.com/public219931913"><i class="fab fa-vk d-flex align-items-center justify-content-center"></i></a>
                     </li>
                     <li class="d-inline-block">
                        <a href="https://ok.ru/group/70000002371283"><i class="fab fa-odnoklassniki d-flex align-items-center justify-content-center"></i></a>
                     </li>
                     <li class="d-inline-block">
                        <a href="https://t.me/sosrabotamoskva"><i class="fab fa-telegram d-flex align-items-center justify-content-center"></i></a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="copy-right-content text-center">
               <p class="mb-0">Copyright 2024 АНО Доверие ОГРН: 1167700064839
ИНН: 7724382124 | All Rights Reserved.</p>
            </div>
         </div>
      </div>
      <a id="button"></a>
      <div id="modal11" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <figure class="mb-0">
                     <img src="<?php bloginfo('template_url') ?>/assets/image/modal11.jpg" alt="portfolio-model-img1" class="img-fluid">
                  </figure>
                  <h4>Сиделки</h4>
                  <p class="mb-md-4 mb-2">
                  Патронажный специалист является одной из самых сложных профессий в мире, и требует самоотверженности и приверженности к работе. 
                  Патронажные специалисты обеспечивают непрерывный эффективный уход в условиях стационара, являясь основной точкой опоры для пациентов. 
                  Они играют ключевую роль в обеспечении эффективности проводимого лечения и безопасности пациентов.</p>
                  <p>
                  Патронажный специалист в настоящее время необходимое звено в системе здравоохранения с учетом современных реалий финансирования 
                  и состояния государственной медицины.
                  </p>
                  <p class="mb-0">
                  Принцип нашей работы — индивидуальный и профессиональный подход к каждому пациенту. Это гарантия того, что во время отсутствия родственников, 
                  с пациентом рядом всегда будет человек, способный помочь в любой ситуации.
                  </p>  
               </div>
            </div>
         </div>
      </div>
      <div id="modal12" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <figure class="mb-0">
                     <img src="<?php bloginfo('template_url') ?>/assets/image/modal12.jpg" alt="portfolio-model-img1" class="img-fluid">
                  </figure>
                  <h4>Приходящая медсестра или медсестра в стационар</h4>
                  <p class="mb-md-4 mb-2">
                  Наши специалисты на дому, амбулаторно или в стационарах осуществляют</p>
                  <ul class="list-unstyled model-list mb-md-3 mb-2">
                     <li><i class="fas fa-check-circle"></i>выполнение внутривенных и внутримышечных инъекций;</li>
                    <li><i class="fas fa-check-circle"></i>постановка капельниц;</li>
                    <li><i class="fas fa-check-circle"></i>установка и замена катетеров;</li>
                    <li><i class="fas fa-check-circle"></i>установка и замена калоприемников;</li>
                    <li><i class="fas fa-check-circle"></i>постановка и замена назогастрального зонда;</li>
                    <li><i class="fas fa-check-circle"></i>все виды перевязок и обработка послеоперационных ран;</li>
                    <li><i class="fas fa-check-circle"></i>уход и лечение повреждений кожных покровов;</li>
                    <li><i class="fas fa-check-circle"></i>проведение очистительных клизм;</li>
                    <li><i class="fas fa-check-circle"></i>санация и смена трахеостомической трубки и др.</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="modal13" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <figure class="mb-0">
                     <img src="<?php bloginfo('template_url') ?>/assets/image/modal13.jpg" alt="portfolio-model-img1" class="img-fluid">
                  </figure>
                  <h4>Старшая медсестра в Городскую Клиническую Больницу</h4>
                  <h3 class="mb-md-4 mb-2">Обязанности:</h3>
                  <ul class="list-unstyled model-list mb-md-3 mb-2">
                     <li><i class="fas fa-check-circle"></i> Организация и контроль работы среднего и младшего медицинского персонала.</li>
                     <li><i class="fas fa-check-circle"></i> Организация проведения производственного контроля.</li>
                     <li><i class="fas fa-check-circle"></i> Ведение учетной и отчетной мед. документации.</li>
                     <li><i class="fas fa-check-circle"></i> Закупка, хранение, учет, выдача медикаментов и расходного материала. Работа с системой "Честный знак".</li>
                     <li><i class="fas fa-check-circle"></i> Составление графиков работы медсестёр.</li>
                     <li><i class="fas fa-check-circle"></i> Организация и контроль сбора и утилизации медицинских отходов.</li>
                     <li><i class="fas fa-check-circle"></i> Контроль СЭР. Работа с надзорными органами</li>
                     <li><i class="fas fa-check-circle"></i> Осуществление подачи заявок на ремонт и ТО медицинского оборудования.</li>
                     <li><i class="fas fa-check-circle"></i> Контроль проведения периодических медицинских осмотров сотрудников.</li>
                     <li><i class="fas fa-check-circle"></i> Обучение среднего медицинского персонала на рабочих местах.</li>
                     <li><i class="fas fa-check-circle"></i> Оформление листов нетрудоспособности.</li>
                  </ul>
                  <h3>Требования:</h3>
                  <p class="mb-0">Опыт работы главной (старшей) медицинской сестрой не менее трёх лет. Наличие действующих сертификатов</p>  
               </div>
            </div>
         </div>
      </div>
      <div id="modal14" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <figure class="mb-0">
                     <img src="<?php bloginfo('template_url') ?>/assets/image/modal14.jpg" alt="portfolio-model-img1" class="img-fluid">
                  </figure>
                  <h4>Санитарки в Москве и Московской области</h4>
                  <h5 class="mb-md-4 mb-2">Обязанности:</h5>
                  <ul class="list-unstyled model-list mb-md-3 mb-2">
                     <li><i class="fas fa-check-circle"></i> Уборка этажей, кабинетов поликлиники, вынос мусора</li>
                     <li><i class="fas fa-check-circle"></i> Встреча пациентов</li>
                     <li><i class="fas fa-check-circle"></i> Выполнение поручений руководителя ,в рамках должностных обязанностей</li>
                     <li><i class="fas fa-check-circle"></i> Уход за больными</li>
                  </ul>  
               </div>
            </div>
         </div>
      </div>
      <div id="modal15" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <figure class="mb-0">
                     <img src="<?php bloginfo('template_url') ?>/assets/image/modal15.jpg" alt="portfolio-model-img1" class="img-fluid">
                  </figure>
                  <h4>Уборщики, водители, санитары, разнорабочие</h4>
                  <p class="mb-md-4 mb-2">
                  Стабильная работа в государственных и частных учреждениях Москвы и Московской области.
                  </p>  
               </div>
            </div>
         </div>
      </div>
     
      <!-- weight footer section -->
      <?php wp_footer(  ); ?>
      <script>
         new WOW().init();
      </script>
      
      <script>
         filterSelection("all")
         function filterSelection(c) {
         var x, i;
         x = document.getElementsByClassName("filterDiv");
         if (c == "all") c = "";
         for (i = 0; i < x.length; i++) {
         w3RemoveClass(x[i], "show");
         if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
         }
         }
         
         function w3AddClass(element, name) {
         var i, arr1, arr2;
         arr1 = element.className.split(" ");
         arr2 = name.split(" ");
         for (i = 0; i < arr2.length; i++) {
         if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
         }
         }
         
         function w3RemoveClass(element, name) {
         var i, arr1, arr2;
         arr1 = element.className.split(" ");
         arr2 = name.split(" ");
         for (i = 0; i < arr2.length; i++) {
         while (arr1.indexOf(arr2[i]) > -1) {
         arr1.splice(arr1.indexOf(arr2[i]), 1);     
         }
         }
         element.className = arr1.join(" ");
         }
         
        
      </script>
      <script>
         var btn = $('#button');
         
         $(window).scroll(function() {
         if ($(window).scrollTop() > 300) {
         btn.addClass('show');
         } else {
         btn.removeClass('show');
         }
         });
         
         btn.on('click', function(e) {
         e.preventDefault();
         $('html, body').animate({scrollTop:0}, '300');
         });
         
      </script>
      <script>
         $(window).scroll(function(){
         
         if ($(window).scrollTop() >= 113) {
         
         $('header').addClass('fixed-header');
         $('.banner-main-con').addClass('banner-main-con2');
         
         }
         
         else {
         
         $('header').removeClass('fixed-header');
         $('.banner-main-con').removeClass('banner-main-con2');
         
         }
         
         });
         
      </script>
   <script>
document.querySelectorAll('.nav-item a').forEach(function(link, index){

link.addEventListener('click', function() {

  if(this.classList.contains('is-active')) {

    this.classList.remove('is-active');

  } else {

    const activeLink = document.querySelector('a.is-active'); // **

    if (activeLink) {                                         // **

        activeLink.classList.remove('is-active');             // **

    }                                                         // **

    this.classList.add('is-active');

  }

});

});
   </script>
    
   </body>
</html>
 