$(function () {
	'use strict'; // use strict to start

	$(document).on("click", ".navbar-nav li", function () {
		// var loc = window.location.href;
		// debugger;
		switch ($(this).attr("data-target"))
		{
			case "contact":

				// var link = $(this).find('a:first').attr('href');
				// if(loc.indexOf(link) >= 0)
				// {
				// 	console.log(loc.indexOf(link));
				// }
					// $(this).addClass('active');
				// $(this).attr("data-target").data("contact").attr("class", "active");
				// alert("contact")

				break;
			// case "ok":
			// 	let $res = sendData("left_04");
			// 	if($res){
			// 		$("#modal_edit_left_04_edit").modal("hide");
			// 	}
			//
			// 	break;
			// case "cancel":
			// 	$("#modal_edit_left_04_edit").modal("hide");
			//
			// 	break;
		}
	});
});