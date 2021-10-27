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
.accordion {
  max-width: 400px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
  overflow: hidden;
  font-family: "Quicksand", sans-serif;
  background: #009578;
}

.accordion__label,
.accordion__content {
  padding: 14px 20px;
}

.accordion__label {
  display: block;
  color: #ffffff;
  font-weight: 500;
  cursor: pointer;
  position: relative;
  transition: background 0.1s;
}

.accordion__label:hover {
  background: rgba(0, 0, 0, 0.1);
}

.accordion__label::after {
  content: "";
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 20px;
  width: 12px;
  height: 6px;
  background-image: url('data:image/svg+xml;utf8,<svg width="100" height="50" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 100,0 50,50" style="fill:%23FFFFFF99;" /></svg>');
  background-size: contain;
  transition: transform 0.4s;
}

.accordion__content {
  background: #ffffff;
  line-height: 1.6;
  font-size: 0.85em;
  display: none;
}

.accordion__input {
  display: none;
}

.accordion__input:checked ~ .accordion__content {
  display: block;
}

.accordion__input:checked ~ .accordion__label::after {
  transform: translateY(-50%) rotate(0.5turn);
}

</style>
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
    
    <!-- about details -->
    <div class="container mt-2 mb-2">
        <h1 style="color: #bc2021;">About</h1>
        <h3>Information and details about Kingsgate Schools</h3>
        <div class="heading-underline mb-5" style="margin: 0;"></div>

            <div>
                <strong><h3 style="color: #bc2021;">Vision Statement</h3></strong>
                <p>Kingsgate Nursery & Primary School encourages the development of the whole child. Our aim is to support learners in becoming inquisitive, reflective thinking, and developing personal problems solving skills to produce persons who can stand out as global citizens professionally and morally.</p>
            </div>

            <div>
                <strong><h3 style="color: #bc2021;">Mission Statement</h3></strong>
                <p>Kingsgate Nursery & Primary School provides a condusive, healthy and God fearing environment where pupils are treasured as gems and nurtured to becoming great minds and thinkers.</p>
            </div>


        <div>
            <strong><h3 style="color: #bc2021;">Objectives</h3></strong>
            <ul>
                <li>To develop sound mind, in sound body by faith in God and culture of hard work</li>
                <li>To provide an educational program that develop students' curiosity and creativity.</li>
                <li>To foster tolerance, respect and acceptance of others irrespective of creed gender or physical disabilitly.</li>
                <li>To build each student's resilience and self-esteem.</li>
                <li>To provide a balanced curriculum that is rich and relevant and allows all students to succeed.</li>
                <li>To leverage on parents, teachers synergy where home andschool integrate for learning within the community.</li>
                <li>To have high expectations of ourselves and others.</li>
                <li>To provide foundational training for future STEM's global citizens.</li>
            </ul>
        </div>
        <div>
            <strong><h3 style="color: #bc2021;">Core Values</h3></strong>
            <ul>
                <li>Character</li>
                <li>Confidence</li>
                <li>Creativity</li>
                <li>Resilience</li>
                <li>Respect</li>
            </ul>
        </div>

    </div>

    <div class="container mb-5 mt-3">
        <div>
            <strong><h3 style="color: #bc2021;">FAQ Section</h3></strong>
            <p>More About Kingsgate</p>
        </div>
        <div class="accordion">
            <div>
                <input type="radio" name="example_accordion" id="section1" class="accordion__input">
                <label for="section1" class="accordion__label">How do i entrol my child?</label>
                <div class="accordion__content">
                <p>
                    You can entrol your child either by clicking on the entrol button on the website 
                    home page (Entrol) or you can come to the school inperson.
                </p>
                </div>
            </div>
            <div>
                <input type="radio" name="example_accordion" id="section2" class="accordion__input">
                <label for="section2" class="accordion__label">How do i locate the school?</label>
                <div class="accordion__content">
                <p>
                    Pakuro Junction, via Emerald Road, Km 42 Ibadan-Lagos Expressway, Ogun State.
                    you can also call 08089895611 or whatsapp 08023129137. check the website contact
                     page for more details.
                </p>
                </div>
            </div>
            <div>
                <input type="radio" name="example_accordion" id="section3" class="accordion__input">
                <label for="section3" class="accordion__label">What if my child can't speak English?</label>
                <div class="accordion__content">
                <p>
                    At kingsgate we welcome all childern regardless of their nationality. We have several childern who 
                    have joined our school unable to speak English. We have several members of staff who are trained
                    in supporting childern who are new to learning.
                </p>
                </div>
            </div>
            <div>
                <input type="radio" name="example_accordion" id="section4" class="accordion__input">
                <label for="section4" class="accordion__label">How do you communicate with parents?</label>
                <div class="accordion__content">
                <p>
                    We send emails to parents via the contacts provided by the parents.
                </p>
                </div>
            </div>
            <div>
                <input type="radio" name="example_accordion" id="section5" class="accordion__input">
                <label for="section5" class="accordion__label">How do i get information, new and update about the school?</label>
                <div class="accordion__content">
                <p>
                    visit the school blog section for update about the school and also educational news around the world.
                </p>
                </div>
            </div>
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