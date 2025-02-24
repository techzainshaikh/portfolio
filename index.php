<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zario portfolio</title>
    <link rel="icon" type="image/x-icon" href="assets/images/log.jpg">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- <link rel="stylesheet" href="assets/css/owl.theme.default.min.css"> -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/smooth-scrollbar.css">
    <link rel="stylesheet" href="assets/css/lightbox.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body class="home1-page">

    <video class="body-overlay" muted="" autoplay="" loop="">
        <source src="assets/images/video1.mp4" type="video/mp4">
    </video>

    <div class="page-loader">
        <div class="bounceball"></div>
    </div>

    <span class="icon-menu">
        <span class="bar"></span>
        <span class="bar"></span>
    </span>

    <div class="global-color">
        <span class="setting-toggle">
            <i class="las la-cog"></i>
        </span>
        <div class="inner">
            <div class="overlay"></div>
            <div class="global-color-option">
                <span class="close-settings">
                    <i class="las la-times"></i>
                </span>
                <h2>Configuration</h2>
                <div class="global-color-option-inner">
                    <p>Colors</p>
                    <div class="color-boxed">
                        <a href="#"  class="clr-active" onclick="color1();"></a>
                        <a href="#" onclick="color2();"></a>
                        <a href="#" onclick="color3();"></a>
                        <a href="#" onclick="color4();"></a>
                        <a href="#" onclick="color5();"></a>
                        <a href="#" onclick="color6();"></a>
                        <a href="#" onclick="color7();"></a>
                        <a href="#" onclick="color8();"></a>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

    <div class="responsive-sidebar-menu">
        <div class="overlay"></div>
        <div class="sidebar-menu-inner">
            <div class="menu-wrap">
                <p>Menu</p>
                <ul class="menu scroll-nav-responsive d-flex">
                    <li>
                        <a class="scroll-to" href="#home">
                            <i class="las la-home"></i> <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#about">
                            <i class="lar la-user"></i> <span>About</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#resume">
                            <i class="las la-briefcase"></i> <span>Resume</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#services">
                            <i class="las la-stream"></i> <span>Services</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#skills">
                            <i class="las la-shapes"></i> <span>Skills</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#testimonial">
                            <i class="lar la-comment"></i> <span>Testimonial</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#contact">
                            <i class="las la-envelope"></i> <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-social">
                <p>Social</p>
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href=""><i class="lab la-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=61555417767584"><i class="lab la-facebook-f"></i></a>
                    </li>
                    <li>
                <a href="https://www.linkedin.com/in/zainshaikh9/"><i class="lab la-linkedin-in"></i></a>
            </li>
            <li>
                <a href="https://github.com/techzainshaikh"><i class="lab la-github"></i></a>
            </li>
                </ul>
            </div>
        </div>
    </div>

    <ul class="menu scroll-nav d-flex">
        <li>
            <a class="scroll-to" href="#home">
                <span>Home</span> <i class="las la-home"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#about">
                <span>About</span> <i class="lar la-user"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#resume">
                <span>Resume</span> <i class="las la-briefcase"></i>
            </a>
        </li>
        <li>
            <a href="#services">
                <span>Services</span> <i class="las la-stream"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#skills">
                <span>Skills</span> <i class="las la-shapes"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#testimonial">
                <span>Testimonial</span> <i class="lar la-comment"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#contact">
                <span>Contact</span> <i class="las la-envelope"></i>
            </a>
        </li>
    </ul>

    <div class="left-sidebar">
        <div class="sidebar-header d-flex align-items-center justify-content-between">
                <!-- <span class="designation">Framer Designer & Developer</span> -->
        </div>
        <img class="me" src="assets/images/me1.jpg" alt="Me">
     
        <h2 class="address">Based in Karachi, PK</h2>
        <p class="copyright">&copy; 2025 Zain. All Rights Reserved.</p>
        <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
            <li>
                <a href=""><i class="lab la-twitter"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com/profile.php?id=61555417767584"><i class="lab la-facebook-f"></i></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/zainshaikh9/"><i class="lab la-linkedin-in"></i></a>
            </li>
            <li>
                <a href="https://github.com/techzainshaikh"><i class="lab la-github"></i></a>
            </li>
        </ul>
                <a href="mailto:techzainshaikh@gmail.com" class="theme-btn">
            <i class="las la-envelope"></i> Hire Me
        </a>
    </div>

    <main class="drake-main">
        <div id="smooth-wrapper">
            <div id="smooth-content">

                <div class="left-sidebar">
                    <div class="sidebar-header d-flex align-items-center justify-content-between">
                        <!-- <img src="assets/images/go.png" alt=""> -->
                        <!-- <span class="designation">Framer Designer & Developer</span> -->
                    </div>
                    <img class="me" src="assets/images/me1.jpg" alt="Me">
                    <h2 class="address">Based in Karachi, PK</h2>
                    <p class="copyright">&copy; 2025 Zain. All Rights Reserved.</p>
                    <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
                        <li>
                            <a href=""><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                <a href="https://www.facebook.com/profile.php?id=61555417767584"><i class="lab la-facebook-f"></i></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/zainshaikh9/"><i class="lab la-linkedin-in"></i></a>
            </li>
            <li>
                <a href="https://github.com/techzainshaikh"><i class="lab la-github"></i></a>
            </li>
                    </ul>
                   <a href="mailto: techzainshaikh@gmail.com" class="theme-btn">
                     <i class="las la-envelope"></i> Hire Me
                 </a>
                </div>

                <section class="hero-section page-section scroll-to-page" id="home">

                    <div class="custom-container">
                        <div class="hero-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-home"></i> Introduce
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">
                            Say Hi from <span class="anim">M Zain ul Abideen</span>, Web Designer and Full Stack Developer
                        </h1>
                        <p class="scroll-animation" data-animation="fade_from_bottom">
                             Passionate about crafting clean and efficient code, I focus on building elegant solutions that simplify complex challenges. My mission is to create intuitive and impactful digital experiences that resonate with users and drive results.
                        </p>

                            <a href="#resume" class="go-to-project-btn scroll-to scroll-animation" data-animation="rotate_up">
                                <img src="assets/images/round-text.png" alt="Rounded text">
                                <i class="las la-arrow-down"></i>
                            </a>
        
                            <div class="facts d-flex">
                                <div class="left scroll-animation" data-animation="fade_from_left">
                                    <h1>2+</h1>
                                    <p>Years of <br>Experience</p>
                                </div>
                                <div class="right scroll-animation" data-animation="fade_from_right">
                                    <h1>20+</h1>
                                    <p>projects completed on <br>5 countries</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        
                <section class="about-area page-section scroll-to-page" id="about">
                    <div class="custom-container">
                        <div class="about-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="lar la-user"></i> About
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Every great design begin with<br>
                                    an even <span>better story</span></h1>
                            </div>
                            <p class="scroll-animation" data-animation="fade_from_bottom">Almost two years ago, I started out as a freelance designer. Since then, I've worked remotely for agencies, provided startup consulting, and teamed up with great individuals to develop digital products for both consumer and corporate usage. 

                                I'm a naturally interested person that exudes confidence in my modest demeanor and am constantly striving to improve one chopsone design problem at a time.</p>
                        </div>
                    </div>
                </section>
        
        
                <section class="resume-area page-section scroll-to-page" id="resume">
                    <div class="custom-container">
                        <div class="resume-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-briefcase"></i> Resume
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Education & <span>Experience</span></h1>
                            </div>
        
                            <div class="resume-timeline">
                                <div class="item scroll-animation" data-animation="fade_from_right">
                                    <span class="date">2023 - Present</span>
                                    <h2>Web Desinger & Developer</h2>
                                    <p>Tria Tech Solution</p>
                                    <h2>Front-End Developer</h2>
                                    <p>Zario Studio</p>
                                </div>
                                <div class="item scroll-animation" data-animation="fade_from_right">
                                    <span class="date">2023 - Present</span>
                                    <h2>Web Developer & Co-Founder</h2>
                                    <p>Zario Studio</p>
                                    <h2>Web Designer</h2>
                                    <p>Freelance</p>
                                    <h2>Leader Team of Marketing</h2>
                                    <p>Zario Marketing Agency</p>
                                </div>
                                <div class="item scroll-animation" data-animation="fade_from_right">
                                    <span class="date">2022 - Undergraduate</span>
                                    <h2>Bachelor Degree of Computer Science</h2>
                                    <p>Bbsul University</p>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </section>
        
        
                <section class="services-area page-section scroll-to-page" id="services">
                    <div class="custom-container">
                        <div class="services-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-stream"></i> Services
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Specializations</span></h1>
                            </div>
        
                            <div class="services-items">
                                <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-bezier-curve"></i>
                                    <h2>Website Design</h2>
                                    <p>I created digital products with unique ideas use Html, Css, Js</p>
                                    <span class="projects">24 Projects</span>
                                </div>
                                <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-code"></i>
                                    <h2>Web Development</h2>
                                    <p>I build website go live with Html, Css, Js or Php & Mysql</p>
                                    <span class="projects">126 Projects</span>
                                </div>
                                <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-bezier-curve"></i>
                                    <h2>SEO/Marketing</h2>
                                    <p>Increase the traffic for your website with SEO optimized</p>
                                    <span class="projects">8 Projects</span>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </section>
        
        
                <section class="skills-area page-section scroll-to-page" id="skills">
                    <div class="custom-container">
                        <div class="skills-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-shapes"></i> my skills
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Advantages</span></h1>
                            </div>
        
                            <div class="row skills text-center">
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/html.png" alt="html">
                                            <h1 class="percent">95%</h1>
                                        </div>
                                        <p class="name">HTML</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/css.png" alt="Css">
                                            <h1 class="percent">93%</h1>
                                        </div>
                                        <p class="name">CSS</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/js.png" alt="Js">
                                            <h1 class="percent">80%</h1>
                                        </div>
                                        <p class="name">JAVASCRIPT</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/react.png" alt="React">
                                            <h1 class="percent">75%</h1>
                                        </div>
                                        <p class="name">React</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/wordpress.png" alt="WordPress">
                                            <h1 class="percent">76%</h1>
                                        </div>
                                        <p class="name">WordPress</p>
                                    </div>

                                </div>
                                 <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/B.png" alt="Bootstrap">
                                            <h1 class="percent">93%</h1>
                                        </div>
                                        <p class="name">BOOTSTRAP</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/mysql.png" alt="Sql">
                                            <h1 class="percent">80%</h1>
                                        </div>
                                        <p class="name">MYSQL</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/query.png" alt="jquery">
                                            <h1 class="percent">90%</h1>
                                        </div>
                                        <p class="name">JQUERY</p>
                                    </div>
                                </div>
                               
                                

        
                        </div>
                    </div>
                </section>
        
        
              <!--   <section class="portfolio-area page-section scroll-to-page" id="portfolio">
                    <div class="custom-container">
                        <div class="portfolio-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-grip-vertical"></i> portfolio
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Featured <span>Projects</span></h1>
                            </div>
        
                            <div class="row portfolio-items">
                                <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-full">
                                        <div class="portfolio-item-inner">
                                            <a href="assets/images/portfolio1.jpg" data-lightbox="example-1">
                                                <img src="assets/images/portfolio1.jpg" alt="Portfolio">
                                            </a>
        
                                            <ul class="portfolio-categories">
                                                <li>
                                                    <a href="">Figma</a>
                                                </li>
                                                <li>
                                                    <a href="">Framer</a>
                                                </li>
                                                <li>
                                                    <a href="">WordPress</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2><a href="">Bureau - Architecture Studio Website</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_left">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="assets/images/portfolio2.jpg" data-lightbox="example-1">
                                                <img src="assets/images/portfolio2.jpg" alt="Portfolio">
                                            </a>

                                            <img src="assets/images/portfolio2.jpg" alt="Portfolio">
        
                                            <ul class="portfolio-categories">
                                                <li>
                                                    <a href="">WordPress</a>
                                                </li>
                                                <li>
                                                    <a href="">Larevel/PHP</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2><a href="">Moonex WordPress Theme</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_right">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="assets/images/portfolio3.jpg" data-lightbox="example-1">
                                                <img src="assets/images/portfolio3.jpg" alt="Portfolio">
                                            </a>
        
                                            <ul class="portfolio-categories">
                                                <li>
                                                    <a href="">Figma</a>
                                                </li>
                                                <li>
                                                    <a href="">Webflow</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2><a href="">Taskly Dashboard</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="assets/images/portfolio4.jpg" data-lightbox="example-1">
                                                <img src="assets/images/portfolio4.jpg" alt="Portfolio">
                                            </a>
        
                                            <ul class="portfolio-categories">
                                                <li>
                                                    <a href="">Figma</a>
                                                </li>
                                                <li>
                                                    <a href="">React</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2><a href="">Hinterland - Real Estate Site Redesign</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="assets/images/portfolio5.jpg" data-lightbox="example-1">
                                                <img src="assets/images/portfolio5.jpg" alt="Portfolio">
                                            </a>
        
                                            <ul class="portfolio-categories">
                                                <li>
                                                    <a href="">Framer</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2><a href="">Lewis Portfolio Framer Template</a></h2>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </section> -->
        
        
                <section class="testimonial-area page-section scroll-to-page" id="testimonial">
                    <div class="custom-container">
                        <div class="testimonial-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="lar la-comment"></i> testimonial
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Trusted by <span>Hundered Clients</span></h1>
                            </div>
        
                            <div class="testimonial-slider-wrap scroll-animation" data-animation="fade_from_bottom">
                                <div class="owl-carousel testimonial-slider owl-theme">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-inner">
                                            <div class="author d-flex align-items-center">
                                                <img src="assets/images/testimonial-1.jpg" alt="Testimonial">
                                                <div class="right">
                                                    <h3>Arqam</h3>
                                                    <p class="designation">CEO of <span>IBM Global</span></p>
                                                </div>
                                            </div>
                                            <p>“Zain ul Abideen is a creative, professional, and proficient coder. Much more than I had anticipated. 
                                                Excellent product with adjustable price. Recommended!.”</p>
        
                                            <a href="" class="project-btn">Project</a>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-inner">
                                            <div class="author d-flex align-items-center">
                                                <img src="assets/images/testimonial-1.jpg" alt="Testimonial">
                                                <div class="right">
                                                    <h3>Syed Mohib</h3>
                                                    <p class="designation">Product Management of <span>Invision App Inc</span></p>
                                                </div>
                                            </div>
                                            <p>“Collaborating with Zain was a delight, and
                                             we look forward to working with him again.
                                             Trust him with any task, big or small—Zain is 
                                             a reliable and skilled designer.”</p>
        
                                            <a href="" class="project-btn">Project</a>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-inner">
                                            <div class="author d-flex align-items-center">
                                                <img src="assets/images/testimonial-1.jpg" alt="Testimonial">
                                                <div class="right">
                                                    <h3>Dawood Mirza</h3>
                                                    <p class="designation">Director of <span>Envato LLC</span></p>
                                                </div>
                                            </div>
                                            <p>“Extremely profressional and fast service!. Zain is a master
                                                of code and he also very creative. We done 3 projects with
                                                him and certain will continue.”</p>
        
                                            <a href="" class="project-btn">Project</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-footer-nav">
                                    <div class="testimonial-nav d-flex align-items-center">
                                        <button class="prev"><i class="las la-angle-left"></i></button>
                                        <div id="testimonial-slide-count"></div>
                                        <button class="next"><i class="las la-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
        
                            <!-- <div class="clients-logos">
                                <h4 class="scroll-animation" data-animation="fade_from_bottom">work with 60+ brands worldwide</h4>
                                <div class="row align-items-center">
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                        <img src="assets/images/client-1.png" alt="Client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                        <img src="assets/images/client-2.png" alt="Client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                        <img src="assets/images/client-3.png" alt="Client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                        <img src="assets/images/client-4.png" alt="Client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                        <img src="assets/images/client-5.png" alt="Client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                        <img src="assets/images/client-6.png" alt="Client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                        <img src="assets/images/client-7.png" alt="Client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                        <img src="assets/images/client-8.png" alt="Client">
                                    </div>
                                </div>
                            </div> -->
         
                        </div>
                    </div>
                </section>
        
        


                <section class="contact-area page-section scroll-content" id="contact">
                    <div class="custom-container">
                        <div class="contact-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-dollar-sign"></i> contact
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Let's Work <span>Together!</span></h1>
                            </div>
                           

                            <form class="contact-form scroll-animation" data-animation="fade_from_bottom" method="POST" action="email.php" enctype="multipart/form-data">
                               <!--  <div class="alert alert-success messenger-box-contact__msg" style="display: none;" role="alert">
                                    Your message was sent successfully.
                                </div> -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="full-name">full Name <sup>*</sup></label>
                                            <input type="text" name="name" id="full-name" placeholder="Your Full Name" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="email">Email <sup>*</sup></label>
                                            <input type="email" name="email" id="email" placeholder="Your email adress" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="phone-number">phone <span>(optional)</span></label>
                                            <input type="text" name="phone" id="phone-number" placeholder="Your number phone" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="subject">subject <sup>*</sup></label>
                                            <select name="subject" id="subject">
                                                <option value="">Select a subject</option>
                                                <option value="subject1">Front-End</option>
                                                <option value="subject2">Back-End</option>
                                                <option value="subject3">Full Stack</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <label for="budget">your budget <span>(optional)</span></label>
                                            <input type="number" name="budget" id="budget" placeholder="A range budget for your project" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <label for="message">message</label>
                                            <textarea name="message" id="message" placeholder="Wrire your message here ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group upload-attachment">
                                            <div>
                                                <label for="upload-attachment">
                                                    <i class="las la-cloud-upload-alt"></i> add an attachment
                                                    <input type="file" name="file" id="upload-attachment" required/>
                                                </label>
                                                
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group submit-btn-wrap">
                                            <button class="theme-btn" name="submit" type="submit" id="submit-form">send message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    
    <script src="assets/js/main.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/color.js"></script>
    <script src="vanilla-tilt.js"></script>
    <script type="text/javascript">
        // Get all buttons from the DOM

