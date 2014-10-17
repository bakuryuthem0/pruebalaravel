$(document).ready(function() {
	$('#filterOptions li a').click(function() {
		// fetch the class of the clicked item
		var ourClass = $(this).attr('id');
		ourClass = ourClass.replace(/ /g,'_');
		// reset the active class on all the buttons
		$('#filterOptions li').removeClass('active');
		// update the active state on our clicked button
		$(this).parent().addClass('active');
		
		if(ourClass == 'all') {
			// show all our items
			$('#ourHolder').children('div.item').stop().animate({opacity:1},500).show();	
		}
		else {
			// hide all elements that don't share ourClass
			$('#ourHolder').children('div:not(.' + ourClass + ')').stop().animate({opacity:0},500).hide();
			// show all elements that do share ourClass
			$('#ourHolder').children('div.'+ ourClass).stop().animate({opacity:0},1).animate({opacity:1},500).show();
		}
		return false;
	});
});