<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

	<!--- basic page needs
    ================================================== -->
	<meta charset="utf-8">
	<title>Selkom Group</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- mobile specific metas
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS
    ================================================== -->
	<link rel="stylesheet" href="<?= base_url()?>assets/frontend/css/base.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/frontend/css/vendor.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/frontend/css/main.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/frontend/css/slideshow.css">

	<!-- script
    ================================================== -->
	<script src="<?=base_url()?>assets/frontend/js/modernizr.js"></script>
	<script src="<?=base_url()?>assets/frontend/js/pace.min.js"></script>

	<!-- favicons
    ================================================== -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/63-512.png" type="image/x-icon">
	<link rel="icon" href="<?= base_url() ?>assets/images/logo/63-512.png" type="image/x-icon">

</head>

<body id="top">

<!-- header
================================================== -->
<header class="s-header">

<!--	<div class="header-logo">-->
<!--		<a class="site-logo" href="--><?//= base_url()?><!--assets/frontend/index.html">-->
<!--			<img src="--><?//= base_url()?><!--assets/frontend/images/logo.svg" alt="Homepage">-->
<!--		</a>-->
<!--	</div> -->
	<!-- end header-logo -->

	<nav class="header-nav">

		<a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

		<div class="header-nav__content">
			<h3>Menu</h3>

			<ul class="header-nav__list">
				<li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
				<li><a class="smoothscroll"  href="#about" title="about">About</a></li>
				<li><a class="smoothscroll"  href="#services" title="services">Services</a></li>
				<li><a class="smoothscroll"  href="#works" title="works">Works</a></li>
				<li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
			</ul>

			<p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>

			<ul class="header-nav__social">
				<li>
					<a href="#0"><i class="fab fa-facebook"></i></a>
				</li>
				<li>
					<a href="#0"><i class="fab fa-twitter"></i></a>
				</li>
				<li>
					<a href="#0"><i class="fab fa-instagram"></i></a>
				</li>
				<li>
					<a href="#0"><i class="fab fa-behance"></i></a>
				</li>
				<li>
					<a href="#0"><i class="fab fa-dribbble"></i></a>
				</li>
			</ul>

		</div> <!-- end header-nav__content -->

	</nav> <!-- end header-nav -->

	<a class="header-menu-toggle" href="#0">
		<span class="header-menu-icon"></span>
	</a>

</header> <!-- end s-header -->


<!-- home
================================================== -->
<section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="<?= base_url()?>assets/frontend/images/sigaka/background.png" data-natural-width=3000 data-natural-height=2000 data-position-y=top>

	<div class="shadow-overlay"></div>

	<div class="home-content">

		<div class="row home-content__main">
			<h1>
				Selkom Group. <br>
			</h1>

			<p>
				We will provide attractive offers and the best services
			</p>
		</div> <!-- end home-content__main -->

	</div> <!-- end home-content -->

	<ul class="home-sidelinks">
		<li><a class="smoothscroll" href="#about">About<span>who we are</span></a></li>
		<li><a class="smoothscroll" href="#services">Services<span>what we do</span></a></li>
		<li><a  class="smoothscroll" href="#contact">Contact<span>get in touch</span></a></li>
	</ul> <!-- end home-sidelinks -->

	<ul class="home-social">
		<li class="home-social-title">Follow Us</li>
		<li><a href="#0">
				<i class="fab fa-facebook"></i>
				<span class="home-social-text">Facebook</span>
			</a></li>
		<li><a href="#0">
				<i class="fab fa-twitter"></i>
				<span class="home-social-text">Twitter</span>
			</a></li>
		<li><a href="#0">
				<i class="fab fa-linkedin"></i>
				<span class="home-social-text">LinkedIn</span>
			</a></li>
	</ul> <!-- end home-social -->

	<a href="#slider" class="home-scroll smoothscroll">
		<span class="home-scroll__text">Scroll Down</span>
		<span class="home-scroll__icon"></span>
	</a> <!-- end home-scroll -->

</section> <!-- end s-home -->


<!-- about
================================================== -->
<!-- end s-about -->


