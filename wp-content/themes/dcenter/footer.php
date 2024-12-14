   <!-- weight footer section -->
   <div class="w-100 float-left weight-footer-con position-relative">
         <div class="container">
            <div class="weight-footer-content text-center wow fadeInUp" >
               <figure class="">
                  <img src="<?php bloginfo('template_url') ?>/assets/image/logo.png" alt="footer-logo" class="img-fluid">
               </figure>
               <div class="footer-navbar">
                  <ul class="list-unstyled">                     
                     <li class="d-inline-block"><a href="#job">Вакансии</a></li>
                     <li class="d-inline-block pr-0"><a href="#contacts">Контакты</a></li>
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
 