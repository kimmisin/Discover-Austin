<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Museum of the Weird </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Braden Wu">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "starter.css" rel = "stylesheet">
	<link href = "location.css" rel = "stylesheet">
	<script src="searchBar.js"></script>
	<script src = "location.js" defer> </script>
	<script src = "colors.js"></script>
	<script src = "eventheodds.js"></script>
</head>

<body id = "body">
<?php
	if (isset($_COOKIE["color"])){
		$value = $_COOKIE["color"];
		if ($value == "Night Mode"){
			echo "<script> setNight(); </script>";
		}else{
			echo "<script> setDay(); </script>";		
		}
	}

print<<<page

	<div id = "container">
		<!-- includes: logo, banner -->
                <div id = "top">
                        <div id = "logo_set">
				<a href = "home.php" style="text-decoration:none; color:inherit;">
                                <img id = "logo" src = "logo.png" alt = "UTag Logo">
                                <p id = "utag">UTag</p>
                                <p id = "phrase">University of Texas at Austin Guide</p>
                        </div>
                <img id = "banner" src = "home.jpg" alt = "UT Campus Image">
                </div>

		<div id = "menu">		
			<!-- even the odds functionality -->
			<a href = "home.php">Home</a>
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
                    <input id="searchbox" type="text" placeholder="search" >
                </form>
            </div>
		</div>

		<form>

		<div id = "content">
			<h1> Museum of the Weird </h1>
			<div class = "bigPic">
				<img src = "weird1.jpg" id = "big" height = "400" width = "700">
			</div>
			<div class = "smallPic">
				<img src = "weird2.jpg" id = "small1" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "weird3.jpg" id = "small2" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "weird4.jpg" id = "small3" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "text">
				<p> <strong> Location: </strong> <a href = "https://www.google.com/maps/place/Museum+of+the+Weird/@30.2671713,-97.7408554,17z/data=!3m1!4b1!4m5!3m4!1s0x8644b5a653afdba5:0x90c03c90f426a422!8m2!3d30.2671667!4d-97.7386667"> 412 E 6th St, Austin, TX 78701 </a> </p> 
				<p> </p>
				<p> <strong> What is it?: </strong> Interested in weird objects? If so, this museum is the place for you. Their collection of fascinating objects is sure to keep everyone guessing!</p>
				<p> </p>
				<p> <strong> Things to do: </strong> Museum, Oddities </p>
				<p> </p>
				<p> <strong> Our Rating: </strong> Highly Recommended! </p>
				<p> </p>
				<p> <strong> Tags: </strong> Indoors</p>
			<form action = 'addfavorite.php' method = 'POST'>
                                <input type = 'hidden' name = 'link' value = '6th.php'/>
                                <input type = 'submit' name = 'submit' value = "Add to Favorites"/>
                        </form>

			</div>

		</div>

		</form>
		
		<div id = "footer">
			Braden Wu | Last Updated: 03/10/2021
		</div>
	</div>

</body>
</html>
page;
?>