<!-- services
================================================== -->
<section id='slider' class="s-services light-gray">

	<div class="row section-header" data-aos="fade-up">
		<div class="col-full">
			<h3 class="subhead">What We Do</h3>
			<h1 class="display-1">We have everything you need to launch and grow a successful digital business.</h1>
		</div>
	</div> <!-- end section-header -->

	<div class="row" data-aos="fade-up">
		<div class="col-full">
			<!-- Slideshow container -->
			<div class="slideshow-container">

				<!-- Full-width images with number and caption text -->
				<div class="mySlides fade" style="width: 100%">
					<div class="numbertext">1 / 3</div>
					<img src="<?= base_url()?>assets/frontend/images/sigaka/alyssa.jpeg" style="width: 100%; height: 700px; margin: 0 auto">
					<div class="text">Caption Text</div>
				</div>

				<div class="mySlides fade" style="width: 100%">
					<div class="numbertext">2 / 3</div>
					<img src="<?= base_url()?>assets/frontend/images/sigaka/aurel.jpeg" style="width: 100%; height: 700px; margin: 0 auto">
					<div class="text">Caption Two</div>
				</div>

				<div class="mySlides fade" style="width: 100%">
					<div class="numbertext">3 / 3</div>
					<img src="<?= base_url()?>assets/frontend/images/sigaka/dana.jpeg" style="width: 100%; height: 700px; margin: 0 auto">
					<div class="text">Caption Three</div>
				</div>

				<!-- Next and previous buttons -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<!-- The dots/circles -->
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
			</div>
		</div>
	</div> <!-- end about-desc -->

</section>
<!-- end s-services -->


