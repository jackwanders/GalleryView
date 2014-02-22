<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GalleryView - Default Demo</title>

<!-- First, add jQuery (and jQuery UI if using custom easing or animation -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

<!-- Second, add the Timer and Easing plugins -->
<script type="text/javascript" src="../js/jquery.timers-1.2.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>

<!-- Third, add the GalleryView Javascript and CSS files -->
<script type="text/javascript" src="../js/jquery.galleryview-3.0-dev.js"></script>
<link type="text/css" rel="stylesheet" href="../css/jquery.galleryview-3.0-dev.css" />

<!-- Lastly, call the galleryView() function on your unordered list(s) -->
<script type="text/javascript">
	$(function(){
		$('#myGallery').galleryView({
			
		panel_width: 696, 				//INT - width of gallery panel (in pixels)
		panel_height: 471, 				//INT - height of gallery panel (in pixels)
		panel_scale: 'fit', 			//STRING - cropping option for panel images (crop = scale image and fit to aspect ratio determined by panel_width and panel_height, fit = scale image and preserve original aspect ratio)
		overlay_opacity: 0.5
		});
	});
</script>
</head>
<body>
 

  <?php
$folder = 'images/';
$filetype = '*.*';
$files = glob($folder.$filetype);
$count = count($files);
echo '<ul id="myGallery">';
for ($i = 0; $i < $count; $i++) {
    echo '<li><img src="'.$files[$i].'" /></li>';
    echo substr($files[$i],strlen($folder),strpos($files[$i], '.')-strlen($folder));
    }
echo '</ul>';
?>
</body>
