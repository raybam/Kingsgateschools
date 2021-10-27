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
<style>
    .hovereffect{
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default; 
    }
    .hovereffect .overlay{
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top:0;
        left:0;
        opacity: 0;
        background-color: rgba(0,0,0,0.5);
        -webkit-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
    }
    .hovereffect img{
        display: block;
        position:relative;
        -webkit-transition: all .4s linear;
        transition: all .4s linear;
    }

    .hovereffect h2{
        text-transform: uppercase;
        color: #fff;
        text-align: center;
        position: relative;
        font-size: 17px;
        background: rgba(0,0,0,0.6);
        -webkit-transform: translateY(-100px);
        -ms-transform: translateY(-100px);
        transform: translateY(-100px);
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        padding: 10px;
    }    

    .hovereffect a.info{
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        color: #fff;
        border: 1px solid #fff;
        background-color: transparent;
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        margin: 50px 0 0;
        padding: 7px 14px;
    }
    .hovereffect a.info:hover{
        box-shadow: 0 0 5px #fff;
    }
    .hovereffect:hover img{
        -ms-transform: scale(1.2);
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }

    .hovereffect:hover .overlay{
        opacity: 1;
        filter: alpha(opacity=100);
    }
    .hovereffect:hover h2, .hovereffect:hover a.info{
        opacity:1;
        filter: alpha(opacity=100);
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    .hovereffect:hover a.info{
        -webkit-transition-delay: .2s;
        transition-delay: .2s; 
    }











</style>
<body>
    <!-- Header -->
    <section class="gallery-header">
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
    </section>
    <!-- End Header -->
    
    <!-- gallery section  -->
    <h3 class="text-center">GALLERY PAGE</h3>
    <div class="container">
        <div class="row">
            <?php
            require 'admin/config.php';
            $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            $query = "SELECT * FROM gallery";
            $query_run = mysqli_query($connection,$query);
            $check_blog = mysqli_num_rows($query_run) > 0;

            if($check_blog){
                while($row = mysqli_fetch_array($query_run))
                {

                    ?>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img src="admin/upload/<?php echo $row['image']; ?>" height="300px" width="100%" alt="">
                    <div class="overlay">
                        <h2><?php echo $row['text']; ?></h2>
                        <a href="admin/upload/<?php echo $row['image']; ?>" target="_blank" class=info>view image</a>
                    </div>
                </div>
            </div>

<!--             
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img src="images/galleryimg1.jpg" height="300px" width="100%" alt="">
                    <div class="overlay">
                        <h2> lorem ipsum dummy text </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img src="images/galleryimg1.jpg" height="300px" width="100%" alt="">
                    <div class="overlay">
                        <h2> lorem ipsum dummy text </h2>
                    </div>
                </div>
            </div> -->
            
            <?php
                }
            }else{
                echo "No Records Found!";
            }


            ?>
        </div>
    </div>

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
            <!-- <div class="icon-bar">
                <a href="http://wa.me/2348023129137" target="_blank" id="whatsapp">
                    <i class="fab fa-5x fa-whatsapp"></i>
                </a>
            </div> -->
        <div class="foot-bottom text-center">
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