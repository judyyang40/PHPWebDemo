<!DOCTYPE html>
<html>
 <head>
	<title>About Us | Ms. Brown's Chocolates</title>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="style.css" rel="stylesheet" type="text/css"/>
 </head>
 <body style="background-color: #f9cccc;">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
		    	<a class="navbar-brand" href="#">Ms. Brown's</a>
		    </div>
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contacts.php">Contacts</a></li>
				<li><a href="login.php">Admin</a></li>
				<li><a href="user.php">User</a></li>
				<li><a href="allusers.php">All Users</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<h1 class="about-header">About Ms. Brown and the Chocolate Company</h1>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
		    <div class="col-md-5 about about-left">
		    	<img class="image-slide img-responsive" src="img/chocolatefactory.jpg">
		    	<img class="image-slide img-responsive" src="img/chocolatefactory2.jpg">
		    	<img class="image-slide img-responsive" src="img/chocolatefactory3.jpg">
		    	<img class="image-slide img-responsive" src="img/chocolatefactory4.jpg">
		    </div>
		    <div class="col-md-5 about about-right">
		    	Ms. Brown's Chocolate is an international franchisor, confectionery manufacturer and retail operator in the United States, Canada and Japan. The company is based in California.
		    	<br><br>
				From its 53,000-square-foot factory, the company manufactures an extensive line of premium chocolate candies and other confectionery products to supply its many franchise locations, delivered fresh by its fleet of refrigerated trucks. The factory typically produces approximately 300 chocolate candies and other confectionery products, using proprietary recipes developed primarily by its master candy maker. These products include many varieties of clusters, caramels, creams, meltaways, truffles and molded chocolates. Individual stores prepare a variety of caramel and candy apples, fudge, chocolate items and confections in full view of the customer using traditional cooking utensils such as copper kettles on gas-fired stoves and marble slab cooling tables.

			</div>
		    <div class="col-md-1"></div>
		</div>
	</div>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("image-slide");
		    for (i = 0; i < x.length; i++) {
		       x[i].style.display = "none";
		    }
		    myIndex++;
		    if (myIndex > x.length) {myIndex = 1}
		    x[myIndex-1].style.display = "block";
		    setTimeout(carousel, 4000); // Change image every 2 seconds
		}
	</script>
 </body>
</html>