$(function (){
	'sue strict';
	/*----------------------------------------------------*/
	/* Smooth Scrolling
	------------------------------------------------------ */

	/* for add and active class */
	$(".navbar-nav li a").click(function(){
			$(".navbar-nav li a").removeClass("active");
			$(this).addClass("active");
	});


	/* Change Active Tap Taps */
	// $('.tabs li').click(function(){
	// 	$(this).addClass('selected').siblings().removeClass('selected');
	// });



	$('#myTab a').on('click', function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})


	/* Change between Singin and Singup Tap Taps */
	$('.change-sing').click(function(){
		$('.sing .contect .singup').slideToggle(800);
		$('.sing .contect .singin').slideToggle(1500);
	});


	/* Deal With Taps */
	$('.navbar li').click(function(){
		$('.navbar .menu-panel').slideUp()
		$(this).find('.menu-panel').slideToggle(600);
	});

	// $('.navbar li a').click(function(){
	// 	$(this).find('.menu-panel').slideToggle(600);
	// 	$('.navbar .menu-panel').slideToggle().siblings(200).slideUp(600);
	// });




  // Collapse Navbar
  var navbarCollapse = function() {
    if ($(".top-nav").offset().top > 100) {
      $(".top-nav").slideUp();
    } else {
		  $(".top-nav").slideDown();
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);


/**
 * My Custom Form **********************************************************************************************************************
**/
	var hasdata = $('.custom-input input[type="text"], .custom-input textarea, .custom-input input[type="password"],.custom-input input[type="email"]');
	hasdata.on('focusout', function() {
		if ($(this).val() != '') {
			$(this).parent().addClass('has-data');
		}else{
			$(this).parent().removeClass('has-data');
		}
	});

	/* to up the label when reload the page */
	if(hasdata.val() != '') {
		hasdata.parent().addClass("has-data");
	} else {
		hasdata.parent().removeClass("has-data");
	}



	/* Deal With Taps */
	$('.tabs .one').click(function(){
		$('.tabs .tabs-one').slideDown().siblings(200).slideUp(600);
	});
	/* Deal With Taps */
	$('.tabs .tow').click(function(){
		$('.tabs .tabs-tow').slideDown().siblings().slideUp(600);
	});
	/* Deal With Taps */
	$('.tabs .three').click(function(){
		$('.tabs .tabs-three').slideDown().siblings().slideUp(600);
	});




  /*Confirmtion Massege In Press Button Delete*/
	$('.confirm').click(function(){
		return confirm('Are You Sure Do You Want Delete This ?');
	});


	/*
	** ============== Start Pugins Edit ==================================
	 */

	 /* For niceScroll **/
    $("html").niceScroll({
      cursorcolor: "#fc3",
      cursorwidth: "3px",
      cursoropcity: 0.5,
      cursorborder: "2px solid #fc3",
      zindex: 9999,
      scrollspeed:80
    });
	/* For Wow **/
	new WOW
	(
		{
			boxClass: 'wow',
			animateClass:  'animated',
			offset: 		0,
			mobile:  		true,
			live: 			true,
		}
	).init();




	/*
			For iCheck =====================================>
	*/
	$("input").iCheck({
			checkboxClass:"icheckbox_square-yellow",
			radioClass:"iradio_square-yellow",
			increaseArea:"20%" // optional
	});


	$('input[name="select-price"]').ionRangeSlider({
			type: "double",
			grid: true,
			min: 50000,
			max: 9000000,
			from: 300000,
			to: 800000,
			step: 50000,
			prefix: "SD ",
			grid_num: 7,
			// grid: false
	});

	$('input[name="price"]').ionRangeSlider({
			type: "single",
			grid: true,
			min: 50000,
			max: 9000000,
			from: 300000,
			to: 800000,
			step: 10000,
			prefix: "SD ",
			grid_num: 7,
			// grid: false
	});


	// $("#add-car-form").dropzone({
  //   //url: "/file/post", // If not using a form element
	// 	createImageThumbnails: false,
	// 	resizeWidth: 200,
	// 	resizeHeight: 200,
	// 	maxFiles: 2,
	// });


	Dropzone.autoDiscover = false;
	$("#add-car-form").dropzone({
			url: "/",
			addRemoveLinks: true,
			paramName: "file",
			autoProcessQueue: false,
	    uploadMultiple: true,
	    parallelUploads: 5,
	    maxFiles: 5,
	    maxFilesize: 4,
	    acceptedFiles: 'image/*',
			success: function (file, response) {
					var imgName = response;
					file.previewElement.classList.add("dz-success");
					console.log("Successfully uploaded :" + imgName);
			},
			error: function (file, response) {
					file.previewElement.classList.add("dz-error");
			}
	});

	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').trigger('focus')
	})


	$(document).ready(function() {
    $('.pgwSlider').pgwSlider({
				listPosition: 'right',
				displayControls: false,
				mainClassName: 'pgwSlider'
			}
		);
	});
      /*Confirmtion Massege In Press Button Delete*/

    //   $('.confirm').click(function(){

    //     swal({
    //     title: 'Are you sure?',
    //     text: "It will permanently deleted !",
    //     type: 'warning',
    //     showCancelButton: true,
    //     confirmButtonColor: '#3085d6',
    //     cancelButtonColor: '#d33',
    //     confirmButtonText: 'Yes, delete it!'
    //   }).then(function() {
    //     swal(
    //       'Deleted!',
    //       'Your file has been deleted.',
    //       'success'
    //     );
    //   })

    //   })


		var app = new Vue({
		  el: '#app',
		  data: {
		    message: 'Hello Vue!'
		  }
		})

});
