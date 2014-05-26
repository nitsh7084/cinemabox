<?php 

$video = "";
$video_name = "";

if(isset($_GET['video'])){

$video = $_GET['video'];

}


?>


<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="videos.css" />
<link rel="stylesheet" type="text/css" href="sms.css" />
</head>

<body>

<div class="container">

<?php require_once('header.php'); ?>

<div class="content_container">
<div class="top_container">
<a href="video.php?video=<?php echo $video; ?>" class="top_back_link">Back</a>
2 States
</div>
<div class="movie_content_container">

<div class="payment_container">
Payment Options
</div>

<div class="payment_list_container">
<ol class="payment_list">
<li>Pay Rs.100 in cash</li>
<li>SMS "watch 1" to XXX and Rs.50 will be charged through your mobile operator</li>
</ol>
</div>

<div class="payment_start_container">
<div class="start_head">
<div class="start_head_start">
To start watching enter
</div>
<form action="video1.php?video=2 states" method="post">
<ul>
<li>
<label>Mobile Number</label>
<input type="text" name="mobile_text" class="mobile_text" />
</li>
<li>
<label>Code</label>
<input type="password" name="code_text" class="code_text" />
</li>
<li>
<input type="submit" name="list_submit" class="list_submit" value="Submit" />
</li>
</ul>
</form>
</div>
</div>

</div>
</div>

</div>

</body>
</html>