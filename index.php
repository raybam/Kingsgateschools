<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kingsgate schools</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6DPRNQXE7S"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6DPRNQXE7S');
</script>

</head>
<body>
    <!-- Header -->
    <section class="header">
        <nav>
            <a href="#"><img src="images/doneschoollogo.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Welcome <br>To <br>kingsgate Schools</h1>
            <a href="entrolform.php" target="_blank" class="hero-btn">Entrol Today</a>
        </div>
    </section>
    <!-- End Header -->

    <!-- Message Section -->
    <div class="container mt-5">
        <h1>Welcome to Kingsgate</h1>
        <div class="row">
            <div class="col-md-6">
                <h3>Message from propietor</h3>
                <p><p>Thank you for visiting our website and we hope that you find it informative. We feel truly privileged to lead such a wonderful school and to have the opportunity of ensuring that each child at Kingsgate Nursery and Primary receives the best possible education in their formative years.

                At Kingsgate schools, we have high expectations of our children and set challenging targets for them. Every child is encouraged to reach their full potential. We also recognise that every child is unique and has valid contributions to make.

                Our staff are dedicated, hardworking and experienced. We provide a safe, calm and caring atmosphere and foster an ethos of hard work based on an enjoyment of learning.</p>
                <a href="aboutus.html" class="message-btn"> Read More </a>	    
            </div>
            <div class="col-md-6 iframe-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/QX6LO9mQEyw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- End Message Section -->

    <!-- Gallery Section -->
    <section class="gallery container mt-5">
        <h1>Gallery Section</h1>
        <p> View school gallery and events </p>
        <div class="rows">
            <?php
            require 'admin/config.php';
            $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            $query = "SELECT * FROM gallery LIMIT 0,3";
            $query_run = mysqli_query($connection,$query);
            $check_blog = mysqli_num_rows($query_run) > 0;

            if($check_blog){
                while($row = mysqli_fetch_array($query_run))
                {

                    ?>
            <div class="gallery-col">
                <img src="admin/upload/<?php echo $row['image']; ?>" class="img-fluid" alt="">
                <div class="color-layer">
                    <h3 class="text-center"><?php echo $row['text']; ?></h3>
                </div>
            </div>
            <!-- <div class="gallery-col">
                <img src="images/galleryimg3.jpg " class="img-fluid" alt="">
                <div class="color-layer">
                    <h3>lorem ipsum lorem ipsum</h3>
                </div>
            </div>
            <div class="gallery-col">
                <img src="images/galleryimg1.jpg" class="img-fluid" alt="">
                <div class="color-layer">
                    <h3>lorem ipsum lorem ipsum</h3>
                </div>
            </div> -->
            <?php
                }
            }else{
                echo '<h3 class="text-center">No Gallery Found!</h3>';
            }


            ?>
        </div>
    </section>
    <!-- End Gallery Section -->

    <!-- Blog Section -->
    <section class="container mt-5">
        <h1>News and Events</h1>
        <p>stay updated with the ongoing activities of the school</p>
        <div class="rows">
            <?php
            $query = "SELECT * FROM blog LIMIT 0,3";
            $query_run = mysqli_query($connection,$query);
            $check_blog = mysqli_num_rows($query_run) > 0;

            if($check_blog){
                while($row = mysqli_fetch_array($query_run))
                {

            ?>
            <div class="blogs-col">
                <img src="admin/blogimages/<?php echo $row['blog_image']; ?>" alt="">
                <h3 class="title"><?php echo $row['blog_title']; ?></h3>
                <p><?php echo substr($row['blog_content'], 0, 100) . '...';?></p>
                <a href="blog.php" class="message-btn"> Read More </a>
            </div>
            <?php
                }
            }else{
                echo "<h3>No Blog Post Found!</h3>";
            }


            ?>
            
        </div>
    </section>
    <!-- End Blog Section -->

    <!-- Testimonial Section -->
    <section class="testimonials mt-5 jumbotron">
        <div class="container">
            <h1>What our parents says</h1>
            <p>Read reviews about Kingsgate Schools</p>
            <div class="rows">
                <div class="testimonial-col">
                    <div>
                        <blockquote>
                            We are really, really pleased with the school and will keep telling everyone what a 
                            great school Kingsgate is.
                        </blockquote>
                        <h3>Mrs Agbojo Micheals</h3>
                        <!-- <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i> -->
                    </div>
                </div>
                <div class="testimonial-col">
                    <div>
                        <blockquote>
                            I have been extremely happy with every aspect of the school, particularly the positive impact 
                            on my child.
                        </blockquote>
                        <h3>Mr Chuks Obina</h3>
                        <!-- <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Footer Section -->
    <section class="footer footer-header">
        <div class="rows">
            <div class="footer-col">
            <h4 class="footer-color">About</h4>
            <p class="footer-color">Kingsgate Nursery & Primary School encourages the development of 
                the whole child. Our aim is to support learners in becoming 
                inquisitive, reflective thinking, and developing personal problems
                solving skills to produce persons who can stand out as global 
                citizens professionally and morally.
            </p>
            </div>
            <div class="footer-col">
<div class="footer-icon">
 				<a href="https://m.facebook.com/profile.php?id=100065933366648" target="_blank"><i class="fab fa-facebook-square"></i></a>
 				<a href="http://wa.me/2348023129137" target="_blank"><i class="fab fa-whatsapp"></i></a>
 				<a href="https://www.instagram.com/kingsgateschools/" target="_blank"><i class="fab fa-instagram"></i></a>
 				</div>
 				<div>
 					<h4 class="quicklinks">Quick Links</h4>
 					<div class="rows">
	 					<div class="footer-links links">
		 					<ul class="navbar-nav">
								<li class="nav-item">
									<a href="index.php" class="nav-link">Home</a>
								</li>
								<li class="nav-item">
									<a href="blog.php" class="nav-link">Blog</a>
								</li>
								<li class="nav-item">
									<a href="gallery.php" class="nav-link">Gallary</a>
								</li>
							</ul>
						</div>

						<div class="footer-links links">
		 					<ul class="navbar-nav">
								<li class="nav-item">
									<a href="about.php" class="nav-link">About</a>
								</li>
								<li class="nav-item">
									<a href="about.php" class="nav-link">FAQ</a>
								</li>
								<li class="nav-item">
									<a href="contact.php" class="nav-link">Contact</a>
								</li>
							</ul>
						</div>
					</div>
 				</div>
 			</div>
            <div class="footer-col">
                <h4 class="footer-color">Contact Us</h4>
                <div class="contact">
                    <span class="footer-icon"><i class="fas fa-phone"></i><br> &nbsp; +234-802-3129-137</span><br><br>
                    <span class="footer-icon"><i class="fas fa-envelope"></i><br> &nbsp; info@kingsgateschools.com</span>
                </div>
            </div>
        </div>
            <div class="icon-bar">
                <a href="http://wa.me/2348023129137" target="_blank" id="whatsapp">
                    <i class="fab fa-5x fa-whatsapp"></i>
                </a>
            </div>
        <div class="text-center foot-bottom">
        &copy; 2021, Designed by DiamondGlobal | Adedamola Bamidele
        </div>
    </section>
    <!-- End Footer Section -->





<!--- Script Source Files -->
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->

<!--- Javascript for togglemenu -->
<script>
    var navLinks =  document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>
</body>
</html>