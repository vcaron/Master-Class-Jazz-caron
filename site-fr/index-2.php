<?php
require_once ('header.php');
?>

<!--=======contenu portfolio================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Album</span></h2>
					</header>
				</div>
				<div id="galleryTab">
					<a data-rel="all"  href="javascript:;" role="button" class="filter active btn btn-warning ">Tout</a>
					<a data-rel="2014" href="javascript:;" class="filter btn btn-warning">2014</a>
					<a data-rel="2015" href="javascript:;" class="filter btn btn-warning">2015</a>
					<a data-rel="2016" href="javascript:;" class="filter btn btn-warning">2016</a>
				</div>
				<div class="galleryWrap">
					<a class="fancybox" data-fancybox-group="gallery" data-filter="2014" href="images/2014.jpg"><img src="images/2014_mini.jpg" alt="" /></a>
					<a class="fancybox" data-fancybox-group="gallery" data-filter="2014" href="images/concert.jpg"><img src="images/concert_mini.jpg" alt="" /></a>
					<a class="fancybox" data-fancybox-group="gallery" data-filter="2014" href="images/cours.jpg"><img src="images/cours_mini.jpg" alt="" /></a>
					<a class="fancybox" data-fancybox-group="gallery" data-filter="2014" href="images/cours2.jpg"><img src="images/cours2_mini.jpg" alt="" /></a>
					<a class="fancybox" data-fancybox-group="gallery" data-filter="2014" href="images/jam 2014.jpg"><img src="images/jam 2014_mini.jpg" alt="" /></a>

					<!--video 1-->
						<object type="application/x-shockwave-flash" width="370" height="234" data="http://www.youtube.com/watch?v=MvWd_M3hFnE">
							<param name="movie" value="http://www.youtube.com/watch?v=MvWd_M3hFnE" />
							<param name="wmode" value="transparent" />
						</object>
						<!--[if lte IE 6 ]>
						<embed src="http://www.youtube.com/watch?v=MvWd_M3hFnE" type="application/x-shockwave-flash" wmode="transparent" width="370" height="234"></embed>
						<![endif]-->

					<a class="fancybox" data-fancybox-group="gallery" data-filter="2015" href="images/2015.jpg"><img src="images/2015_mini.jpg" alt="" /></a>
					<a class="fancybox" data-fancybox-group="gallery" data-filter="2015" href="images/conc 2015.jpg"><img src="images/conc 2015_mini.jpg" alt="" /></a>
					<a class="fancybox" data-fancybox-group="gallery" data-filter="2015" href="images/cours 2015.jpg"><img src="images/cours 2015_mini.jpg" alt="" /></a>
					<a class="fancybox" data-fancybox-group="gallery" data-filter="2015" href="images/jam 2015.jpg"><img src="images/jam 2015_mini.jpg" alt="" /></a>
					<!--video 2-->
					<object type="application/x-shockwave-flash" width="370" height="234" data="http://youtu.be/j2Md64VPBVU">
						<param name="movie" value="http://youtu.be/j2Md64VPBVU" />
						<param name="wmode" value="transparent" />
					</object>
					<!--[if lte IE 6 ]>
					<embed src="http://youtu.be/j2Md64VPBVU" type="application/x-shockwave-flash" wmode="transparent" width="370" height="234"></embed>
					<![endif]-->

					<a class="fancybox" data-fancybox-group="gallery" data-filter="2016" href="images/repet.jpg"><img src="images/repet_mini.jpg" alt="" /></a>
					<a class="fancybox" data-fancybox-group="gallery" data-filter="2016" href="images/instru.jpg"><img src="images/instru_mini.jpg" alt="" /></a>
					<!--video 3-->
					<object type="application/x-shockwave-flash" width="370" height="234" data="https://www.youtube.com/watch?v=LLNIonnMeeo">
						<param name="movie" value="https://www.youtube.com/watch?v=LLNIonnMeeo" />
						<param name="wmode" value="transparent" />
					</object>
					<!--[if lte IE 6 ]>
					<embed src="https://www.youtube.com/watch?v=LLNIonnMeeo" type="application/x-shockwave-flash" wmode="transparent" width="370" height="234"></embed>
					<![endif]-->
				</div>
		</div>
	</div>
</section>
	<script>
		jQuery(function($){
			$(".fancybox").fancybox({
				modal: true,
				helpers : { buttons: { } }
			});
			$(".filter").on("click", function () {
				var $this = $(this);
				// if we click the active tab, do nothing
				if (!$this.hasClass("active")) {
					$(".filter").removeClass("active");
					$this.addClass("active"); // set the active tab
					var $filter = $this.data("rel"); // get the data-rel value from selected tab and set as filter
					$filter == 'all' ? // if we select "view all", return to initial settings and show all
							$(".fancybox").attr("data-fancybox-group", "gallery").not(":visible").fadeIn()
							: // otherwise
							$(".fancybox").fadeOut(0).filter(function () {
								return $(this).data("filter") == $filter; // set data-filter value as the data-rel value of selected tab
							}).attr("data-fancybox-group", $filter).fadeIn(1000); // set data-fancybox-group and show filtered elements
				} // if
			}); // on
		}); // ready
	</script>
<?php
require_once ('footer.php');
?>