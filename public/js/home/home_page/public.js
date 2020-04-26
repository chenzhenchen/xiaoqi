/**

 */
$(function(){
    var $url_1 = window.location.href;
    var tag = 'about_lead_detail';
    
    if( $url_1.indexOf(tag)!=-1){
        var $href_1 = $url_1.split("about_lead_detail");
        var $href_id = $href_1[1];
        var $href_num = $href_id.split("_");
        var $li_i = $href_num[0];

        if($li_i == '12'){
            $("ul.work_detail li").eq(0).addClass("active");
            $("ul.work_detail li").eq(1).addClass("active");
        }else if($li_i == '23'){
            $("ul.work_detail li").eq(1).addClass("active");
            $("ul.work_detail li").eq(2).addClass("active");
        }else{
            $("ul.work_detail li").eq($li_i -1).addClass("active");
        }
    
    }else{

    }


    $("ul.design-load-more li.load-show-li:lt(6)").addClass("show");
    var $li_i = $("ul.design-load-more").find("li").size();
    if($li_i<= 6){
      $(".design-box a.more1").hide();
    }else{
      $(".design-box a.more1").show();
    }
    

    setTimeout(function(){
        $("ul.career-ul p.con-link a").addClass("cuurent");
    },1000);

    $(function(){
        var i = 5;
        var n = 5;
        $(".design-box a.more1 ,.design-box a.more").on("click",function () {
          i+=1;
          showData(i);

          if(i>$li_i){
             $(this).hide();
          }
        });
        function showData(numlist) {
            var $list_len = $("ul.design-load-more li.load-show-li").size();
            for(var m = numlist;m<=numlist+n;m++){
                $("ul.design-load-more li.load-show-li").eq(m).slideDown(200).addClass("show");
            }
            i+=n;
        }

    });
});

