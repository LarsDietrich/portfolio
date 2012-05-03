//Adds a fancy lavabar under navigation buttons.
function initLavaNavigation(){
	console.log('loli' + currentPage);
	$('body').append('<div id="lavaParticle"></div>');
	$('#lavaParticle').css({'left': $('header > a:first').position().left + 12, 'top': ($('header > a:first').position().top + $('header > a:first').height()) , 'width': $('header > a:first').width()});
	
	$('header a').mouseover(function(e){
		var xDiff = ($(e.currentTarget).position().left - $('#lavaParticle').position().left + 20)
		$('#lavaParticle').stop().animate({left: '+=' + xDiff, width: $(e.currentTarget).width()}, 100, 'easeOutSine');		
	});
}