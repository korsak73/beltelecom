// $(function () {
// 	'use strict'; // use strict to start
//
// 	$(document).on("click", '#btn_login_cancel', function () {
// 		$("#modal_edit_01_06").modal("hide");
//
// 		return false;
// 	});
//
// 	$(document).on("click", "#header-main li", function () {
// 		var loc = window.location.href;
// 		// debugger;
// 		switch ($(this).attr("data-target"))
// 		{
// 			case "login":
//
// 				var link = $(this).find('a:first').attr('href');
// 				if(loc.indexOf(link) >= 0)
// 				{
// 					console.log(link);
// 				}
// 				$("#users-login").modal("show");
// 					// $(this).addClass('active');
// 				// $(this).attr("data-target").data("contact").attr("class", "active");
// 				// alert("contact")
//
// 				break;
// 			// case "ok":
// 			// 	let $res = sendData("left_04");
// 			// 	if($res){
// 			// 		$("#modal_edit_left_04_edit").modal("hide");
// 			// 	}
// 			//
// 			// 	break;
// 			// case "cancel":
// 			// 	$("#modal_edit_left_04_edit").modal("hide");
// 			//
// 			// 	break;
// 		}
// 	});
// });