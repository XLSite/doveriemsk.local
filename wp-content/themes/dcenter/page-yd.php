<?php get_header( ); ?> 

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
                                 <a class="nav-link p-0" href="#job">Вакансии</a>
                            </li> 
                            <li class="nav-item">
                                 <a class="nav-link p-0" href="#contacts">Контакты</a>
                            </li>                                                           
                           </ul>
                           <div class="d-inline-block contact callback">
                              <a href="#">Обратный звонок</a>
                           </div>
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
                                    <h2>
                                    Свежие вакансии в медучереждениях Москвы и Московской области 
                                    от прямых работодателей!</h2>
                                 </p>
                              </div>
                              <div class="banner-btn generic-btn d-inline-block callback">
                                 <a href="#">Оставить заявку</a>
                              </div>
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
      <section class="w-100 float-left service-con padding-top padding-bottom position-relative" id="job" >
         <div class="container">
            <div class="service-inner-con position-relative">
               <div class="generic-title text-center">
                  <h6>В Государственную Клиническую Больницу города Жуковский</h6>
                  <h2 class="mb-0">Срочно требуются!</h2>
               </div>
               <div class="service-box wow fadeInUp">
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class="service-box-item">
                           <figure class="mb-0">
                              <img src="<?php bloginfo('template_url') ?>/assets/image/service-icon1.png" alt="service-icon" class="img-fluid">
                           </figure>
                           <div class="service-box-item-content">
                              <h4>Буфетчицы</h4>
                              <p>
                              <ul>
                                <li>пopциoниpование сaлатoв, напитков, нapeзкa xлeбa;</li>
                                <li>пoдгoтoвкa пoсуды к раздaчe;</li>
                                <li>участие в укомплектoвание термоподноcа;</li>
                                <li>мытье поcуды в поcудомочнoй мaшинe.</li>
                              </ul></p>
                              
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="service-box-item">
                           <figure class="mb-0">
                              <img src="<?php bloginfo('template_url') ?>/assets/image/service-icon2.png" alt="service-icon" class="img-fluid">
                           </figure>
                           <div class="service-box-item-content">
                              <h4>Условия</h4>
                              <p>
                                <ul>
                                    <li>Режим работы: Сменный, 2/2</li>
                                    <li>Опыт работы: можно Без опыта</li>
                                    <li>Способ оформления: Трудовой договор, Договор ГПХ с физлицом</li>
                                    <li>В том числе для кандидатов старше 45 лет, Для студентов, Для пенсионеров</li>
                                </ul>
                            </p>
                              
                           </div>
                        </div>
                     </div>
                  </div>                  
               </div>
               <div class="generic-title text-center">
                  <h2 class="mb-0">Звоните нам! по телефону <a href="tel:88007003977">8-800-700-3977</a> (Звонок БЕСПЛАТНЫЙ) или </h2>
                  <div class="banner-btn generic-btn d-inline-block callback">
                                 <a href="#">Оставьте Заявку</a>
                              </div>
               </div>
            </div>
         </div>
      </section>
      <!-- service section -->
      

      <!-- form section -->
      <section class="w-100 float-left form-main-con padding-top padding-bottom" id="contacts">
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
    
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- form section -->
      
      
      
      
     
        
<?php get_footer(); ?>