GalleryView - jQuery Photo Gallery Plugin
Author: Jack Anderson

INSTRUCTIONS FOR USE
---------------------------------
1) Place galleryview-x.x folder somewhere in your website directory structure (you can rename this folder if desired)
2) Include script tags for the desired version of the script (uncompressed, packed) and for the included jQuery Timers and Easing plugin files
3) Include a reference to the jquery.galleryview-x.x.css stylesheet in your document
4) Create an unordered list in your HTML with the content you wish to be displayed in your gallery (see below for more information on markup options
5) Edit the id of the first rule in jquery.galleryview-3.0.css to match the id given to your unordered list
6) Call the GalleryView plugin with the function call below:

	$('#id_of_list').galleryView()

	To override default option values, include them in object literal format in the call to the plugin, like so:
   
	$('#id_of_list').galleryView({
		panel_width: 800,
		panel_height: 600,
		frame_width: 120,
		frame_height: 90
	});
	
	Refer to the uncompressed javascript to see a full list of options, their effects on the plugin and their default values.
	


HTML MARKUP REQUIREMENTS
---------------------------------
Below, I will show you the markup required to produce various types of galleries. After the first example, 
I will exclude the UL wrapper and only show the HTML necessary for a single panel and/or frame.

1) 	Basic slideshow (no added features)
		<ul id="gallery">
			<li><img src="../gv/path/to/image1.jpg" alt="image1" /></li>
			<li><img src="../gv/path/to/image2.jpg" alt="image2" /></li>
			<li><img src="../gv/path/to/image3.jpg" alt="image3" /></li>
			<li><img src="../gv/path/to/image4.jpg" alt="image4" /></li>
		</ul>
	
	This is the simplest gallery one can have. By default, the filmstrip will appear below the panels. The number of frames visible will be
	determined by the size of the panels. If there is enough space in the gallery to fit all the filmstrip frames, the filmstrip will be centered
	within the gallery. If there are too many frames, the additional frames will be hidden from view initially, appearing as the filmstrip slides
	to the left with each transition. Panel and frame dimensions are set via plugin options, as is the location of the filmstrip. It can be set 
	to appear below, above, or to either side of the panels.
	
2) 	Slideshow with custom thumbnails
		
		<li>
			<img src="../gv/path/to/image.jpg" data-frame="../gv/path/to/thumb.jpg" alt="image" />
		</li>
	
	By adding a data-frame attribute with a relative or absolute path to a separate image, GalleryView will use it to populate the thumbnail. This
	can be helpful when using large panel images and small thumbnails to avoid degradation due to scaling.
	
3)	Slideshow with panel overlays
	
		<li>
			<img src="../gv/path/to/image.jpg" alt="image" title="Pretty Picture" data-description="Some more information about the photo" />
		</li>
		
	For this gallery, the contents of the title and data-description attributes will display on top of the panel image, its position determined by the 
	'overlay_position' option. The color of the overlays are  set in the included CSS file.
	
CREATING/USING CUSTOM NAVIGATION THEMES
---------------------------------
GalleryView comes with two themes by default:
	- dark
	- light

The dark themes contain dark navigation buttons and are best used in galleries with light backgrounds. The light themes contain light 
colored images and are best for galleries with dark backgrounds. Both themes also contain oversized panel navigation buttons to demonstrate
GalleryView's ability to use any kind of navigation images you may want to use

To create your own navigation theme, first create the following images:
	- next.png
	- prev.png
	- play.png
	- pause.png
	- panel-nav-next.png
	- panel-nav-prev.png

The images can be of any file type. Then, update the galleryView CSS file with the paths to your new navigation images.


That should hopefully be enough to get you started on the right track. Feel free to experiment and find me on twitter (@jackwanders) 
if you have any questions or comments. Enjoy!