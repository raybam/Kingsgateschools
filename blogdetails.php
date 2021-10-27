<?php
require 'admin/config.php';
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// if(isset($_GET['id'])){
//     $id = mysqli_real_escape_string($connection, $_GET['id']);

//     $query = "SELECT * FROM blog WHERE id = $id";
//     $query_run = mysqli_query($connection,$query);
//     $blogdet = mysqli_fetch_assoc($query_run);
    
    // mysqli_free_result($query_run);
    // mysqli_close($connection);

    // print_r($blogdet);

// }

    
?>

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
    <section class="about-header">
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
    
    <!-- blog details -->
    <section class="blogdetails">
        <div class="rows">
            <div class="blog-content">
                <?php 
                   $id = $_GET['id'];
                ?>
                <?php 
                    $posts_query = "SELECT * FROM blog WHERE id = $id";
                    $posts_result = mysqli_query($connection, $posts_query);
                    if(mysqli_num_rows($posts_result) > 0){
                        while($posts = mysqli_fetch_assoc($posts_result)){
                            $id = $posts['id'];
                            $blog_title = $posts['blog_title'];
                            $blog_content = $posts['blog_content'];
                            $blog_image = $posts['blog_image'];
                            $timestamp = $posts['date_published'];
                            $date = date('d M Y', strtotime($timestamp));

                            $data = array(
                                'id' => $id,
                                'blog_title' => $blog_title,
                                'blog_content' => $blog_content,
                                'blog_image' => $blog_image,
                                'date_published' => $timestamp,
                            );

                        }
                    }
                ?>
                <img src="admin/blogimages/<?php echo $blog_image; ?>" alt="">
                <h2 class="title"><?php echo $blog_title; ?></h2>
                <p><?php echo $blog_content; ?></p>
                <p class="date">Published on: <?php echo $date; ?></p>
                <!-- {
                    $id = $_POST['edit_id'];
                    $query = "SELECT * FROM blog WHERE id='$id'";
                    $query_run = mysqli_query($connection, $query);

                    foreach($query_run as $row)
                    {
                        $timestamp = $row['date_published'];
                        $date = date('d M Y', strtotime($timestamp));
                    ?> -->
            </div>

            <div class="blog-topics">
                <h3 class="trending-topics">Trending Topics</h3>
                <?php 
                $query = "SELECT * FROM blog";
                $query_run = mysqli_query($connection,$query);
                // print_r($query_run);
                
                if(mysqli_num_rows($query_run) > 0){
                    while($row = mysqli_fetch_array($query_run))
                {
                ?>
                <div>
                    <span><a href="blog.php"><?php echo $row['blog_title']; ?></a></span>
                </div>
                <!-- <div>
                    <span><a href="blog.php">Corona Virus Secondwave</a></span>
                </div>
                <div>
                    <span><a href="blog.php">students observing COVID-19 protocols</a></span>
                </div>
                <div>
                    <span><a href="blog.php">Upcoming Kingsgate Anniversary</a></span>
                </div>
                <div>
                    <span><a href="blog.php">kingsgate job oppotunity uploads</a></span>
                </div> -->
                <?php
                }
            }else{
                echo "No Records Found!";
            }


            ?>
            </div>
            
        </div>
    </section>
    <div class="container ">
        
        <h4>Your Comments!</h4>
        <?php
            $com_query = "SELECT * FROM comments WHERE post_id = '$id' ORDER BY id DESC";
            $com_result = mysqli_query($connection, $com_query);
            if(mysqli_num_rows($com_result) > 0){
                while($com = mysqli_fetch_assoc($com_result)){
                    $username = $com['username'];
                    $comment = $com['comment'];
                    $reply = $com['reply'];
                    ?>
                    <div>
                        <hr width="50%";>
                        <p><b><?php echo $comment ?></b></p>
                        <p>Posted by: <i><?php echo $username ?></i></p>
                        <hr width="50%";>
                        <p class="px-3">Admin reply: <b><?php echo $reply ?></b></p>
                    </div>
                    <?php

                }
            }
        ?>
    </div>

    <br>
    <div class="container mt-3">
        <h4>We would love to hear your view! Comment below</h4>
        <div class="contact-col col-sm-12 col-md-6">
            <form action="comment.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="blog_title" value="<?php echo $blog_title; ?>">
                <input type="text" name="username" placeholder="Enter your name" required>
                <textarea rows="8" name="comment" placeholder="Enter your comments" required></textarea>
                <button type="submit" name="postcomment" class="message-btn">Send</button>
            </form>
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
 				<a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
 				<!-- <a href="#" target="_blank"><i class="fab fa-instagram"></i></a> -->
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