<!-- works
================================================== -->
<section id='works' class="s-works">

	<div class="row section-header" data-aos="fade-up">
		<div class="col-full">
			<h3 class="subhead">Featured Works</h3>
			<h1 class="display-1">These are some of our recent design projects and we are so excited to show them to you.</h1>
		</div>
	</div> <!-- end section-header -->

	<div class="row masonry-wrap">
		<div class="masonry">

			<div class="masonry__brick" data-aos="fade-up">
				<div class="item-folio">

					<div class="item-folio__thumb">
						<a href="<?=base_url()?>assets/frontend/images/portfolio/gallery/g-lamp.jpg" class="thumb-link" title="Lamp" data-size="1050x700">
							<img src="<?=base_url()?>assets/frontend/<?=base_url()?>assets/frontend/<?= base_url()?>assets/frontend/images/portfolio/lamp.jpg"
								 srcset="<?= base_url()?>assets/frontend/images/portfolio/lamp.jpg 1x, images<?= base_url()?>assets/frontend//portfolio/lamp@2x.jpg 2x" alt="">
						</a>
					</div>

					<div class="item-folio__text">
						<h3 class="item-folio__title">
							Lamp
						</h3>
						<p class="item-folio__cat">
							Web Design
						</p>
					</div>

					<a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
						Project Link
					</a>

					<div class="item-folio__caption">
						<p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
					</div>

				</div> <!-- end item-folio -->
			</div> <!-- end masonry__brick -->

			<div class="masonry__brick" data-aos="fade-up">
				<div class="item-folio">

					<div class="item-folio__thumb">
						<a href="<?=base_url()?>assets/frontend/images/portfolio/gallery/g-salad.jpg" class="thumb-link" title="Salad" data-size="1050x700">
							<img src="<?=base_url()?>assets/frontend/<?=base_url()?>assets/frontend/<?= base_url()?>assets/frontend/images/portfolio/salad.jpg"
								 srcset="<?= base_url()?>assets/frontend/images/portfolio/salad.jpg 1x, image<?= base_url()?>assets/frontend/s/portfolio/salad@2x.jpg 2x" alt="">
						</a>
					</div>

					<div class="item-folio__text">
						<h3 class="item-folio__title">
							Salad
						</h3>
						<p class="item-folio__cat">
							Branding
						</p>
					</div>

					<a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
						Project Link
					</a>

					<span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

				</div> <!-- end item-folio -->
			</div> <!-- end masonry__brick -->

			<div class="masonry__brick" data-aos="fade-up">
				<div class="item-folio">

					<div class="item-folio__thumb">
						<a href="<?=base_url()?>assets/frontend/images/portfolio/gallery/g-woodcraft.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
							<img src="<?=base_url()?>assets/frontend/<?=base_url()?>assets/frontend/<?= base_url()?>assets/frontend/images/portfolio/woodcraft.jpg"
								 srcset="<?= base_url()?>assets/frontend/images/portfolio/woodcraft.jpg 1x, i<?= base_url()?>assets/frontend/mages/portfolio/woodcraft@2x.jpg 2x" alt="">
						</a>
					</div>

					<div class="item-folio__text">
						<h3 class="item-folio__title">
							Woodcraft
						</h3>
						<p class="item-folio__cat">
							Branding
						</p>
					</div>

					<a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
						Project Link
					</a>

					<span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

				</div> <!-- end item-folio -->
			</div> <!-- end masonry__brick -->

			<div class="masonry__brick" data-aos="fade-up">
				<div class="item-folio">

					<div class="item-folio__thumb">
						<a href="<?=base_url()?>assets/frontend/images/portfolio/gallery/g-liberty.jpg" class="thumb-link" title="Liberty" data-size="1050x700">
							<img src="<?=base_url()?>assets/frontend/<?=base_url()?>assets/frontend/<?= base_url()?>assets/frontend/images/portfolio/liberty.jpg"
								 srcset="<?= base_url()?>assets/frontend/images/portfolio/liberty.jpg 1x, ima<?= base_url()?>assets/frontend/ges/portfolio/liberty@2x.jpg 2x" alt="">
						</a>
					</div>

					<div class="item-folio__text">
						<h3 class="item-folio__title">
							Liberty
						</h3>
						<p class="item-folio__cat">
							Web Development
						</p>
					</div>

					<a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
						Project Link
					</a>

					<span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

				</div> <!-- end item-folio -->
			</div> <!-- end masonry__brick -->


			<div class="masonry__brick" data-aos="fade-up">
				<div class="item-folio">

					<div class="item-folio__thumb">
						<a href="<?=base_url()?>assets/frontend/images/portfolio/gallery/g-fuji.jpg" class="thumb-link" title="Fuji" data-size="1050x700">
							<img src="<?=base_url()?>assets/frontend/<?=base_url()?>assets/frontend/<?= base_url()?>assets/frontend/images/portfolio/fuji.jpg"
								 srcset="<?= base_url()?>assets/frontend/images/portfolio/fuji.jpg 1x, images<?= base_url()?>assets/frontend//portfolio/fuji@2x.jpg 2x" alt="">
						</a>
					</div>

					<div class="item-folio__text">
						<h3 class="item-folio__title">
							Fuji
						</h3>
						<p class="item-folio__cat">
							Web Design
						</p>
					</div>

					<a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
						Project Link
					</a>

					<span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

				</div> <!-- end item-folio -->
			</div> <!-- end masonry__brick -->

			<div class="masonry__brick" data-aos="fade-up">
				<div class="item-folio">

					<div class="item-folio__thumb">
						<a href="<?=base_url()?>assets/frontend/images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
							<img src="<?=base_url()?>assets/frontend/<?=base_url()?>assets/frontend/<?= base_url()?>assets/frontend/images/portfolio/shutterbug.jpg"
								 srcset="<?= base_url()?>assets/frontend/images/portfolio/shutterbug.jpg 1x, <?= base_url()?>assets/frontend/images/portfolio/shutterbug@2x.jpg 2x" alt="">
						</a>
					</div>

					<div class="item-folio__text">
						<h3 class="item-folio__title">
							Lady Shutterbug
						</h3>
						<p class="item-folio__cat">
							Branding
						</p>
					</div>

					<a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
						Project Link
					</a>

					<span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

				</div> <!-- end item-folio -->
			</div> <!-- end masonry__brick -->

		</div> <!-- end masonry -->
	</div> <!-- end masonry-wrap -->

	<div class="testimonials-wrap" data-aos="fade-up">

		<div class="row">
			<div class="col-full testimonials-header">
				<h2 class="h1">What Clients Are Saying.</h2>
			</div>
		</div>

		<div class="row testimonials">

			<div class="col-full testimonials__slider">

				<div class="testimonials__slide">
					<img src="<?= base_url()?>assets/frontend/images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
					<p>Qui ipsam temporibus quisquam velMaiores eos cumque distinctio nam accusantium ipsum.
						Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium quos qui praesentium corpori.</p>
					<div class="testimonials__author">
						Tim Cook
						<span>CEO, Apple</span>
					</div>
				</div> <!-- end testimonials__slide -->

				<div class="testimonials__slide">
					<img src="<?= base_url()?>assets/frontend/images/avatars/user-05.jpg" alt="Author image" class="testimonials__avatar">
					<p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
						Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus quisquam vel.</p>
					<div class="testimonials__author">
						Sundar Pichai
						<span>CEO, Google</span>
					</div>
				</div> <!-- end testimonials__slide -->

				<div class="testimonials__slide">
					<img src="<?= base_url()?>assets/frontend/images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
					<p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.
						Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>
					<div class="testimonials__author">
						Satya Nadella
						<span>CEO, Microsoft</span>
					</div>
				</div> <!-- end testimonials__slide -->

			</div> <!-- end testimonials__slider -->

		</div> <!-- end testimonials -->

	</div> <!-- end testimonials-wrap -->

