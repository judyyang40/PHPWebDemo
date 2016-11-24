<!DOCTYPE html>
<html>
<head>
	<title>Our Products | Ms. Brown's Chocolates</title>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background-color: #FFE1B1;">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
		    	<a class="navbar-brand" href="#">Ms. Brown's</a>
		    </div>
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contacts.php">Contacts</a></li>
				<li><a href="login.php">Admin</a></li>
				<li><a href="user.php">User</a></li>
				<li><a href="allusers.php">All Users</a></li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid" style="margin-top: 4%;">
		<div class="row">
			<div class="container">
				<div class="row product-top"><h1>Our Products</h1></div>
				<div class="row">
					<a href="products/product1.php"><div class="col-md-2 product-cell product-1">
						<div class="product-overlay">
							<div class="product-name-overlay">Ms. Brown's Milk Chocolate Bar</div>
						</div>
						<img class="img-responsive product-img" num="1" src="img/product.jpg">
					</div></a>
					<a href="products/product2.php"><div class="col-md-2 product-cell">
						<div class="product-overlay">
							<div class="product-name-overlay">Lucy Brown's Chocolate Cookies</div>
						</div>
						<img class="img-responsive product-img" num="2" src="img/product2.jpg">
					</div></a>
					<a href="products/product3.php"><div class="col-md-2 product-cell">
						<div class="product-overlay">
							<div class="product-name-overlay">Ms. Brown's Creme Chocolate Cookies</div>
						</div>
						<img class="img-responsive product-img" num="3" src="img/product3.jpg">
					</div></a>
					<a href="products/product4.php"><div class="col-md-2 product-cell">
						<div class="product-overlay">
							<div class="product-name-overlay">Ms. Brown's Petite Chocolate Bites</div>
						</div>
						<img class="img-responsive product-img" num="4" src="img/product4.jpg">
					</div></a>
					<a href="products/product5.php"><div class="col-md-2 product-cell">
						<div class="product-overlay">
							<div class="product-name-overlay">Brown Factory Chocolate Tubes</div>
						</div>
						<img class="img-responsive product-img" num="5" src="img/product5.jpg">
					</div></a>
					<a href="products/product6.php"><div class="col-md-2 product-cell product-6">
						<div class="product-overlay">
							<div class="product-name-overlay">Ms. Brown's Milk/Dark Chocolate</div>
						</div>
						<img class="img-responsive product-img" num="6" src="img/product6.jpg">
					</div></a>
				</div>
				<div class="row" style="background-color: #dcdcdc;">
					<a href="products/product7.php"><div class="col-md-2 product-cell">
						<div class="product-overlay">
							<div class="product-name-overlay">Ms. Brown's Galaxy Smooth Milk Chocolates</div>
						</div>
						<img class="img-responsive product-img" num="7" src="img/product7.jpg">
					</div></a>
					<a href="products/product8.php"><div class="col-md-2 product-cell">
						<div class="product-overlay">
							<div class="product-name-overlay">Ms. Brown's Caramel-filled Turtles</div>
						</div>
						<img class="img-responsive product-img" num="8" src="img/product8.jpg">
					</div></a>
					<a href="products/product9.php"><div class="col-md-2 product-cell">
						<div class="product-overlay">
							<div class="product-name-overlay">Continental Almond Chocolate Bars</div>
						</div>
						<img class="img-responsive product-img" num="9" src="img/product9.jpg">
					</div></a>
					<a href="products/product10.php"><div class="col-md-2 product-cell">
						<div class="product-overlay">
							<div class="product-name-overlay">Ms. Brown's White Chocolate Squares</div>
						</div>
						<img class="img-responsive product-img" num="10" src="img/product10.jpg">
					</div></a>
				</div>
				<div class="row product-bottom">
					<div class="col-md-4"><a href="products/previous.php"><h2>Your Previous Visits</h2></a></div>
					<div class="col-md-4"><a href="mostvisited.php"><h2>Most Visited Products</h2></a></div>
				</div>
			</div>
		</div>
	</div>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script type="text/javascript">
		$(".product-img").click(function() {
			$(".active-product").removeClass("active-product");
			var num = $(this).attr("num");
			$("#product-"+num).addClass("active-product");
			$(".content").css("opacity", 0)
			$(".active-product>.content").css("opacity", 1);
		});
	</script>
</body>
</html>