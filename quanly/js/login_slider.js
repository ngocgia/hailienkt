$(document).ready(function() {
  
  var $slider = $(".slider"),
      $slideBGs = $(".slide__bg"),
      diff = 0,
      curSlide = 0,
      oldSlide = curSlide,
      numOfSlides = $(".slide").length-1,
      animating = false,
      animTime = 1000,
      autoSlideTimeout,
      autoSlideDelay = 10000,
      $pagination = $(".slider-pagi"),
      typeEffect;
  
  
  //------------------------------CREATE-BULLETS---------------------------//
  function createBullets() {
    for (var i = 0; i < numOfSlides+1; i++) {
      var $li = $("<li class='slider-pagi__elem'></li>");
      $li.addClass("slider-pagi__elem-"+i).data("page", i);
      if (!i) $li.addClass("active");
      $pagination.append($li);
    }
  };
  createBullets();
  
  //------------------------------CREATTE-EFFECT-SLIDER---------------------------//
  function type(){
    var arrEff = ["flip","rotate","translate"];
    var arrEffLeng = arrEff.length;
    var random = Math.floor(Math.random() * arrEffLeng);
    typeEffect = arrEff[random];
  };
  
  //------------------------------CONTROLS-MANAGE------------------------------//
  function manageControls() {
    $(".slider-control").removeClass("inactive");
    if (!curSlide) $(".slider-control.left").addClass("inactive");
    if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
  };
  
  //------------------------------AUTO-SLIDER---------------------------//
  function autoSlide() {
    autoSlideTimeout = setTimeout(function() {
      oldSlide = curSlide;
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 0;
      changeSlides();
    }, autoSlideDelay);
  };
  autoSlide();
  
  //------------------------------MAIN-CHANGE-SLIDER-FUNCTION---------------------------//
  function changeSlides(instant) {
    if (!instant) {
      animating = true;
      manageControls();
      $slider.addClass("animating");
      $(".slide").removeClass("active");
      $(".slide-"+curSlide).addClass("active");
      setTimeout(function() {
        $slider.removeClass("animating");
        animating = false;
      }, animTime);
    }
    window.clearTimeout(autoSlideTimeout);
    $(".slider-pagi__elem").removeClass("active");
    $(".slider-pagi__elem-"+curSlide).addClass("active");
    var j = curSlide;
    type();
    
    //opacity 0 all remain slide
    for(var i = 0 ; i<=numOfSlides ; i++){
        if(i !== curSlide && i !== oldSlide){
            $('.slide-' + i).addClass('hidden');
        }
    }
    //add effect to old slide
    $slider.find('.slide-'+oldSlide).addClass(typeEffect);
    
    
    //setTimeout to remove and set z-index
    setTimeout(function(){
        for(var i = numOfSlides ; i>=0 ; i--){
            $slider.find('.slide-' + j).css("z-index",i);
            j++;
            if(j>numOfSlides){
                j = 0;
            }
        }
        
        for(var i = 0 ; i<=numOfSlides ; i++){
            if(i !== curSlide && i !== oldSlide){
                $('.slide-' + i).removeClass('hidden');
            }
        }
        
        $slider.find('.slide-' + oldSlide).removeClass(typeEffect);
    }, animTime);
    
    diff = 0;
    autoSlide();
  }

  //------------------------------CONTROLS-BUTTON-FUNCTION---------------------------//
  function navigateLeft() {
    if (animating) return;
    if (curSlide > 0) {
        oldSlide = curSlide;
        curSlide--;
    }
    changeSlides();
  }

  function navigateRight() {
    if (animating) return;
    if (curSlide < numOfSlides) {
        oldSlide = curSlide;
        curSlide++;
    }
    changeSlides();
  }
  
  //------------------------------DRAG-FUNCTION---------------------------//
  $(document).on("mousedown touchstart", ".slider", function(e) {
    e.preventDefault();
    if (animating) return;
    window.clearTimeout(autoSlideTimeout);
    var startX = e.pageX || e.originalEvent.touches[0].pageX,
        winW = $(window).width();
    diff = 0;
    
    $(document).on("mousemove touchmove", function(e) {
      var x = e.pageX || e.originalEvent.touches[0].pageX;
      diff = (startX - x) / winW * 100;
    });
  });
  
  $(document).on("mouseup touchend", function(e) {
    $(document).off("mousemove touchmove");
    if (animating) return;
    if (!diff) {
      return;
    }
    if (diff > -8 && diff < 8) {
      return;
    }
    if (diff <= -8) {
      if(curSlide !== 0){
        navigateLeft();
      }
      
    }
    if (diff >= 8) {
      if(curSlide !== numOfSlides){
        navigateRight();
      }
      
    }
  });
  
  //------------------------------CLICK-EVENT---------------------------//
  $(document).on("click", ".slider-control", function() {
    if (animating) return;
    if ($(this).hasClass("left")) {
      if(!$(this).hasClass("inactive")){
        navigateLeft();
      }
        
    } else {
      if(!$(this).hasClass("inactive")){
        navigateRight();
      }
    }
  });
  
  $(document).on("click", ".slider-pagi__elem", function() {
    if (animating) return;
    oldSlide = curSlide;
    curSlide = $(this).data("page");
    if(oldSlide !== curSlide) {
        changeSlides();
    }
  });
  
});