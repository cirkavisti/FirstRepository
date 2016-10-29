/*jQuery time*/
$(document).ready(function(){
	$("#accordian h3").click(function(){
		//slide up all the link lists
		$("#accordian ul ul").slideUp();
		$("#accordian ul li").removeClass("active"); // remove all active classes
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
			// add active class to li parent
			$(this).parents("li").addClass("active"); // visti made this!
		}
	})
})