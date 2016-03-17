$(document).ready(function(){
	$('#nav').slicknav();

// dropdown fadein

$(".mainmenu ul li.dropdown").hover(function(){
    $(".mainmenu ul li.dropdown ul").fadeIn(1000);
    $(".mainmenu ul li.dropdown ul").css("display", "block");
    }, function(){
    
	$(".mainmenu ul li.dropdown ul").css("display", "none");
});

//mised it up 

$('.project_list #Container').mixItUp({
	animation: {
		effects: 'fade rotateX(360deg)'
	}
});
	
	// owl carousel
	
	$(".owl-carousel").owlCarousel({
	autoPlay : 3000,
    stopOnHover : true,
	slideSpeed : 10,
    paginationSpeed : 100,
    rewindSpeed : 100,
	jsonSuccess : false,
	 mouseDrag : true,
	 touchDrag : true,
	  pagination : false,
	  navigation :true,
	   navigationText : ["<i class='fa fa-angle-left' style='font-size:20px;'>","<i class='fa fa-angle-right'  style='font-size:20px;'>"],
	});
	
	
	$(".owl-item").css("width", "230px");
	
	
	$(".tab-content div:last-child").css("background", "red");
	
	//parallax
	
	
	
	$('.promotions_area').parallax("50%", 0.2);
	});
