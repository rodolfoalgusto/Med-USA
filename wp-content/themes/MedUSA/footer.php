 <?php
$img_url = get_stylesheet_directory_uri() . '/img';
?>

 <footer class="footer ">
     <div class="uk-container caixa-footer">

            <!-- LOGO , CONTACTS AND RD -->
         <div class="uk-container box">
         <a href="home"><img src="<?= $img_url; ?>/logo-medusa.svg" alt="logo"></a>
             <div class=" contato">
                 <p>9825 5 500 W</p>
                 <p>Sandy. UT 84070</p>
                 <p>Support: 801.352.9500</p>
                 <p>Sales: 855.303.8806</p>
                 <p>info@medusarcm.com</p>
             </div>

             <div class="uk-container uk-flex " style="padding-top: 10px">
                 <a class="" href="Twitter"><img src="<?= $img_url; ?>/twitter.svg" alt=""></a>
                 <a class="uk-margin-left" href="instagram"><img src="<?= $img_url; ?>/facebook.svg" alt=""></a>
                 <a class="uk-margin-left" href="https://www.linkedin.com/in/rodolfo-webdesigner/"><img src="<?= $img_url; ?>/linkedin.svg" alt=""></a>
             </div>
         </div>

         <!-- ABOUT AND CASE STUDIES-->
         <div>
             <div id="about-case">
                 <ul class="case links " >
                     <li class=" "><a href="sobre">About MedUSA</a></li>
                     <li class=" "><a href="service">Service</a></li>
                     <li class=" "><a href="blog">Blog</a></li>
                 </ul>
             </div>

             <div >
                 <ul class=" links case link">
                     <li class=" "><a href="#">Case Studies</a></li>
                     <li class=" "><a href="#">Software</a></li>
                     <li class=" "><a href="#">Contact Us</a></li>
                 </ul>
             </div>
         </div>
        
                        <!-- PACKAGES -->
         <div>
             <ul class="uk-link links altura">
                 <li>Packages:</li></br>
                 <li class="uk-margin-small-bottom"><a href="#"></a>Gold</li>
                 <li class="uk-margin-small-bottom"><a href="#"></a>Platinum</li>
                 <li class="uk-margin-small-bottom"><a href="#"></a>Silver</li>
             </ul>
         </div>


 </footer>

                        <!--POLITCS  -->
 <div class=" copy uk-flex uk-flex-between">
     <div class="uk-container uk-flex">
         <p>&#0169 2021 MedUSA | All right reserved</p>
     </div>

     <div class="uk-container uk-flex">
         <p>Privacy Policy | Terms of Service</p>
     </div>
 </div> -->





 <script></script>

 <!-- inicio wordpress Footer -->
 <?php wp_footer(); ?>
 <!-- fim wordpress Footer -->
 </body>

 </html>