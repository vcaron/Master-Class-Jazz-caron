<!--=======footer=================================-->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="grid_12">
				<div class="copyright">
					<pre>© <span id="copyright-year"></span> |  Privacy Policy</pre>
				</div>
			</div>
			</div>

</footer>
<script>
	$(function(){
		$('.isotope a').touchTouch();
	});
</script><script src="js/jquery.js"></script>
	<script src="js/jquery.fancybox-buttons"></script>
<script src="js/jquery.fancybox.pack"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src='js/camera.js'></script>
	<script src="js/touchTouch.jquery.js"></script>
	<script src="js/jquery.stellar.js"></script>
	<script src="js/script.js"></script>
	<script src="js/portfolio.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>

	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/wow.js"></script>
	<script>
$(document).ready(function () {
    if ($('html').hasClass('desktop')) {
        new WOW().init();
		$.stellar({
			horizontalScrolling: false,
			verticalOffset: 20,
			resposive: true,
			hideDistantElements: true,
		});
	}

	$.ajax({
		url:"ajax.php",
		success:function(msg){
			var rows = $.parseJSON(msg);

			$.each(rows, function(index,row){
				var content = "<tr><td>"+row.prenom+"</td><td>"+row.instrument+"</td><td>"+row.morceau+"</td></tr>";

				var elem ="#jams_"+row.jour;
				$(elem).append(content);
			});
		}
	});
});
	//Accordeon des profs
	$( function(){
		$( "#accordion" ).accordion({
		heightStyle: "content"
		});
	});
</script>
<!--=======footer=================================-->
<script>
jQuery(function(){
	jQuery('#camera_wrap').camera({
		height: '68.125%',
		thumbnails: false,
		pagination: true,
		fx: 'simpleFade',
		loader: 'none',
		hover: false,
		navigation: false,
		playPause: false,
		minHeight: "975px",
	});
});
	</script>
<!--script>
	var $container = $('.isotope');
	// init
	$container.on( 'click', '.iso-item', function( event ) {
	  // change size of item via class
	  $( event.target ).toggleClass('gigante');
	  // trigger layout
	  $container.packery();
	  /*$container.packery({
		  itemSelector: 'iso-.item',
		  gutter: 10*/

	});
</script-->
<script type="text/javascript">
	google_api_map_init();
	function google_api_map_init(){
		var map;
		var coordData = new google.maps.LatLng(parseFloat(40.6894388), parseFloat(-73.9036233,10));

		var styleArray = [
			{"featureType":"water","stylers":[{"color":"#021019"}]},
			{"featureType":"landscape","stylers":[{"color":"#08304b"}]},
			{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},
			{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
			{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},
			{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
			{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},
			{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},
			{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},
			{"elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},
			{"featureType":"transit","stylers":[{"color":"#146474"}]},
			{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
			{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]}
		]

		function initialize() {
			var mapOptions = {
				zoom: 12,
				center: coordData,
				scrollwheel: false,
				styles: styleArray
			}

			var contentString = "<div></div>";
			var infowindow = new google.maps.InfoWindow({
				content: contentString,
				maxWidth: 200
			});

			var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);


			google.maps.event.addDomListener(window, 'resize', function() {

				map.setCenter(coordData);

				var center = map.getCenter();
			});
		}

		google.maps.event.addDomListener(window, "load", initialize);

	}
</script>
<script>
	$(function(){
		$('.isotope a').touchTouch();
	});
</script>

</body>
</html>