const buttons = document.querySelectorAll(".section-header");

// Loop through each button

buttons.forEach(button =>
{
    // Get the text that should be scrambled from each button

    const text = button.querySelector('.anim');

    // Get the original text of that same element

    const originalText = text.innerText;
    const delay = 90; //adjust this to change the speed of the scramble

    // Set a mouseover event to each button

    button.addEventListener("mouseover", () => 
    {   

        // Index variable
        let i = 0;

        /*Set an interval that will keep repeating the
        code inside with a specified delay between each itertation*/

        const interval = setInterval(() => 
        {
            const modifiedText = originalText
    
            // Split the original text into individual character
            
            .split("")

            // For each  character generate a random ASCII character
            
            .map(() => {

            return String.fromCharCode(Math.random() * (126 - 32) + 32);
            
            // ASCII characters from space to ~
        })

        // Join the characters together
        .join("");

        // Change the original text to the new generated text
        text.innerText = modifiedText;

        // Increment the index variable
        i++;

        /*Keep repeating this whole process untill
        the index variable reaches 10 (Or any other number of iterations you want)*/
    
        if (i > 10) //Change this number to control the duration of the effect 
        {
            // Stop changing the text
            clearInterval(interval);

            //Reset the text to its original value
            text.innerText = originalText;
        }

    }, delay);

    });

}); 

    </script>
    <script type="text/javascript">
        
        VanillaTilt.init(document.querySelectorAll(".skill"), 
        {
            max: 25,
            speed: 400
        });
    
    //It also supports NodeList
    // VanillaTilt.init(document.querySelectorAll(".your-element"));
    
    </script>
</body>
</html>