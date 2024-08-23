
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
    
    date_default_timezone_set('Asia/Colombo'); 
    setcookie("PHPSESSID", "hrdl5ujs6985l6g72jtrften00", [
        'expires' => time() + 3600,
        'path' => '/',
        'domain' => '',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Lax' 
    ]);

    header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');

    header("X-Frame-Options: DENY");

    header("X-Content-Type-Options: nosniff");

    header("Content-Security-Policy: frame-ancestors 'self'");
    ?>


    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K1KCZVJTWP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-K1KCZVJTWP');
    </script>

<!-- Primary Meta Tags -->
<meta name="title" content="Cambrians' Media & Broadcasting Unit" />
<meta name="description" content="Discover excellence in media education at CMBU, Prince of Wales College. Renowned for diverse expertise in announcing, graphics, news reporting, and more. Proud organizers of Sri Lanka's premier Sadhbhashana Media Competitions." />
<meta name="keywords" content="cmbu, best school media, best school media in sri lanka, sadbhashana, prince of wales media, pwc media, cambrians media, wales media" />
<meta name="author" content="CMBU" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://princeofwales.edu.lk/cmbu/" />
<meta property="og:title" content="Cambrians' Media & Broadcasting Unit" />
<meta property="og:description" content="Discover excellence in media education at CMBU, Prince of Wales College. Renowned for diverse expertise in announcing, graphics, news reporting, and more. Proud organizers of Sri Lanka's premier Sadhbhashana Media Competitions." />
<meta property="og:image" content="https://princeofwales.edu.lk/cmbu/images/cmbu-header.webp" />

<!-- Twitter / WA / TG -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://princeofwales.edu.lk/cmbu/" />
<meta property="twitter:title" content="Cambrians' Media & Broadcasting Unit" />
<meta property="twitter:description" content="Discover excellence in media education at CMBU, Prince of Wales College. Renowned for diverse expertise in announcing, graphics, news reporting, and more. Proud organizers of Sri Lanka's premier Sadhbhashana Media Competitions." />
<meta property="twitter:image" content="https://princeofwales.edu.lk/cmbu/images/cmbu-header.webp" />
   
<title>Cambrians' Media & Broadcasting Unit</title>

   <link rel="icon" type="image/png" href="images/logo red.webp">

    <link rel="stylesheet" href="css/styles.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
