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
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="product-info active-product" id="product-1">
					<div class="content">
						<h2>Ms. Brown's Milk Chocolate Bar</h2>
						Highest-quality cocoa butter, whole milk powder, and exotic vanilla blend together in a silky smooth baking bar, perfect for making everything from fudgesicles to hot chocolate. Easy-melting, with a consistent texture-the possibilities are endlessly irresistible.
						<div class="product-sm-info">- Milky and rich!<br><br>- Hard-to-resist chocolate!</div>
						<img class="product-sm-img" src="img/product.jpg">
					</div>
				</div>
				<div class="product-info" id="product-2">
					<div class="content">
						<h2>Lucy Brown's Chocolate Cookies</h2>
						Ultimate Chocolate Chip Cookies are big, thick, chewy, soft in the middle, crisp at the edges, and loaded with chocolate chips!
						<div class="product-sm-info">- Very crispy!<br><br>- Just like homemade!</div>
						<img class="product-sm-img" src="img/product2.jpg">
					</div>
				</div>
				<div class="product-info" id="product-3">
					<div class="content">
						<h2>Ms. Brown's Creme Chocolate Cookies</h2>
						The chocolate was rich, the wafer wispy thin. They danced all night under a vanilla bean sky: a wicked combination and a match made in heaven. Enjoy them today!
						<div class="product-sm-info">- Milky and rich!<br><br>- Hard-to-resist chocolate!</div>
						<img class="product-sm-img" src="img/product3.jpg">
					</div>
				</div>
				<div class="product-info" id="product-4">
					<div class="content">
						<h2>Ms. Brown's Petite Chocolate Bites</h2>
						Our Dark Chocolate Brownie Bites are decadently rich and perfectly satisfying. Indulgent dark chocolate will satisfy all of your sweet-tooth cravings, and wrap you in gluten free joy. Sure to be a hit with everyone, you won't be able to resist these moist, fudgy bites of brownie!
						<div class="product-sm-info">- Dark and rich!<br><br>- Easy to bite!</div>
						<img class="product-sm-img" src="img/product4.jpg">
					</div>
				</div>
				<div class="product-info" id="product-5">
					<div class="content">
						<h2>Brown Factory Chocolate Tubes</h2>
						A stick of Dark Chocolate 61% with a unique shape, slim and original, that introduces a new way to enjoy chocolate with finesse and elegance. Delicate sweet bitterness, strong and lingering on the palate.
						<div class="product-sm-info">- Dark, rich chocolate!<br><br>- slim shape!</div>
						<img class="product-sm-img" src="img/product5.jpg">
					</div>
				</div>
				<div class="product-info" id="product-6">
					<div class="content">
						<h2>Ms. Brown's White Chocolate Squares</h2>
						Made of delicious, gluten-free chocolate, this Milk and Dark Chocolate Bar makes life delicious. A heavenly blend of creamy brown sugar covered in milk chocolate and decorated with chocolate rice. 
						<div class="product-sm-info">- Irresistable!<br><br>- Chocolate that makes you happy!</div>
						<img class="product-sm-img" src="img/product6.jpg">
					</div>
				</div>
			</div>
		</div>
		<div class="row products-bottom">
			<div class="col-md-2">
				<img class="img-responsive product-img" num="1" src="img/product.jpg">
			</div>
			<div class="col-md-2">
				<img class="img-responsive product-img" num="2" src="img/product2.jpg">
			</div>
			<div class="col-md-2">
				<img class="img-responsive product-img" num="3" src="img/product3.jpg">
			</div>
			<div class="col-md-2">
				<img class="img-responsive product-img" num="4" src="img/product4.jpg">
			</div>
			<div class="col-md-2">
				<img class="img-responsive product-img" num="5" src="img/product5.jpg">
			</div>
			<div class="col-md-2">
				<img class="img-responsive product-img" num="6" src="img/product6.jpg">
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