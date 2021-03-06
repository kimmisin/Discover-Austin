<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Dining </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Braden Wu">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href = "starter.css" rel = "stylesheet">
	<link href = "locationList.css" rel ="stylesheet">
	<script src = "searchBar.js"></script>
	<script src = "colors.js"></script>
	<script src = "eventheodds.js"></script>
	<!-- add js or css files as needed-->
</head>

<body id = "body">

	<div id = "container">
		<!-- includes: logo, banner -->
        <div id = "top">
            <div id = "logo_set">
				<a href = "home.php" style="text-decoration:none; color:inherit;">
	                <img id = "logo" src = "logo.png" alt = "UTag Logo">
	                <p id = "utag">UTag</p>
	                <p id = "phrase">University of Texas at Austin Guide</p>
	            </a>
            </div>
       		<img id = "banner" src = "home.jpg" alt = "UT Campus Image">
        </div>

		<div id = "menu">
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
			<h1> Dining </h1>
			<div class = "activity">
				<img src = "https://media.bizj.us/view/img/11097933/home-slice*1024xx604-340-0-23.jpg" alt = "Homeslice" width = "300" height = "200">
				<div class = "text">
					<h3> Homeslice Pizza </h3>
					<p> Austin's Premiere Pizza Restaurant </p>
					<p> <strong> Tags: </strong> Dining </p>
					<a class = "readmore" href = "homeslice.php"> Read More! </a>
				</div>
			</div>
			
			<div class = "activity">
				<img src = "https://upload.wikimedia.org/wikipedia/commons/e/ea/Gus%E2%80%99s_World_Famous_Fried_Chicken.jpg" alt = "Gus" width = "300" height = "200">
				<div class = "text">
					<h3> Gus's World Famous Fried Chicken </h3>
					<p> Some of the best fried chicken you'll find in Austin </p>
					<p> <strong> Tags: </strong> Dining </p>
					<a class = "readmore" href = "gus.php"> Read More! </a>
				</div>
			</div>

			<div class = "activity">
				<img src = "https://static.spacecrafted.com/d2d167f24f6d4582b7828211d5661e2e/i/a1ae3a0c00304a0d99bcd7a8470f6e86/2/4SoifmQp45JMgBnHjfgmz/GD%20LOGO.jpg" alt = "Gordoughs" width = "300" height = "200">
				<div class = "text">
					<h3> Gourdough's Public House </h3>
					<p> Donuts and Chicken? You must be dreaming! </p>
					<p> <strong> Tags: </strong> Dining </p>
					<a class = "readmore" href = "gourdoughs.php"> Read More! </a>
				</div>
			</div>
			
			<div class = "activity">
				<img src = "https://media.bizj.us/view/img/11388378/el-patio-exterior*1200xx2048-1152-0-107.jpg" alt = "El Patio" width = "300" height = "200">
				<div class = "text">
					<h3> El Patio Mexican Food </h3>
					<p> Amazing Tex-Mex restaurant located right by UT </p>
					<p> <strong> Tags: </strong> Dining </p>
					<a class = "readmore" href = "patio.php"> Read More! </a>
				</div>
			</div>

			<div class = "activity">
				<img src = "https://upload.wikimedia.org/wikipedia/commons/1/16/Franklin_Barbecue_Austin_About_to_Open.jpg" alt = "Franklin's" width = "300" height = "200">
				<div class = "text">
					<h3> Franklin's Barbeque </h3>
					<p> Yup, this is The Franklin's BBQ. There is a reason why President Obama came here to eat. </p>
					<p> <strong> Tags: </strong> Dining </p>
					<a class = "readmore" href = "franklins.php"> Read More! </a>
				</div>
			</div>
			
		</div>

		<div id = "footer">
			Braden Wu | Last Updated: 05/04/2021
		</div>
	</div>

</body>
</html>
page;
?>