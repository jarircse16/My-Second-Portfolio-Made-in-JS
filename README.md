<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portfolio Website-JarirAhmed16</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- linking css file -->
  <link rel="stylesheet" href="style.css">
  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark navbarScroll">
        <div class="container">
            <a class="navbar-brand" href="#">Jarir Ahmed</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- main banner -->
    <section class="bgimage" id="home">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
                <h3 class="hero_title">I am Jarir Ahmed from RUET CSE Department.</h3>
                <p class="hero_desc">I am a passionate web developer and working with JavaScript.</p>
            </div>
            </div>
        </div>
    </section>

    <!-- about section-->
    <section id="about">
        <div class="container mt-4 pt-4">
            <h1 class="text-center">About Me</h1>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <img src="images/jarir-pix-407x540.jpg" class= "imageAboutPage" alt="">
                </div>

                <div class="col-lg-8">
                    <p> Assalamualaikum, Now I am presenting myself who is a self motivated learner. I have learnt html, css, php and javascript. I love to design websites and web applications!

                    </p>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul>
                                <li>Name: Jarir Ahmed</li>
                                <li>Age: 27</li>
                                <li>Occupation: Web Developer</li>

                            </ul>
                        </div>
                      <!--     <div class="col-md-6">
                            <ul>
                             <li></li>
                                <li></li>
                                <li></li>

                            </ul>
                        </div> -->
                    </div>
                    <div class="row mt-3">
                        <p> I have designed some web applications which you can find in my <a href = "https://github.com/jarircse16">github profile.</a>  I feel interesting when I learn new technologies and I love what I do.
                            I have designed this portfolio website using html, php, css and javascript. This is a simple website but this motivates me a lot to do more.
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <!-- services section-->
    <section id="services">
        <div class="container">
            <h1 class="text-center">Services</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-clock"></i>
                            <h4 class="card-title mt-3">Website Development</h4>
                            <p class="card-text mt-3">
                              It's lot more interesting when we develop websites. I can use laravel , react.js, node.js ,express.js and other technologies to build attractive websites.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-layer-group'></i>
                            <h4 class="card-title mt-3">Website Design</h4>
                            <p class="card-text mt-3">Web Design has two parts, front end design which can be done in react.js while the other one also known as back end can be done in node.js or laravel.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='far servicesIcon fa-check-circle'></i>
                            <h4 class="card-title mt-3">Website Deployment</h4>
                            <p class="card-text mt-3">A website is coded in a development environment where developers can make tweaks and changes and ensure that everything operates as it should. Once it's finished, the code is uploaded (or deployed) to a live environment, where people can find and interact with it on the internet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-search'></i>
                            <h4 class="card-title mt-3">SEO</h4>
                            <p class="card-text mt-3">SEO - Search engine optimization: the process of making your site better for search engines. Also the job title of a person who does this for a living: We just hired a new SEO to improve our presence on the web.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-shield-alt'></i>
                            <h4 class="card-title mt-3">DevOps</h4>
                            <p class="card-text mt-3">DevOps is the combination of cultural philosophies, practices, and tools that increases an organization's ability to deliver applications and services at high velocity: evolving and improving products at a faster pace.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-wrench'></i>
                            <h4 class="card-title mt-3">QA</h4>
                            <p class="card-text mt-3">Quality assurance (QA) is any systematic process of determining whether a product or service meets specified requirements. QA establishes and maintains set requirements for developing or manufacturing reliable products.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio section-->
    <section id="portfolio">
        <div class="container mt-3">
            <h1 class="text-center">Portfolio</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="images/portfolioImage1.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                        <h4 class="card-title"><a href="https://news478.000webhostapp.com/">Jarir Ahmed News</a></h4>
                            <p class="card-text">A Simple Newspaper website built using HTML, CSS, PHP, MySql.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/portfolioImage4.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><a href="https://allfreetools.000webhostapp.com/">Note Taking App</a></h4>
                            <p class="card-text">A Simple Note Taking App using HTML,CSS and PHP Crud Operation.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/portfolioImage3.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><a href="https://jarircse16.github.io/">First Portfolio Website</a></h4>
                            <p class="card-text">My First Portfolio Website</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/portfolioImage4.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><a href="https://news478.000webhostapp.com/js_to_do_list_client_side/">Persistant Client Side To Do List App</a></h4>
                            <p class="card-text">Developed in JS, this app can take notes and save them without any login. Only user can see his or her notes because it uses the localstorage of JS.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/portfolioImage1.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><a href="https://news478.000webhostapp.com/multiple_question_paper_generator/">Multiple Question Paper Generator</a></h4>
                            <p class="card-text">This project is written in simply HTML and PHP to implement login and logout using PHP. Here user can log in to generate question papers from a set of questions randomly.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/portfolioImage4.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><a href="https://news478.000webhostapp.com/blog/">Blog App</a></h4>
                            <p class="card-text">A very basic blog website on psychology. Written in HTML. Just for practices.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- contact section-->
    <section id="contact">
        <div class="container mt-3 contactContent">
            <h1 class="text-center">Contact Me</h1>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
                    <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;">
                        <div id="embedmap-canvas" style="height:100%; width:100%;max-width:100%;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=rajshahi&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                            </iframe>
                        </div>
                        <a class="googlemaps-html" href="https://www.embed-map.com" id="get-data-forembedmap">https://www.embed-map.com</a>
                        <style>#embedmap-canvas img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}
                        </style>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- form fields -->
                    <form method="POST" action="save_form.php">
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Name">
                        <input type="email" name="email" class="form-control mt-3" placeholder="Email">
                        <input type="text" name="subject" class="form-control mt-3" placeholder="Subject">
                        <div class="mb-3 mt-3">
                            <textarea class="form-control" rows="5" id="comment" name="project_details" placeholder="Project Details"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Contact Me</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- footer section-->
    <footer id="footer">
        <div class="container-fluid">
            <!-- social media icons -->
            <div class="social-icons mt-4">
                <a href="https://www.facebook.com/jarir.in.ruet.cse" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/jarir1114/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/JarirAhmed16" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/in/jarir-ahmed-539272155/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.twitch.tv/" target="_blank"><i class="fab fa-twitch"></i></a>
            </div>
        </div>
    </footer>

    <!-- load javascript after loading all html content -->
    <script src="script/script.js"></script>

</body>

</html>
