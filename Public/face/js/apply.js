$(function () {
	
	$("#muticonfirm").on('click',function () {
		$("body").append("<div id='mask'></div>");
		// $("body").css({});
	    $("#mask").addClass("mask").fadeIn("slow");
	    $("#applyform").fadeIn("slow");
	})
	$("#close").on('click',function () {
	    $("#applyform").fadeOut("fast");
	    $("#mask").css({ display: 'none' });
	})
})