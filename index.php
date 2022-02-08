<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="blog/assets/announcement.css">
    <link rel="stylesheet" href="news/css/bootstrap-grid">
    <link rel="stylesheet" href="news/css/font.css">
    <link rel="stylesheet" href="news/css/font-awesome.min.css">
    <link rel="stylesheet" href="news/css/style.css">
    <script src="news/js/jquery3.1.0.min.js"></script>

    <title>Home</title>
</head>

<body>
    <!--Header-->
    
<nav>
	<input id="nav-toggle" type="checkbox">
	<div class="logo">BulSU<strong>MC</strong></div>
	<ul class="links">
		<li><a href="index.php" class="current"> Home</a></li>
		<li><a href="Admission.php">Admission</a></li>
		<li><a href="Gallery.php">Gallery</a></li>
		<li><a href="announcement.php">Announcements</a></li>
		<li><a href="contact.php">Contact Us</a></li>
		<li><a href="About Us.php">About Us</a></li>
		
        
        
	</ul>
	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
    
</nav>
<div class="logo-header">
<a class="title-header"><img src="images/titleheader.png" alt=""></a>
</div>
 <!--end ofHeader-->

 <!--Start slider-->
 <div class ="galleryContainer">
    <div class="slideShowContainer">
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
            <img src="images/Banner.png">1366X768
            <p class="captionText">Campus</p>
        </div>
        <div class="imageHolder">
            <img src="images/Maingate.jpg">1366X768
            <p class="captionText">Main Gate</p>
        </div>
        <div class="imageHolder">
            <img src="images/schoolroom.jpeg">
            <p class="captionText">Room</p>
        </div>
        <div class="imageHolder">
            <img src="images/comlab.jpg">
            <p class="captionText">Computer Laboratory</p>
        </div>
        <div class="imageHolder">
            <img src="images/Activitycenter.jpg">
            <p class="captionText">Activity Center</p>
        </div>
       
    </div>
    <div id="dotsContainer"></div>
</div>
<!--End Slider-->

<!--news-->
    
<section class="cards">
    <h1> About School</h1>
    <div class="container">
        <div class="row">
            
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <article class="card card_1">
                    <div class="card__info__hover">
                        <span class="card__like">
                            <i class="fa fa-heart-o"></i>
                        </span>
                    
                    </div>
                    <div class="card__img"></div>
                    <a href="BulsuHistory.php" class="card_link">
                        <div class="card__img__hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">BulSU MC</span>
                        <h3 class="card__title">Bulsu Meneses History</h3>
                        
                        
                    </div>
                </article>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <article class="card card_2">
                    <div class="card__info__hover">
                        <span class="card__like">
                            <i class="fa fa-heart-o"></i>
                        </span>
                        
                    </div>
                    <div class="card__img"></div>
                    <a href="UniversityPresident.php" class="card_link">
                        <div class="card__img__hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">BulSU MC</span>
                        <h3 class="card__title">University President: Mrs. Gascon</h3>
                       
                       
                    </div>
                </article>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <article class="card card_3">
                    <div class="card__info__hover">
                        <span class="card__like">
                            <i class="fa fa-heart-o"></i>
                        </span>
                        
                    </div>
                    <div class="card__img"></div>
                    <a href="campuslife.php" class="card_link">
                        <div class="card__img__hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">BulSU MC</span>
                        <h3 class="card__title">The Bulsu MC Campus Life</h3>
                        
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>


    <!--footer-->
  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		
  	 			
  	 		<div class="footer-col">
  	 			<h4>Bulacan State University Meneses Campus Online Gateway</h4>
  	 			<ul>
  	 				<li><a>Call: (044) 792 2661</a></li>
  	 				<li><a>Address: TJS Subdivision Matungao,Bulakan,Bulacan</a></li>
  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/BulSUMC" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
  <script src="Java/java.js"></script>
</body>
</html>



    
