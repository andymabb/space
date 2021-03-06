<?php
$page = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>The Space Yoga Studio, Thame, Oxfordshire - Teachers</title>
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
<?php include("teachers/".htmlspecialchars($_GET["t"]).".php"); ?>
<p class="top"><a href="#" title="Top of the page"><svg class="icon icon-arrow-up2"><use xlink:href="#icon-arrow-up2"></use></svg><span>Top</span></a></p>
</div><!-- .main end -->
</main>

<?php include("inc/footer.php"); ?>
<script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
</body>
</html>