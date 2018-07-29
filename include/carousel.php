

<link rel="stylesheet" type="text/css" href="css/carousel.css" rel="stylesheet" type="text/css" >
<script src="js/jquery.min.js" type="text/javascript" ></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>


	<div class="container-fluid">
        
		<div class="container" id="coe">
		<center><h1>Centres of Excellence</h1>
		<h4>Combining the best specialists and equipments to provide you nothing short of the best in healthcare</h4></center>
			<div id="button" class="mb1"></div>
			<section class="customer-logos slider" id="section">
				<div class="slide">
					<img src="images/img1.png" style="width: 120px !important">
						<center>
							<h4>Preventive Medicine</h4>
						</center>
				</div>
				<div class="slide">
					<img src="images/img2.png" style="width: 120px !important">
						<center>
							<h4>Spine</h4>
						</center>
				</div>
				<div class="slide">
					<img src="images/img3.png" style="width: 120px !important">
						<center>
							<h4>Cancer care</h4>
						</center>
				</div>
				<div class="slide">
					<img src="images/img4.png" style="width: 120px !important">
						<center>
							<h4>Bariatric Surgery</h4>
						</center>
				</div>
				<div class="slide">
					<img src="images/img5.png" style="width: 120px !important">
						<center>
							<h4>Orthopaedics</h4>
						</center>
				</div>
				<div class="slide">
					<img src="images/img6.png" style="width: 120px !important">
						<center>
							<h4>Neurosciences</h4>
						</center>
				</div>
				<div class="slide">
					<img src="images/img7.png" style="width: 120px !important">
						<center>
							<h4>Heart</h4>
						</center>
				</div>
				<div class="slide">
					<img src="images/img8.png" style="width: 120px !important">
						<center>
							<h4>Emergency</h4>
						</center>
				</div>
			</section>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function()
		{
			

			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
				arrows: true,
				dots: false,
                nextArrow: '<button id="next" type="button" data-role="none" class="slick-next butt " aria-label="Next" tabindex="0" role="button"><i class="fa fa-angle-double-right mb1"></i></button>',
                prevArrow: '<button id="prev"  type="button" data-role="none" class="slick-prev butt mr1" aria-label="Previous" tabindex="0" role="button"><i class="fa fa-angle-double-left mb1"></i></button>',
                
					pauseOnHover: true,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
			$('#next').prependTo('#button');
			$('#prev').prependTo('#button');
		});
	</script>
