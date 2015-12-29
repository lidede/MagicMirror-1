<html>
<head>
	<title>Magic Mirror</title>
	<style type="text/css">
		<?php include('css/main.css') ?>
		<?php include('css//mbta-icons.css') ?>
	</style>
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<script type="text/javascript">
		var gitHash = '<?php echo trim(`git rev-parse HEAD`) ?>';
	</script>
	<meta name="google" value="notranslate" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>

	<div class="top left">
		<div class="date small dimmed"></div>
		<div class="time"></div>
		<div class="holidays xxsmall dimmed"></div>
		<div class="calendar xxsmall"></div>
		<div class="mbta xxxsmall dimmed"></div>
	</div>

	<div class="top right">
	    <div class="windsun small dimmed"></div>
		<div class="temp"></div>
		<div class="tempgraph"></div>
		<!-- <div class="forecast small dimmed"></div>  Old table method; replaced with weekgraph SVG -->
		<div class="weekgraph"></div>
		<div class="summary xxsmall2 dimmed"></div>
		<div class="weatheralerts xxsmall2 dimmed"></div>
	</div>

	<div class="farbottom right">
		<div class="lastupdated luWeather xxxsmall xxdimmed"></div>
		<div class="lastupdated luMBTA xxxsmall xxdimmed"></div>
		<div class="lastupdated luRSS xxxsmall xxdimmed"></div>
	</div>

	<div class="center-ver center-hor">
		<!-- <div class="dishwasher light">Vaatwasser is klaar!</div> -->
	</div>

	<div class="lower-third center-hor">
		<div class="compliment light"></div>
	</div>

	<div class="bottom center-hor">
		<div class="news medium"></div>
	</div>

</div>

<script src="js/jquery.js"></script>
<script src="js/ical_parser.js"></script>
<script src="js/moment-with-locales.js"></script>
<script src="js/config.js"></script>
<script src="js/rrule.js"></script>
<script src="js/d3.js"></script>
<script src="js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>
<!-- <script src="js/socket.io.min.js"></script> -->

</body>
</html>
