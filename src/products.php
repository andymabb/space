<?php
$page = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>The Space Yoga Studio - Products &amp; Publications</title>
<meta name="description" content="The Space Yoga Studio - Yoga publications">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
<link rel="manifest" href="images/favicons/manifest.json">
<link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include("inc/svg.php"); ?>
<?php include("inc/header.php"); ?>

<main>
<div class="main">
<h1>Our Shop</h1>

<div class="products">
	<div class="product" id="one-pose">
		<div class="product-image">
			<img src="images/products/one-pose-a-day.jpg" alt="One Pose a Day">
		</div>
		<div class="prod-body">
			<div class="prod-desc">
				<h2>One Pose a Day</h2>
				<p>Easy to use audio-visual guide in a calendar format covering 31 poses giving you a month of practice material if you practice one pose a day. Created by Fire Angel Yoga.</p>
				<p>* The audio guide is on CD so you can listen and follow your one pose a day</p>
			<div class="price-buy">
				<p class="price">Price: &pound;9.99</p>
				<a class="buy" href="https://clients.mindbodyonline.com/Pages/OnlineStore.aspx?studioid=89204&partnerID=0&catid=">Buy Now</a>
			</div>
			</div>
		</div>
	</div>
	<div class="product" id="keepit">
		<div class="product-image">
			<img src="images/products/keep-it-moving.jpg" alt="Keep it all Moving">
		</div>
		<div class="product-body">
			<div class="prod-desc">
				<h2>Keep it All Moving</h2>
				<p><strong>An exercise routine for the elderly, seated on a chair. CD &amp; illustrated booklet by Cate Wise. </strong></p>
				<p>Help maintain mobility, good posture and mental alertness. An enjoyable and easy to follow exercise routine, inspired by yoga, for the elderly on CD, all practised sitting in a chair. This audio CD is a 30 minute exercise routine based on 8 years of practising with the elderly at Abbeyfield, a residential care home in Buckinghamshire. Ages vary from 80 to 100. Accompanied with a funny illustrated booklet by Cate Wise.</p>
			</div>
			<div class="price-buy">
				<p class="price">&pound;9.99</p>
				<a href="https://clients.mindbodyonline.com/Pages/OnlineStore.aspx?studioid=89204&partnerID=0&catid=" class="buy">Buy Now</a>
			</div>
		</div>
	</div>
</div>


<p class="top"><a href="#" title="Top of the page"><svg class="icon icon-arrow-up2"><use xlink:href="#icon-arrow-up2"></use></svg><span>Top</span></a></p>
</div><!-- .main end -->
</main>

<?php include("inc/footer.php"); ?>
<script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
</body>
</html>