<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Project Homepage </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Braden Wu, Brinnah Welmaker">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href = "starter.css" rel = "stylesheet">
	<link href = "home.css" rel = "stylesheet">
	<script src="eventheodds.js"></script>
	<script src="searchBar.js"></script>
	<script src = "colors.js"></script>
	<script src = "home.js"></script>
</head>

<body onload = "changeImage()" id = "body">
<div id = "container">
		<!-- includes: logo, banner -->
        <div id = "top">
            <div id = "logo_set">
                <img id = "logo" src = "logo.png" alt = "UTag Logo">
                <p id = "utag">UTag</p>
                <p id = "phrase">University of Texas at Austin Guide</p>
            </div>
        	<img id = "banner" src = "home.jpg" alt = "UT Campus Image">
        </div>

		<div id = "menu">		
			<!-- even the odds functionality -->
			<a id="randomLocation" href='#' onclick="eventheodds();">Even the Odds</a>
			<div class = "dropdown">
				<form class = "dropbutton" action = "activitiesList.php" method = "get">
                    <button>Activity Type</button>
            	</form>
				<div class = "activitycontent">
					<ul>
						<li><a href = "outdoor.php">Outdoor Activities</a></li>
						<li><a href = "indoor.php">Indoor Activities</a></li>
						<li><a href = "entertainment.php">Entertainment</a></li>
						<li><a href = "study.php">Study Spots</a></li>
						<li><a href = "dining.php">Dining</a></li>
						<li><a href = "sports.php">Sports</a></li>
					</ul>
				</div>
			</div>
			<a href = "about.php">About Us</a>
			<a href = "resources.php">Resources</a>
			<a href = "suggestionsPage.php">Suggestions</a>
			<a href = "favorites.php">Favorites</a>	
			<a href = "color.php">Page Customization</a>
			<div id="searchbar">
            	<button id="searchButton" onclick="expandSearchBar();"><i id="icon" class="fa fa-search"></i></button>
                <form id="searchForm" method="POST" action="search.php">
                    <input id="searchbox" name="searchbox" type="text" placeholder="search tag" >
                </form>
            </div>
		</div>

		<div id = "content">
<?php
	if (isset($_COOKIE["color"])){
		$value = $_COOKIE["color"];
		if ($value == "Night Mode"){
			echo "<script> setNight(); </script>";
		}else{
			echo "<script> setDay(); </script>";		
		}
	}
	
	if (isset($_COOKIE["text"])){
		$value = $_COOKIE["text"];
		if ($value == "black"){
			echo "<script> textBlack(); </script>";
		}else if ($value == "white"){
			echo "<script> textWhite(); </script>";		
		}else if ($value == "red"){
			echo "<script> textRed(); </script>";		
		}else if ($value == "blue"){
			echo "<script> textBlue(); </script>";		
		}else{
			echo "<script> textOrange(); </script>";		
		}
	}

print<<<page
	
			<div id = "intro">
				<h1> Discover Austin </h1>
				<p> The ultimate guide for UT students to find hot spots for every activity type. Keep up to date with the newest attractions for friend gatherings, study dates, sport days, and much more! </p>
			</div>

			<div class  = "slideshow">
				<a id = "slidelink" href = "franklins.php">
					<img id= "slideimage" src = "franklins1.jpg" alt = "Image">
				</a>
				<a class = "readmore" href = "franklins.php" id="slidecaption" >Franklins BBQ</a>
             </div>

			<div id="smallGroup">
				<div class = "smallPic">
					<a href = "mayfield.php">
						<img src = "https://assets.simpleviewinc.com/simpleview/image/fetch/c_fill,h_362,q_75,w_545/https://assets.simpleviewinc.com/simpleview/image/upload/crm/austin/011-59d14229c0b1cb6_59d14302-fcb3-c720-9ce131a92a6973d4.jpg" alt = "Mayfield Park and Preserve">
					</a>
					<div class = "text">
						<h3> Mayfield Park and Preserve </h3>
						<p> Botannic garden, Peacock, Koi fish viewing, and Hiking trails </p>
						<a class = "readmore" href = "mayfield.php"> Read More about Mayfield Park! </a>
					</div>
				</div>

				<div class = "smallPic">
					<a href = "zilker.php">
						<img src = "https://www.tripsavvy.com/thmb/nMZ2mxnD4iYiDdjBv7I_zdvUhf4=/3924x2207/smart/filters:no_upscale()/GettyImages-500491816-5a830da3c6733500377bd4e4.jpg" alt = "Zilker Park">
					</a>
					<div class = "text">
						<h3> Zilker Park </h3>
						<p> Hiking, Frisbee, Pinic site, Biking, Swimming, Camping, Waterfalls </p>
						<a class = "readmore" href = "zilker.php"> Read More about Zilker Park! </a>
					</div>
				</div>
				
				<div class = "smallPic">
					<a href = "waterloo.php">
						<img src = "https://assets.simpleviewinc.com/simpleview/image/fetch/c_fill,h_396,q_75,w_704/https://assets.simpleviewinc.com/simpleview/image/upload/crm/austin/WATERLOO-1-e051636c052bc64_e05164b2-b104-67f5-b39afc9b117be7a7.jpg" alt = "Lake Travis Waterloo Adventures">
					</a>
					<div class = "text">
						<h3> Lake Travis Waterloo Adventures </h3>
						<p> Floating Water Park with an Obstacle Courses, Lounges, and Pinic areas </p>
						<a class = "readmore" href = "waterloo.php"> Read More about Waterloo Adventures! </a>
					</div>
				</div>

				<div class = "smallPic">
					<a href = "mckinney.php">
						<img src = "mckinney1.jpg" alt = "McKinney Falls State Park">
					</a>
					<div class = "text">
						<h3> McKinney Falls State Park </h3>
						<p> Camping, Fishing, Hiking, Pinic, Geocaching, Biking, and Swimming site </p>
						<a class = "readmore" href = "mckinney.php"> Read More about McKinney Falls! </a>
					</div>
				</div>
			</div>
			</div>

		<div id = "footer">
			Braden Wu | Brinnah Welmaker | Kimmi Sin | Last Updated: 04/25/2021
		</div>
		
		</div>

		

</body>
</html>
page;
?>

