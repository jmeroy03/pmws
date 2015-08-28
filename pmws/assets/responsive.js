$(function(){
$('#scientist_profile i').on('click',function(){
	var url = $(this).data('url');
	location.href = url;
})
var height = $('#thumbs').height();
var elem_count = $('#thumbs').length;
var observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
	  var active_thumb_offset = $('#thumbs .thumb.thumb-on').position().top; //$('#thumbs .thumb.thumb-on').offset().top;
	  var current_idx = $('#thumbs .thumb.thumb-on').index();
	  if(active_thumb_offset>306){
	  	$('#thumbs').animate({
		    scrollTop: 370
		}, 800);
	  }
	  if(current_idx == elem_count-1) 
	  	$('#thumbs').animate({
		    scrollTop: 0	
		}, 800);
    });    
});

var arrpath = window.location.pathname.split( '/' );

if(arrpath[arrpath.length-1]==='home'){
 var target = document.getElementById('slider');
 observer.observe(target, { attributes : true, attributeFilter : ['style'] });
}
$('.arrows a').on('click',function(){
	var direction = $(this).attr('class');
	if(direction == 'previous')	
	 $('#thumbs').animate({ left: '+=348' }, 800);
	else
     $('#thumbs').animate({ left: '-=348' }, 800);		
});
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
 $('#thumbs').perfectScrollbar({suppressScrollX: true});
    
    var previousScroll = 0;
    $('.switcher-wrapper ul').scroll(function(){
       var currentScroll = $(this).scrollTop();
       if (currentScroll > previousScroll){
           $(this).find('li').first().fadeOut('slow');
       } else {
           $(this).find('li').first().fadeIn('slow');
           //$(this).find('li').last().fadeOut('slow');
       }
       previousScroll = currentScroll;
    });
    
    $('.switcher-wrapper ul li').on('click',function(){
        $('.switcher-wrapper ul li').removeClass('active');//reset
        $(this).addClass('active');
    })

  $('.profile-pagenav a, .gallery-pagenav a').on('click',function(){
	  var direction = $(this).attr('rel');
	  var module = $(this).parent().attr('class')=='profile-pagenav'?'.profile_entry':'.album_entry';
	  if(direction == 'prev')	
	   $(module).animate({ top: '+=455' }, 800);
	  else
	   $(module).animate({ top: '-=455' }, 800);		
  });

  $("footer #linkage ul.sublist").hide();
  $("footer #linkage ul li").click(function() {
    $(this).find('ul.sublist').slideToggle(300);
    return false;
  });
});

$('nav a').on('click',function(){
	var link = ($(this).attr('href')).substr(1);
	$('main').load('main/view/'+link);
})
