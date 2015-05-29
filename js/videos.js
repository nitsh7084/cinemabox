
$(document).ready(function(){

$('.video_container').addClass('show_video');

$('.english_tab').bind('click',function(){
$('.content_tab').removeClass('selected');
$('.videos_content').html('');
for(var i=0;i<6;i++){
$('.videos_content').append('<a href="video.php?video=english"><div class="video_container video_container'+i+'"><div class="video_container_image"><img src="anchorman2.jpg" /></div><div class="video_container_title">Anchorman 2</div></div></a>');
}
$(this).addClass('selected');
$('.video_container').addClass('show_video');
});

$('.hindi_tab').bind('click',function(){
$('.content_tab').removeClass('selected');
$('.videos_content').html('');
for(var i=0;i<6;i++){
$('.videos_content').append('<a href="video.php?video=hindi"><div class="video_container video_container'+i+'"><div class="video_container_image"><img src="2states.jpg" /></div><div class="video_container_title">2 States</div></div></a>');
}
$(this).addClass('selected');
$('.video_container').addClass('show_video');
});

$('.regional_tab').bind('click',function(){
$('.content_tab').removeClass('selected');
$('.videos_content').html('');
for(var i=0;i<6;i++){
$('.videos_content').append('<a href="video.php?video=regional"><div class="video_container video_container'+i+'"><div class="video_container_image"><img src="lucia.jpg" /></div><div class="video_container_title">Lucia</div></div></a>');
}
$(this).addClass('selected');
$('.video_container').addClass('show_video');
});


$('.video_order_button').bind('click',function(){
window.location.href = 'http://localhost/cinemabox/sms.php';
});



});