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
.blog-header{
    height: 50vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url(images/blogbanner.jpg);
    background-position: center;
    background-size: cover;
}

.articles{
  margin-top: 30px;
}
.articles .article{
  display: flex;
  flex-wrap:wrap;
  margin-bottom: 30px;
}
.articles .article .left img{
  height: 300px;
  width: 500px;
}
.articles .article .right {
  margin-left: 40px;
  max-width: 50%;
}
.articles .article .right p.date{
  color: #7f7e7e;
}
.articles .article .right p.description{
  color: #2d2d2d;
}


@media screen and (max-width: 700px){
  .articles .article .left img{
    height: 50vh;
    width:100%;
  }
  .articles .article .right{
    margin: 0px;
    max-width: 100%;
  }
}
</style>
<body>
    <!-- Header -->
    <section class="blog-header">
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
    
    <!-- blog section -->
    <section class="container articles">
    
            <?php
            require 'admin/config.php';
            $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            $query = "SELECT * FROM blog";
            $query_run = mysqli_query($connection,$query);
            $check_blog = mysqli_num_rows($query_run) > 0;

            if($check_blog){
                while($row = mysqli_fetch_array($query_run))
                {
                    $timestamp = $row['date_published'];
                    $date = date('d M Y', strtotime($timestamp));
                    ?>

                    <div class="article">
                    <div class="left">
                        <img src="admin/blogimages/<?php echo $row['blog_image']; ?>" alt="">
                    </div>
                    <div class="right">
                        <h1><?php echo $row['blog_title']; ?></h1>
                        <p class="description"><?php echo substr($row['blog_content'], 0, 100) . '...';?></p>
                        <p class="date">Published on: <?php echo $date; ?></p>
                        <!-- <form action="blogdetails.php">
                        <input type="hidden" name=blog_id value="<?php echo $row['id']?>">
                        <button type="submit" name="blog_details.php" class="message-btn"> Read More </button>
                        </form> -->
                        <a href="blogdetails.php?id=<?php echo $row['id']?>" name="blog_details.php" class="message-btn"> Read More </a>
                    </div>
                    </div>

                    <?php
                }
            }else{
                echo "No Records Found!";
            }


            ?>
            
 
    </section>

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