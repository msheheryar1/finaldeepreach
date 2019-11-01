$(document).ready(function(){

let slide=0;
$(".arrow_right").click(function(){

if(slide<4){
	slide++;
    $(".slider_main").animate({right:slide+'00%'},300);

$(".socials").removeClass('social_active');

$(".socials").eq(slide).addClass('social_active');



}

});

$(".arrow_left").click(function(){

if(slide>0){

slide--;
$(".socials").removeClass('social_active');

$(".socials").eq(slide).addClass('social_active');


    $(".slider_main").animate({right:(slide)+'00%'},300);


}




});


$(".fb_click").click(function(){

slide=0;
$(".slider_main").animate({right:(slide)+'00%'},300);

$(".socials").removeClass('social_active');

$(".socials").eq(slide).addClass('social_active');

});



$(".twitter_click").click(function(){

slide=1;
$(".slider_main").animate({right:(slide)+'00%'},300);

$(".socials").removeClass('social_active');

$(".socials").eq(slide).addClass('social_active');

});



$(".linkedin_click").click(function(){

slide=2;
$(".slider_main").animate({right:(slide)+'00%'},300);

$(".socials").removeClass('social_active');

$(".socials").eq(slide).addClass('social_active');

});



$(".pinterest_click").click(function(){

slide=3;
$(".slider_main").animate({right:(slide)+'00%'},300);

$(".socials").removeClass('social_active');

$(".socials").eq(slide).addClass('social_active');

});


$(".slack_click").click(function(){

slide=4;
$(".slider_main").animate({right:(slide)+'00%'},300);

$(".socials").removeClass('social_active');

$(".socials").eq(slide).addClass('social_active');

});


});