</section> <!-- end s-works -->


<!-- stats
================================================== -->
<section id="stats" class="s-stats">

	<div class="row stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">

		<div class="col-block stats__col ">
			<div class="stats__count">129</div>
			<h5>Awards Received</h5>
		</div>
		<div class="col-block stats__col">
			<div class="stats__count">1507</div>
			<h5>Cups of Coffee</h5>
		</div>
		<div class="col-block stats__col">
			<div class="stats__count">108</div>
			<h5>Projects Completed</h5>
		</div>
		<div class="col-block stats__col">
			<div class="stats__count">103</div>
			<h5>Happy Clients</h5>
		</div>

	</div> <!-- end stats -->

</section> <!-- end s-stats -->


<!-- contact
================================================== -->
<section id="contact" class="s-contact">

	<div class="row section-header" data-aos="fade-up">
		<div class="col-full">
			<h3 class="subhead subhead--light">Contact Us</h3>
			<h1 class="display-1 display-1--light">Get in touch and let's make something great together. Let's turn your idea on an even greater product.</h1>
		</div>
	</div> <!-- end section-header -->

	<div class="row">

		<div class="col-full contact-main" data-aos="fade-up">
			<p>
				<a href="mailto:#0" class="contact-email">hello@transcend-studio.com</a>
				<span class="contact-number">+1 (917) 123 456  /  +1 (917) 333 987</span>
			</p>
		</div> <!-- end contact-main -->

	</div> <!-- end row -->

	<div class="row">

		<div class="col-five tab-full contact-secondary" data-aos="fade-up">
			<h3 class="subhead subhead--light">Where To Find Us</h3>

			<p class="contact-address">
				1600 Amphitheatre Parkway<br>
				Mountain View, CA<br>
				94043 US
			</p>
		</div> <!-- end contact-secondary -->

		<div class="col-five tab-full contact-secondary" data-aos="fade-up">
			<h3 class="subhead subhead--light">Follow Us</h3>

			<ul class="contact-social">
				<li>
					<a href="#0"><i class="fab fa-facebook"></i></a>
				</li>
				<li>
					<a href="#0"><i class="fab fa-twitter"></i></a>
				</li>
				<li>
					<a href="#0"><i class="fab fa-instagram"></i></a>
				</li>
				<li>
					<a href="#0"><i class="fab fa-behance"></i></a>
				</li>
				<li>
					<a href="#0"><i class="fab fa-dribbble"></i></a>
				</li>
			</ul> <!-- end contact-social -->

			<div class="contact-subscribe">
				<form id="mc-form" class="group mc-form" novalidate="true">
					<input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
					<input type="submit" name="subscribe" value="Subscribe">
					<label for="mc-email" class="subscribe-message"></label>
				</form>
			</div> <!-- end contact-subscribe -->
		</div> <!-- end contact-secondary -->

	</div> <!-- end row -->

	<div class="row">
		<div class="col-full cl-copyright">
                <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
		</div>
	</div>

	<div class="cl-go-top">
		<a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
	</div>

</section> <!-- end s-contact -->


<!-- photoswipe background
================================================== -->
<div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

	<div class="pswp__bg"></div>
	<div class="pswp__scroll-wrap">

		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>

		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
				"Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
				"Zoom in/out"></button>
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div>
			</div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
			"Next (arrow right)"></button>
			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>
		</div>

	</div>

</div> <!-- end photoSwipe background -->


<!-- preloader
================================================== -->
<div id="preloader">
	<div id="loader">
	</div>
</div>


<!-- Java Script
================================================== -->
<script src="<?=base_url()?>assets/frontend/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url()?>assets/frontend/js/plugins.js"></script>
<script src="<?=base_url()?>assets/frontend/js/main.js"></script>
<script type="text/javascript">
	var slideIndex = 1;
	showSlides(slideIndex);

	// Next/previous controls
	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active";
	}
</script>

</body>

</html>