$(function(){ 
    // index banner set
    bfade("#banner",6000);
    function bfade(banner,time){
        var $blist = $(banner).find(".banner-list");
        var $bli = $blist.children("li");
        var $blen = $bli.length;
        var index = 0;
        var autoshow = null;
        setInterval(function(){
            index++;
            if(index >= $blen){
                index = 0;
            }
            show(index);
        },time);

        $("ul.num li").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
            index = $(this).index();
            show(index);
        });

        function show(index){
            $bli.eq(index).fadeIn(1500).siblings("li").fadeOut(1600);
            $("ul.num li").eq(index).addClass("active").siblings().removeClass("active");
        }

    }

    $("ul.load-more li.load-show:lt(6)").addClass("show");
    

    $(function(){
        var i = 5;
        var n = 2;
        var $foot_h = $("footer").outerHeight(true);
        var $list_len = $("ul.load-more li.load-show").size();

        setTimeout(function(){
            if($list_len<=6){
               $("a.more,a.more-add").hide();
            }else{
                $("a.more,a.more-add").show();
            }
        },100);
        
        $(".select-info a.more,a.more-add").on("click",function () {
          i+=1;
          showData(i);
          if(i > $list_len){
            $(this).hide();
          }
        });
        function showData(numlist) {
            for(var m = numlist;m<=numlist+n;m++){
                $("ul.load-more li.load-show").eq(m).slideDown(200).addClass("show");
            }
            i+=n;
        }

        $(".choose-year ul.choose-box li").click(function(){
            $(".media-only a.more").hide();
            var $date_y = $(this).find("a").attr("date-year");
            var $html = $(this).find("a").html();
            $("ul.choose-year span").html($html);
            $("ul.media-add").each(function(){
                var $in_date_y = $(this).attr("date-year");
                if($in_date_y == $date_y){
                    $(this).show();
                    $(this).find("li.load-show:lt(6)").addClass("show");
                }else{
                    $(this).hide();
                }
            });

             $(".award-info-only ul.load-more li.load-show").each(function(){
                var $in_date_y1 = $(this).attr("date-year");
                if($in_date_y1 == $date_y){
                    $(this).show();
                    
                }else{
                    $(this).hide();
                }
            });


            $(this).parent("ul.choose-box").hide();
            $(".award-info a.more").hide();

            $(".choose-year ul.choose-box li").click(function(e){
                e.stopPropagation();
                var $date_m = $(this).find("a").attr("date-mon");
                $("ul.choose-month span").html($date_m);
                $("ul.load-more li.load-show").each(function(){
                    var $in_date_m = $(this).attr("date-mon");
                    var $in_date_m_y = $(this).attr("date-year");
                    if($in_date_m == $date_m && $in_date_m_y == $date_y){
                        $(this).show().addClass("show");
                    }else{
                        $(this).hide().removeClass("show");
                    }
                });

                $(this).parent("ul.choose-box").hide();

                
            });

        });

    });

});
$(function(){
    

	$(window).resize(function(){  
		var $w1024 = $("#w1024");
        var $w768 = $("#w768");
        var $w760 = $("#w760");
		var $win_h = $(window).height();
        //<1024
        $("#banner").height($win_h);
		
        $(".nav-wrap").height($win_h - 60);
        $("body").css("min-height" , $win_h);

        setTimeout(function(){
            var $page_head_h = $("#page-banner").outerHeight(true);
            var $page_con_h = $(".page-content").outerHeight(true);
            var $page_footer_h = $("footer").outerHeight(true);
            var $page_h = $page_head_h + $page_con_h;

            
            
            if($page_h < $win_h - $page_footer_h - 30){
                $("footer").addClass("fiexd");
            }
            else{
               $("footer").removeClass("fiexd");
            }
        },100)

	});
    $(window).resize();

    $('.table-box i').on("touchend",function(){
      $(this).fadeOut(200);
    });
    

    $("#menu").click(function(e){
        $(this).toggleClass("active");
        $(".nav-box,header").toggleClass("active");
        $(".sub-nav dd.current").parents(".sub-nav").show();
        $(".sm-sub-nav a.current").parents(".sm-sub-nav").show();
        $("ul.nav-list li.current").siblings("li").removeClass("cuur");
        $("ul.nav-list li.current").siblings("li").find(".sub-nav").hide();

        if( $(".nav-box").hasClass("active")){
            $("body,html").css("overflow" , "hidden");
        }else{
            $("body,html").css("overflow" , "auto");
        }
    });
	
	$(".nav-box").click(function(e) {
		
		if (detectMobile()) {
			return;
		}
		
		console.log("clicked .nav-box!");
		$("#menu").removeClass("active");
		$(".nav-box,header").removeClass("active");
		$(".sub-nav dd.current").parents(".sub-nav").show();
		$(".sm-sub-nav a.current").parents(".sm-sub-nav").show();
		$("ul.nav-list li.current").siblings("li").removeClass("cuur");
		$("ul.nav-list li.current").siblings("li").find(".sub-nav").hide();

		if( $(".nav-box").hasClass("active")){
			$("body,html").css("overflow" , "hidden");
		}else{
			$("body,html").css("overflow" , "auto");
		}
		 
	});
	 
    $("#page-banner p a").click(function(e){
         e.preventDefault(); 
        $("#menu").addClass("active");
        $(".nav-box,header").toggleClass("active");
        $(".sub-nav dd.current").parents(".sub-nav").show();
        $(".sm-sub-nav a.current").parents(".sm-sub-nav").show();
        $("ul.nav-list li.current").siblings("li").removeClass("cuur");
        $("ul.nav-list li.current").siblings("li").find(".sub-nav").hide();

        if( $(".nav-box").hasClass("active")){
            $("body,html").css("overflow" , "hidden");
        }else{
            $("body,html").css("overflow" , "auto");
        }

    });

	function detectMobile() {
	 if( navigator.userAgent.match(/Android/i)
	 || navigator.userAgent.match(/webOS/i)
	 || navigator.userAgent.match(/iPhone/i)
	 || navigator.userAgent.match(/iPad/i)
	 || navigator.userAgent.match(/iPod/i)
	 || navigator.userAgent.match(/BlackBerry/i)
	 || navigator.userAgent.match(/Windows Phone/i)
	 ){
		return true;
	  }
	 else {
		return false;
	  }
	}


    $(".nav-list li a.java-a").hover(function(e){
		
		if (detectMobile()) {
			 e.stopPropagation();

			$(this).parent("li").addClass("cuur");
			$(this).parent("li").siblings().removeClass("cuur");

			$(this).next(".sub-nav").slideDown();

			$(this).parent("li").siblings().removeClass("current");
			$(this).parent("li").siblings().find(".sub-nav").slideUp();
			$(this).parent("li").siblings().find(".sub-nav").hide();
			$(this).parent("li").siblings().find(".sub-nav dd").removeClass("cuur");
			$(this).parent("li").siblings().find(".sm-sub-nav").hide();
		} else {
			e.stopPropagation();
		
			$(this).parent("li").addClass("cuur");
			$(this).parent("li").siblings().removeClass("cuur");
			
			$(this).next(".sub-nav").stop( true, true ).slideDown();
			
			// $(this).parent("li").siblings().removeClass("current");
			$(this).parent("li").siblings().find(".sub-nav").slideUp();
			$(this).parent("li").siblings().find(".sub-nav").hide();
			$(this).parent("li").siblings().find(".sub-nav dd").removeClass("cuur");
			$(this).parent("li").siblings().find(".sm-sub-nav").hide();
		}
		
        
		
    },function(){
		
		if (detectMobile()) {
			$(this).parent("li").siblings().find(".sub-nav dd").removeClass("cuur");
			$(this).parent("li").siblings().removeClass("current");
		} else {
			 $(this).parent("li").siblings().find(".sub-nav dd").removeClass("cuur");
			// $(this).parent("li").siblings().removeClass("current");
		}
		
       
		
        /*if( $(this).parent("li").find(".sub-nav").is(":visible")){
            $(this).parent("li").addClass("cuur");
        }else{
            $(this).parent("li").removeClass("cuur");
        }*/
    });
	
	$(".nav-list li a.java-b").hover(function(e){
		
		if (detectMobile()) {

		} else {
			e.stopPropagation();
		
			$(this).parent("li").addClass("cuur");
			$(this).parent("li").siblings().removeClass("cuur");
			
			$(this).next(".sub-nav").stop( true, true ).slideDown();
			
			// $(this).parent("li").siblings().removeClass("current");
			$(this).parent("li").siblings().find(".sub-nav").slideUp();
			$(this).parent("li").siblings().find(".sub-nav").hide();
			$(this).parent("li").siblings().find(".sub-nav dd").removeClass("cuur");
			$(this).parent("li").siblings().find(".sm-sub-nav").hide();
		}
		
        
		
    },function(){
		
		if (detectMobile()) {
			
		} else {
			 $(this).parent("li").siblings().find(".sub-nav dd").removeClass("cuur");
			// $(this).parent("li").siblings().removeClass("current");
		}
		
       
		
        /*if( $(this).parent("li").find(".sub-nav").is(":visible")){
            $(this).parent("li").addClass("cuur");
        }else{
            $(this).parent("li").removeClass("cuur");
        }*/
    });

    $(".sub-nav dd a").hover(function(e){
        e.stopPropagation();
        $(this).parent("dd").addClass("cuur").siblings().removeClass("cuur");
        $(this).next(".sm-sub-nav").slideDown();
        $(this).parent("dd").siblings().find(".sm-sub-nav").hide();
    },function(){
        if( $(this).parent("dd").find(".sm-sub-nav").is(":visible")){
            $(this).parent("dd").addClass("cuur");
        }else{
            $(this).parent("dd").removeClass("cuur");
        }
    });
	

	var $sTop = $(".s-top");
	$(window).scroll(function(){
		if($(this).scrollTop() >= 500){
			$sTop.fadeIn(200);
		}else{
			$sTop.fadeOut(200);
		}
	});
	$sTop.click(function(){
        
        $("html, body").animate({scrollTop: 0}, 
        {
        duration: 500,
        easing: "swing"
       });
        console.log(1);
    })




    $(".desi-bg").click(function(){
        var $li_i = $(this).parents("li").index();
		var $li_n = $(this).index();
        var $sli_s = $(".slick-track .slide").size();
        $('.slickshow').slickGoTo($li_n);
        $(".pupop").find(".slide-box").eq($li_i).fadeIn();
        $(".pupop").addClass("active");
        $(".pupop").fadeIn();  
    });

    $("span.pup-close").click(function(){
        $(".pupop").fadeOut();
        $(".pupop").find(".slide-box").fadeOut();
    });


    $("ul.choose-ul li.choose-btn").hover(function(){
        $(this).find("ul.choose-box").slideDown();
    },function(){
        $(this).find("ul.choose-box").hide();
    });


    $(".design-box ul li").hover(function(){
    	$(this).find(".desi-bg").fadeIn(200);
    	$(this).find("dd").addClass("active");
    },function(){
    	$(this).find(".desi-bg").hide();
    	$(this).find("dd").removeClass("active");
    });



      $('.slickshow').slick({
        centerMode: true,
        centerPadding: "400px",
        lidesToShow: 1,
        dots:true,
        responsive: [
        {
          breakpoint: 1601,
          settings: {
            centerMode: true,
            centerPadding: '300px',
            lidesToShow: 1,
            dots:true,
          }
        },{
          breakpoint: 1441,
          settings: {
            centerMode: true,
            centerPadding: '200px',
            lidesToShow: 1,
            dots:true,
          }
        },{
          breakpoint: 1281,
          settings: {
            centerMode: true,
            centerPadding: '100px',
            lidesToShow: 1,
            dots:true,
          }
        },{
          breakpoint: 1025,
          settings: {
            centerMode: true,
            centerPadding: '40px',
            lidesToShow: 1,
            dots:true,
          }
        },{
          breakpoint:761,
          settings: {
            centerMode: false,
            lidesToShow: 1,
            dots:true,
          }
        }
        ]
      }); 



     /*$("p.career-choose a").click(function(){
        $(this).addClass("active").siblings().removeClass("active");
     })*/


     $("ul.about-award-nav li").hover(function(){
        $(this).stop().siblings().removeClass("active");
     })

     $("ul.about-award-nav").hover(function(){},function(){
        $("ul.about-award-nav li.cur").addClass("active");
     })

		var $offset_h = 95;
		if ($(window).width() <= 768 ){
					var $offset_h = 115;
				}else if ($(window).width() <= 1024){
					var $offset_h = 95;
				}else if ($(window).width() <= 1440){
					var $offset_h = 95;
				}
		
		$(window).scroll(function () {
				var $foot_h = $("footer").outerHeight();
				
				
				if ($(document).scrollTop() + $(window).height() >= $(document).height() - $offset_h ) {
						$(".s-top").addClass( "landed");
				}else{
						$(".s-top").removeClass( "landed");
				}
		 });
		 $(window).resize(function(){
				var $offset_h = 95;
				if ($(window).width() <= 768 ){
					var $offset_h = 115;
				}else if ($(window).width() <= 1024){
					var $offset_h = 95;
				}else if ($(window).width() <= 1440){
					var $offset_h = 95;
				}
				$(window).scroll(function () {
				var $foot_h = $("footer").outerHeight();
				
				
				if ($(document).scrollTop() + $(window).height() >= $(document).height() - $offset_h ) {
						$(".s-top").addClass( "landed");
				}else{
						$(".s-top").removeClass( "landed");
				}
		 });
		});

    //  $('.contact-select').change(function(){
    //     var $caari = $('.contact-select').find('option:selected').val();

    //     $(".career-info-onlyonly ul.career-ul").eq($caari).addClass('cuur').siblings().removeClass('cuur');
    // });

    $(".contact-select li.hover-span").hover(function(){
        $(this).find("dl").stop(true,true).slideDown();
    },function(){
        $(this).find("dl").stop(true,true).slideUp();
    });


    $(".chosen-select").change(function(){
		
        var $txt = $(this).html();
        var $ddi = $(this).val();
        /*$("dl.careerinfo-dl").slideUp();
        $(".contact-select li.hover-span span").html($txt);*/
        $(".career-info-onlyonly ul.career-ul").eq($ddi).addClass("cuur").siblings().removeClass('cuur');
    });
	
    $(".chosen-select-gohref").change(function(){
		
		var url = $(this).val(); // get selected value

		if (url) { // require a URL
		  window.location = url; // redirect
		}
		return false;
		  
    });
		

     var $home_a = '<a href="index.php">Home</a><span class="gt"></span>';
     $("#page-banner p").prepend($home_a);

     $(".ir-alert-box ol.region-ol li span").click(function(){
         $(this).next('.region-scoll').slideToggle();
     })
});