</head>
<body>

    <div id="all">

        <div class="cursor"></div>

    <!--loader-->
        <div id="loader">
            <span class="color">CMBU Live</span>
        </div>
    <!--loader-end-->


        <div id="breaker">
        </div>
        <div id="breaker-two">
        </div>

        <!--Main-Section-->
        <!--Navigator-fullscreen-->
        <div id="navigation-content">
            <div class="logo">
                <img src="images/logo red.webp" alt="logo">
            </div>
            <div class="navigation-close">
                <span class="close-first"></span>
                <span class="close-second"></span>
            </div>
            <div class="navigation-links">
                <a href="#" data-text="HOME" id="home-link" >HOME</a>
                <a href="#" data-text="SADBHASHANA" id="portfolio-link" >SADBHASHANA</a>
                <a href="#" data-text="ABOUT" id="about-link" >ABOUT</a>
                <a href="#" data-text="CONTACT" id="contact-link" >CONTACT</a>
                <br><br><br><br>
                <a href="#" data-text="EXIT" id="goBackLink">EXIT</a>

            </div>
        </div>
        <!--Navigator-Fullscreen END-->

        <script>
        document.getElementById("goBackLink").addEventListener("click", function(event) {
            event.preventDefault(); 
            window.history.back(); 
        });
    </script>


          <!--Home Page-->
        <!--Menubar-->
        <div id="navigation-bar">
            <img src="images/logo red.webp" alt="logo">
            <div class="menubar">
                <span class="first-span"></span>
                <span class="second-span"></span>
                <span class="third-span"></span>
            </div>
        </div>
        <!--Menubar End-->
          <!--Header-->
        <div id="header">
            <div id="particles"></div>
              <!--Social Media Links-->
            <div class="social-media-links">
               <a href="https://www.instagram.com/cmbulive/" target="_blank"><img src="images/instagram logo.webp" class="social-media" alt="instagram-logo"></a>
                <a href="https://www.facebook.com/cambrians.media" target="_blank"><img src="images/facebook logo.webp" class="social-media" alt="facebook-logo"></a>
                <a href="https://www.youtube.com/cmbulive" target="_blank"><img src="images/youtube logo.webp" class="social-media" alt="linkedin-logo"></a>
            
            </div>
            <!--Social Media Links end-->
            <div class="header-content">
                <div class="header-content-box">
                <div class="secondline">Welcome to</div>
                <div class="firstline"><span class="color">Cambrians' Media </span>and Broadcasting Unit</div>
                <div class="secondline">
            <span class="txt-rotate color" data-period="1200"data-rotate='[ " Announcing", " Technical", " Graphics Designing", " Dubbing"," News"," Photography"," Videography" ]'></span>
            <span class="slash">|</span>
        </div>
                    <div class="contact">
                <a href="Mailto:cmbulive@princeofwales.edu.lk"><img src="images/mail.webp" alt="email-pic" class="contactpic" target="_blank"></a>
                <a href="Tel:+94112645628"><img src="images/call.webp" alt="phone-pic" class="contactpic" target="_blank"></a>
                    </div>    
            </div>
            </div>
            <!--header image-->
            <div class="header-image">
            <img src="images/home bg.jpg" alt="logo">
            </div>
            <!--header image end-->
        </div>
           <!--Header End-->
        <!--HomePage End-->
        <!--Main-Section End-->




        <!--about-->
        <div id="about">

            <!--about content-->
            <div id="about-content">
                <div class="about-header">
                    About <span class="color">Us</span>
                    <span class ="header-caption">Get to Know <span class="color"> About us.</span></span>
                </div>
                <div class="about-main">
            <div class="about-first-paragraph wow">
            <!--about description-->
               <span class="about-first-line">
                    Media Unit of 
                    <span class="color">Prince of Wales' College</span>
                     Moratuwa </span>
                     <br>
               <span class="about-second-line">The Cambrians' Media & Broadcasting Unit (CMBU) at Prince of Wales College, rebranded in 2012, is an exemplary institution renowned for its diverse expertise in the fields of Announcing, Technical Operations, Graphics Designing, Dubbing, News Reporting, Photography, and Documentary Production. CMBU's commitment to excellence in media and Broadcasting education is highlighted by its role as the organizer of the prestigious Sadhbhashana Media Competitions, the largest and most influential media competition in Sri Lanka.</span>
            </div>
            <!--about picture-->
            <div class="about-img">
                <img src="images/about.webp" alt="about">
            </div>
            </div>
    
            </div>
            <!--services start-->
            <div id="services">
            <!--services header-->
                    <div class="services-heading wow">
                        <span class="color">CMBU</span> Categories
                    </div>
            <!--services header end-->
            <!--services content-->
                    <div class="services-content">
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/announcing.webp" alt="announcing">
                               </div>
                               <div class="service-description">
                                <h2>Announcing</h2>
                                <p>CMBU's announcers are the charismatic voices that bring information to life, shaping confident and engaging communicators for the dynamic world of media and Broadcasting.</p>
                               </div>
                           </div>
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/technical.webp" alt="technical">
                               </div>
                               <div class="service-description">
                                <h2>Technical</h2>
                                <p>CMBU's technicians are the backbone of seamless media operations, equipped with the technical expertise to ensure flawless broadcasts and productions in the world of media and Broadcasting.</p>
                               </div>
                           </div>
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/graphics.webp" alt="graphics">
                               </div>
                               <div class="service-description">
                                <h2>Graphics Designing</h2>
                                <p>At CMBU, aspiring graphics designers are nurtured to unleash their creativity, crafting visually captivating content for the dynamic realm of media and Broadcasting.</p>
                               </div>
                           </div>
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/dubbing.webp" alt="dubbing">
                               </div>
                               <div class="service-description">
                                <h2>Dubbing</h2>
                                <p>CMBU's dubbing crew training program hones the art of voice synchronization and performance, preparing students for a career in delivering seamless audiovisual experiences in media and Broadcasting.</p>
                               </div>
                           </div>
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/news.webp" alt="news">
                               </div>
                               <div class="service-description">
                                <h2>News</h2>
                                <p>In CMBU, news editors are honed to be meticulous storytellers, shaping the narratives that inform and captivate audiences in the fast-paced world of journalism and media.</p>
                               </div>
                           </div>
                           <div class="service-two service wow">
                               <div class="service-img">
                               <img src="images/photography.webp" alt="photography">
                               </div>
                               <div class="service-description">
                                <h2>Photography</h2>
                                <p>CMBU's photography program empowers students to capture moments and convey stories through the lens, shaping skilled visual storytellers for the world of media and Broadcasting.</p>
                               </div>
                           </div>
                           <div class="service-three service wow">
                            <div class="service-img">
                               <img src="images/videography.webp" alt="videography">
                            </div>
                            <div class="service-description">
                                <h2>Videography</h2>
                                <p>At CMBU, videographers are trained to master the art of capturing and crafting compelling visual narratives, preparing them for success in the dynamic field of media and Broadcasting.</p>
                            </div>
                        </div>
                    </div>
            </div>
            <!--services content end-->
            <!--services end-->
            

            
        </div>
        <!--about end-->

        <!--sadbhashana-->
        <div id="portfolio">
            <div class="portfolio-header"> <span class="color"> Sadbhashana </span>
            <span class ="header-caption"> Sri Lanka's Biggest <span class="color"> School Media Competition</span></span></div>
             <div id="portfolio-content">
                 <div class="portfolio portfolio-second">
                    <div class="portfolio-image">
                        <img src="images/21comp.webp" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'21 - Competition (Online)</h2>
                        <p>Sadhbhashana'21, conducted online like its predecessor in 2020 due to the ongoing COVID-19 situation, maintained its commitment to promoting and recognizing excellence in media and Broadcasting despite the challenging circumstances.</p>
                    </div>
                </div>
             
                <div class="portfolio portfolio-third">
                    <div class="portfolio-image">
                        <img src="images/20comp.webp" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'20 - Competition (Online)</h2>
                        <p>Sadhbhashana'20, held as an online competition due to COVID-19, continued to be a platform for showcasing media and Broadcasting talents, adapting to the changing circumstances and fostering excellence despite the challenges posed by the pandemic.</p>
                   </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/19day-cmbu.webp" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'19 - Day</h2>
                        <p>Sadhbhashana'19 was a dynamic school media competition organized by CMBU in 2019, where students from various schools displayed their media and Broadcasting talents, fostering excellence in multiple creative disciplines.</p>
                    </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/comp-18-cmbu.webp" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'18 - Competition</h2>
                        <p>Sadhbhashana'18 was an exciting school media competition organized by CMBU in 2018, providing a platform for aspiring young journalists and media enthusiasts to showcase their talents and compete in various categories.</p>
                    </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/day17-cmbu.webp" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'17 - Media Day</h2>
                        <p>Sadhbhashana'17 was a vibrant school media day organized by CMBU in 2017, showcasing media talents and fostering excellence in Sri Lanka's budding journalists and broadcasters.</p>
                   </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/day17-cmbu.webp" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'17 - Competition</h2>
                        <p>Sadhbhashana'17 was a notable school media competition organized by CMBU, showcasing the creative talents and innovation of young media enthusiasts in Sri Lanka.</p>
            
                    </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/16comp.webp" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'16 - Competition</h2>
                        <p>Sadhbhashana'16 was a notable school media competition organized by CMBU, showcasing the creative talents and innovation of young media enthusiasts in Sri Lanka.</p>
            
                    </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/15day.webp" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'15 - Day</h2>
                        <p>Sadhbhashana'15 was a notable school media competition organized by CMBU, showcasing the creative talents and innovation of young media enthusiasts in Sri Lanka.</p>
            
                    </div>
                </div>
            </div>
            
             </div>
        <!--portfolio end-->
        
        <!--contact-->
     <div id="contact">
         <div class="contact-header">Contact <span class="color"> Us</span>
        <div class="contact-header-caption"> <span class="color"> Get</span> In Touch.</div></div>
        <div class="contact-content">
            <!--Contact form-->
             <div class="contact-form">

                 <form id="myForm" action="#">
                    <div class="input-line">
                        <input  id="name" type="text" placeholder="Name" class="input-name">
                        <input id="email" type="email" placeholder="Email"  class="input-name">
                    </div>
                    <input type="text" id="subject" placeholder="subject" class="input-subject">
                    <textarea id ="body" class="input-textarea" placeholder="message"></textarea>
                    <button type="button" id ="submit" value="send">Submit</button>
                 </form>
               
             </div>
            <!--Contact form-->
            <!--Contact information-->
             <div class="contact-info">
                <div class="contact-info-content">
                </div>
                <div class="contect-info-content-line">
                  <img src="./images/icon-location.webp" class="icon" alt="location-icon">
                  <div class="contact-info-icon-text">
                      <h6>Address</h6>
                      <p>2AD, Galle Road, Rawathawaththa, Moratuwa</p>
                </div>
              </div>
              <div class="contect-info-content-line">
                  <img src="./images/icon-phone.webp" class="icon" alt="phone-icon">
                  <div class="contact-info-icon-text">
                      <h6>Call</h6>
                      <p>0112 645 628</p>
                </div>
              </div>
              
              <div class="contect-info-content-line">
                  <img src="./images/icon-email.webp" class="icon" alt="email-icon">
                  <div class="contact-info-icon-text">
                      <h6>Email</h6>
                      <p>cmbulive@princeofwales.edu.lk</p>
                </div>
              </div>
                </div>
            <!--Contact information end-->
           </div>
        </div>
                   

              
     </div>
        <!--contact end-->
    </div>
    <!--all the divisions-->
    <script src="js/jquery.min.js"></script>
    <script src="js/index.js"></script>


</body>
</html>