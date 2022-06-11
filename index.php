<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Coding with Jacob</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/cwj.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-nav-item"><a href="#page-top">Start</a></li>
                <li class="sidebar-nav-item"><a href="#Platforms">Platforms</a></li>
                <li class="sidebar-nav-item"><a href="#Future Projects">Future Projects</a></li>
                <li class="sidebar-nav-item"><a href="#Current Projects">Current Projects</a></li>
                <li class="sidebar-nav-item"><a href="#contact">Location</a></li>
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">Jacob's Coding Projects</h1>
                <a class="btn btn-primary btn-xl" href="#Platforms">Platforms</a>
            </div>
        </header>
        <!-- About-->
        <?php
            if(isset($_POST['submit']))
            {
                $email = $_POST["email"];
                shell_exec("python send_mail.py $email");
                echo
                "<section id='email-alert'>
                    <div class='alert alert-success'>
                        You've signed up for a one time news letter with $email
                    </div>
                </section>";
            }
        ?>
        <section class="content-section py-5 bg-info" id="Platforms">
            <div class="container px-1 px-lg-1 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-5">
                        <div class="row gx-4 gx-lg-3">
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <span class="service-icon rounded-circle mx-auto mb-3"><a target="_blank" href="https://github.com/Jacob-OTW" style="text-decoration:none;" class="service-icon rounded-circle mx-auto mb-3"><i class="icon-social-github"></i></a></span>
                                <h4><strong>GitHub</strong></h4>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                <span class="service-icon rounded-circle mx-auto mb-3"><a target="_blank" href="https://www.youtube.com/channel/UChJXOG-3ifrnvXxHaQujv7g" style="text-decoration:none;" class="service-icon rounded-circle mx-auto mb-3"><i class="icon-social-youtube"></i></a></span>
                                <h4><strong>YouTube</strong></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <br>
    <div class="container">
        <div class="text-center">
            <form method="POST" action="#email-alert" >
                <label for="phone"><h1>Sign up for Email</h1></label><br><br>
                <input class="text" id='GO' name="email" placeholder="Example@email.com">
                <button type="submit" name="submit" class="btn btn-primary">📧</button>
            </form>
        </div>
    </div>
        </section>
        <!-- Services-->
        <section class="content-section py-5 bg-primary text-white text-center" id="Future Projects">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Roadmap</h3>
                    <h2 class="text-dark mb-5">Future Projects</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <h2 class="text-dark">Continental War</h2>
                        <h4 class="text-white">Ideas</h4>
                        <ul>
                            <li>2 vs 2 Gameplay</li>
                            <li>Real-Time-Stategy CO-OP</li>
                            <li>Build your Economy to fuel a War</li>
                        </ul>
                        <a class="btn btn-success btn-x1" href="https://trello.com/b/VgT8dzbN/continental-war" target="_blank">Trello Board</a>
                        <br>
                        <a class="btn btn-success btn-x1" href="assets/img/Concept Art.png" target="_blank">Concept Art</a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <h2 class="text-dark">Discord Bot</h2>
                        <h4 class="text-white">Features for</h4>
                        <ul>
                            <li> Cooking recipies</li>
                            <li>Reminders</li>
                        </ul>
                        <a class="btn btn-success btn-x1" href="https://discordpy.readthedocs.io/en/stable/api.html" target="_blank">Discord API docs</a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <h2 class="text-dark">E-Mail Reader</h2>
                        <h4 class="text-white">Via IMAP</h4>
                        <ul>
                            <li>Listen for commands</li>
                            <li>Reply via SMTP</li>
                        </ul>
                        <a class="btn btn-success btn-x1" href="https://youtu.be/fNKAfih5_M8" target="_blank">Current Source</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h2 class="text-dark">Hangman Web-App</h2>
                        <h4 class="text-white">Give yourself the egde in hangman</h4>
                        <ul>
                            <li>German / English vocabulary</li>
                            <li>Pattern search</li>
                            <li>Letter recommendation</li>
                        </ul>
                        <a class="btn btn-success btn-x1" href="https://snap.berkeley.edu/project?user=jacob-otw&project=Hangman%20Guesser%20(DE)://youtu.be/fNKAfih5_M8" target="_blank">SNAP! Project</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section py-5" id="Current Projects">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Portfolio</h3>
                    <h2 class="mb-5">Current Projects</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" target="_blank" href="https://github.com/Jacob-OTW/Explorer-in-PyGame">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2 text-white">Explorer</div>
                                    <p class="mb-0">Fly supplies around and discover creatures and planets</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/Explorer.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" target="_blank" href="https://github.com/Jacob-OTW/Air-Defence">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Air-Defence</div>
                                    <p class="mb-0">Protect your Airspace against 2D Mig-21s</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/Air_Defence.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" target="_blank" href="https://github.com/Jacob-OTW/Ground-Attack">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Ground-Attack</div>
                                    <p class="mb-0">Destory Ground Targets with cannon fire and bomb, but dont get git by AAA or IR-SAMs</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/Ground-Attack.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" target="_blank" href="https://github.com/Jacob-OTW/Raspberry-WiFi-Logger">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">WiFi Logger</div>
                                    <p class="mb-0">Monitor your enterprise WiFi network with a Raspberry Pi</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/Wifi-logger.jpg" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Map-->
        <div class="map" id="contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1110.7410080745872!2d10.068323647733486!3d53.57754589169788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc1978b676d36416!2sCassettenklinik!5e0!3m2!1sde!2sde!4v1652459647720!5m2!1sde!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" target="_blank" href="https://www.youtube.com/channel/UChJXOG-3ifrnvXxHaQujv7g"><i class="icon-social-youtube"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" target="_blank" href="https://github.com/Jacob-OTW"><i class="icon-social-github"></i></a>
                    </li>
                </ul>
                <a class="text-muted small mb-0" target="_blank" href="https://github.com/Jacob-OTW/LandingPage">Sourcecode</a>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>