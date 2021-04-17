$(document).ready(function(){
    
//    if (window.matchMedia('(min-width: 480px)').matches) {
//        
//    } else {
//        
//        
//    }
    //--------------------------------------REPOSITION-SEARCH-AND-PATH--------------------------------------------//
    if (window.innerWidth < 480){
        $('.search').insertBefore('.path');
    }
    
    
    //--------------------------------------MOBILE-CLICK--------------------------------------------//
    $('.side-bar-mobile a').append('<i class="fa fa-angle-right"></i>');
    
    $('.side-bar-mobile  > ul > li > ul').hide();
    $('.side-bar-mobile  > ul > li > ul > li > ul').hide();
    $('.side-bar-mobile  > ul > li > ul > li > ul > li > ul').hide();
    
    $('.side-bar-mobile  > ul > li > ul').on("click",function(e){
        e.stopPropagation();
    });
    $('.side-bar-mobile  > ul > li > ul > li > ul').on("click",function(e){
       e.stopPropagation(); 
    });
    $('.side-bar-mobile i').on("click",function(e){
       e.preventDefault();
    });
    
    
    
    setArrowSideBarOpen($('.side-bar-mobile  > ul > li'));
    setArrowSideBarOpen($('.side-bar-mobile  > ul > li > ul > li'));
    setArrowSideBarOpen($('.side-bar-mobile  > ul > li > ul > li > ul > li'));
    setArrowSideBarOpen($('.side-bar-mobile  > ul > li > ul > li > ul > li > ul > li'));
    function setArrowSideBarOpen(sidebar){
        for(var i=0 ; i<sidebar.length ; i++){
            if(!sidebar.eq(i).children('ul').length){
                sidebar.eq(i).find('.fa-angle-right').css('display','none');
            }
        }   
    }
    $('.side-bar-mobile  > ul > li').on('click',{tmp: $('.side-bar-mobile  > ul > li')},sideBarOpen);
    $('.side-bar-mobile  > ul > li > ul > li').on('click',{tmp: $('.side-bar-mobile  > ul > li > ul > li')},sideBarOpen);
    $('.side-bar-mobile  > ul > li > ul > li > ul > li').on('click',{tmp: $('.side-bar-mobile  > ul > li > ul > li > ul > li')},sideBarOpen);
    function sideBarOpen(e){
        var $this = $(this);
        var state = $this.data('state');
        var $tmp = e.data.tmp;
        
        $tmp.not($this).find('li').data('state', false);
        $tmp.not($this).find('i').css('transform','rotate(0)');  
        $tmp.not($this).find('ul').hide();
        $tmp.not($this).data('state', false);
        
        state = !state; 
        if (state) {
            $this.children('a').children('i').css('transform','rotate(90deg)');
            $this.children('ul').show();
        } else {
            $this.children('a').children('i').css('transform','rotate(0)');
            $this.find('i').css('transform','rotate(0)');
            $this.find('li').data('state', false);
            $this.find('ul').hide(); 
        }
        $this.data('state', state);   
    }

    
    
    $(document).on("click",".side-bar-button",function(e){
        $('.side-bar-mobile').toggle("slide",{direction:"up", easing:"easeOutQuad"},300);
    });
    
    
    //--------------------------------------DESKTOP-CLICK--------------------------------------------//
    $('.side-bar-button').on('click', sideBarButton);
    
    function sideBarButton(){
        var $bar1 = $('.one-line-bar:nth-child(1)'),
            $bar2 = $('.one-line-bar:nth-child(2)'),
            $bar3 = $('.one-line-bar:nth-child(3)'),
            $sideBar = $('.menu-side-bar'),
            $mainContent = $('.main-content');
            
        var $timeDelay = 400;
        var state = $(this).data('state');  
        state = !state; 
        if (state) {
            $('.menu-side-bar > div > ul > li.open-one-sidebar').children('ul').hide();
            $('.side-bar-button').attr('title','Phóng to');
            
            $bar2.css('visibility','hidden');
            $bar1.removeClass('bt-animate-close');
            $bar3.removeClass('bt-animate-close');
            $bar1.addClass('bt-animate-open');
            $bar3.addClass('bt-animate-open');
            
            $sideBar.addClass('open-sidebar');
            $sideBar.find('div > ul > li > a > span').addClass('hidden');
            $sideBar.find('div > ul > li ul').addClass('hidden');
            $sideBar.find('div > ul > li > a > .fa-angle-down').addClass('hidden');
            
            if (window.matchMedia('(min-width: 992px)').matches) {
                setTimeout(function(){
                    $mainContent.css('padding-left','75px');
                },400);
            }  
        } else {
            $('.menu-side-bar > div > ul > li.open-one-sidebar').children('ul').show("slide",{direction:"up", easing:"easeOutQuad"},300);
            $('.side-bar-button').attr('title','Thu nhỏ');
            
            
            $bar2.css('visibility','visible');
            $bar1.addClass('bt-animate-close');
            $bar3.addClass('bt-animate-close');
            
            $sideBar.removeClass('open-sidebar');
            setTimeout(function(){
                $sideBar.find('div > ul > li > a > span').removeClass('hidden');
                $sideBar.find('div > ul > li ul').removeClass('hidden');
                $sideBar.find('div > ul > li > a > .fa-angle-down').removeClass('hidden');
            },150);
            if (window.matchMedia('(min-width: 992px)').matches) {
                setTimeout(function(){
                    $mainContent.css('padding-left','225px');
                },400);
            }
            
            //--------CLEAR-ALL-ACTIVE-LI---------------//
            $('.side-bar-mobile  > ul > li').find('li').data('state', false);
            $('.side-bar-mobile  > ul > li').find('i').css('transform','rotate(0)');  
            $('.side-bar-mobile  > ul > li').find('ul').hide();
            $('.side-bar-mobile  > ul > li').data('state', false);
        }
        $(this).data('state', state);   
    }
    
    //------------------------------------SET-HEIGHT-MENU-SIDEBAR-IF-NO-CONTENT----------------------------------------------//
    setHeightSideBar();
    function setHeightSideBar(){
        //var winHeight = window.screen.height;
        var documentHeight = $('body').height();
        var winInnerHeight = window.innerHeight;
        if(winInnerHeight > documentHeight){
            $('.menu-side-bar').height(winInnerHeight - 45);
        }
    }
    
    //------------------------------------LOG-OUT-BUTTON----------------------------------------------//
    $('.option-button').on('click',optionButtonClick);
    
    function optionButtonClick(){
        var $this = $(this);
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            $('.option .option-table').show("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.theme-button').data('state',false);
            $('.theme .theme-table').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
        } else {
            $('.option .option-table').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
        }
        $this.data('state', state);   
    }
});


