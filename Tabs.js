
$(function(){


function Tabs(){
this.buttons = $('.content_tab');
this.movies_content = $('.videos_content');
}

Tabs.prototype = {

init : function(){
var self = this;
this.buttons.bind('click',function(){
console.log('cd');
var target = $(this).attr('data-target');
this.change(target);
});
},

change : function(target){
if(target == 'english'){
this.movies_content.html('');
for(var i=0;i>6;i++){
this.movies_content.append('<div class="video_container video_container1"><div class="video_container_image"><img src="anchorman2.jpg" /></div><div class="video_container_title">Anchorman 2</div></div>');
}
}else if(target == 'hindi'){
this.movies_content.html('');
for(var i=0;i>6;i++){
this.movies_content.append('<div class="video_container video_container1"><div class="video_container_image"><img src="2states.jpg" /></div><div class="video_container_title">2 States</div></div>');
}
}
else if(target == 'regional'){
this.movies_content.html('');
for(var i=0;i>6;i++){
this.movies_content.append('<div class="video_container video_container1"><div class="video_container_image"><img src="lucia.jpg" /></div><div class="video_container_title">Lucia</div></div>');
}
}
}

}


new Tabs();



});