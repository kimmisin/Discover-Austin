<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Braden Wu </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Braden Wu">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href = "starter.css" rel = "stylesheet">
	<link href = "locationList.css" rel ="stylesheet">
	<script src="searchBar.js"></script>
	<script src = "colors.js"></script>
	<script src = "eventheodds.js"></script>
	<!--add additonal js or css as needed-->
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
			<h1> Indoor Locations </h1>
			<div class = "activity">
				<img src = "https://www.thestoryoftexas.com/upload/images/visit/bullock-exterior.jpg?1453143330" alt = "Bullock Museum" width = "300" height = "200">
				<div class = "text">
					<h3> Bullock Texas State History Museum </h3>
					<p> History Museum located within the Capitol District </p>
					<p> <strong> Tags: </strong> Indoors, Museum, Theatre </p>
					<a class = "readmore" href = "bullock.php"> Read More! </a>
				</div>
			</div>
			
			<div class = "activity">
				<img src = "https://media.kvue.com/assets/KVUE/images/fe3527e0-ec33-479f-a42a-bc850b4767f5/fe3527e0-ec33-479f-a42a-bc850b4767f5_1920x1080.jpg" alt = "Blanton Museum" width = "300" height = "200">
				<div class = "text">
					<h3> Blanton Museum of Art </h3>
					<p> Art Museum located on the UT Campus </p>
					<p> <strong> Tags: </strong> Indoors, Art, Museum </p>
					<a class = "readmore" href = "blanton.php"> Read More! </a>
				</div>
			</div>

			<div class = "activity">
				<img src = "https://assets.simpleviewinc.com/simpleview/image/fetch/c_limit,q_75,w_1200/https://assets.simpleviewinc.com/simpleview/image/upload/crm/austin/museum-of-the-weird-ee8d7831042d4ba_ee8d7949-d7f3-bd48-21ac6cb9d2b50163.jpg" alt = "Museum of the Weird" width = "300" height = "200">
				<div class = "text">
					<h3> Museum of the Weird </h3>
					<p> This museum houses a unique collection of weird items for all to enjoy </p>
					<p> <strong> Tags: </strong> Indoors, Museum </p>
					<a class = "readmore" href = "weird.php"> Read More! </a>
				</div>
			</div>
			
			<div class = "activity">
				<img src = "data:image/jpeg;base64,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" alt = "Thinkery" width = "300" height = "200">
				<div class = "text">
					<h3> Thinkery </h3>
					<p> Austin's favorite children's museum that houses creative and stimulating exhibits. </p>
					<p> <strong> Tags: </strong> Indoors, Museum </p>
					<a class = "readmore" href = "thinkery.php"> Read More! </a>
				</div>
			</div>

			<div class = "activity">
				<img src = "https://assets.simpleviewinc.com/simpleview/image/fetch/c_fill,h_594,q_75,w_800/https://assets.simpleviewcms.com/simpleview/image/upload/v1/clients/austin/Texas_State_Capitol_South_Facade_2015_Courtesy_of_the_Texas_State_Preservation_Board_FOR_ACVB_USE_ONLY_2_5475363b-0fb9-4455-9d69-037c8f7f2aa1.jpg" alt = "McKinney Falls State Park" width = "300" height = "200">
				<div class = "text">
					<h3> Texas State Capitol </h3>
					<p> Come visit the seat of Texas's Government </p>
					<p> <strong> Tags: </strong> Indoors, Museum, Nature </p>
					<a class = "readmore" href = "capitol.php"> Read More! </a>
				</div>
			</div>
		</div>

		<div id = "footer">
			Kimmi Sin | Last Updated: 05/04/2021
		</div>
	</div>

</body>
</html>
page;
?>