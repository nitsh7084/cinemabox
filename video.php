<?php

$video = "";
$video_title = "";
$video_image = "";

if(isset($_GET['video'])){

$video = $_GET['video'];

switch($video){

case 'english':
$video_title = "Anchorman 2";
$video_image = "anchorman2.jpg";
break;

case 'hindi':
$video_title = "2 States";
$video_image = "2states.jpg";
break;

case 'regional':
$video_title = "Lucia";
$video_image = "lucia.jpg";
break;
}

}



?>


<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="videos.css" />
</head>

<body>

<div class="container">
<?php require_once('header.php'); ?>

<div class="top_container">
<a href="videos.php" class="top_back_link">Back</a>
<?php echo $video_title ?>
</div>

<div class="content_container">
<div class="left_content_container">
<div class="left_content_image_container">
<img src="<?php echo $video_image ?>" />
</div>
</div>
<div class="right_content_container">
<a href="sms.php?video=<?php echo $video ?>"><button name="watch_this_movie" class="video_order_button watch_this_movie">Watch this movie for Rs 50</button></a>
<a href="sms.php?video=<?php echo $video ?>"><button name="get_unlimited_access" class="video_order_button watch_this_movie">Get unlimited access for Rs 100</button></a>
<div class="right_content_info_container">
<h4>Plot Summary</h4>
<div class="right_content_plot">
A story about a romantic journey of a culturally opposite couple Krish Malhotra and Ananya Swaminathan. They meet at the IIM-Ahemedabad College and 
<a href="">Read full summary...</a>
</div>
<div class="right_content_director">
<span class="right_content_head">Director:</span> Abhishek Varman
</div>
<div class="right_content_stars">
<span class="right_content_head">Stars:</span> Arjun Kapoor, Alia Bhatt, Amrita Singh, Revathy <a href="">See full cast>></a>
</div>
</div>
</div>
</div>

</div>


</body>
</html>