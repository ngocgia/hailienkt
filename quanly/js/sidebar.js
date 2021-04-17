$(document).ready(function(){
    $('.menu-side-bar > div > ul > li > ul').on("click",function(e){
        e.stopPropagation();
    });
    $('.menu-side-bar > div > ul > li > ul > li > ul').on("click",function(e){
       e.stopPropagation(); 
    });
//    $('.menu-side-bar i.fa-angle-down').on("click",function(){
//       var $this = $(this); 
//       $this.parent('a').each(function(e){
//           e.preventdefault();
//       });
//    });
    
    $('.menu-side-bar a').append('<i class="fa fa-angle-down"></i>');
    
    
    setArrowSideBar($('.menu-side-bar > div > ul > li'));
    setArrowSideBar($('.menu-side-bar > div > ul > li > ul > li'));
    setArrowSideBar($('.menu-side-bar > div > ul > li > ul > li > ul > li'));
    function setArrowSideBar(sidebar){
        for(var i=0 ; i<sidebar.length ; i++){
            if(!sidebar.eq(i).children('ul').length){
                sidebar.eq(i).find('.fa-angle-down').css('display','none');
            }
            else{
//                sidebar.on('click',function(event){
//                    event.preventDefault();
//                });
            }
        }   
    }

    $('.menu-side-bar > div > ul > li').on('mouseenter',{tmp: $('.menu-side-bar > div > ul > li')}, enterSideBar);
    $('.menu-side-bar > div > ul > li > ul > li').on('mouseenter',{tmp: $('.menu-side-bar > div > ul > li > ul > li')}, enterSideBar);
    $('.menu-side-bar > div > ul > li > ul > li > ul >li').on('mouseenter',{tmp: $('.menu-side-bar > div > ul > li > ul > li > ul > li')}, enterSideBar);
    
    function enterSideBar(e){
        var $this = $(this),
            $thisIndex = $(this).index(),
            $sideBar = e.data.tmp;
        $sideBar.not($this).removeClass('open-one-sidebar');
        $sideBar.not($this).find('li').removeClass('open-one-sidebar');
        $sideBar.not($this).find('i:last-of-type').css('transform','rotate(0deg)');  
        $sideBar.not($this).find('ul').removeClass('show');
        

        $this.addClass('open-one-sidebar');
        $this.children('a').children('i:last-of-type').css('transform','rotate(-90deg)');
        $this.children('ul').addClass('show'); 


        $this.on("mouseleave",{tmp: $this},leaveSideBar);
    }
    function leaveSideBar(e){
        var $this = e.data.tmp;

        $this.removeClass('open-one-sidebar');
        $this.find('i:last-of-type').css('transform','rotate(0deg)');
        $this.find('li').removeClass('open-one-sidebar');
        $this.find('ul').removeClass('show');

    }
    
    
    // Side bar Click
//    
//    if (window.innerWidth < 768) {
//        $('.menu-side-bar > div > ul > li').off('mouseenter');
//        $('.menu-side-bar > div > ul > li > ul > li').off('mouseenter');
//        $('.menu-side-bar > div > ul > li > ul > li > ul > li').off('mouseenter');
//        $('.menu-side-bar > div > ul > li').on('click',{tmp: $('.menu-side-bar > div > ul > li')}, clickSideBar);
//        $('.menu-side-bar > div > ul > li > ul > li').on('click',{tmp: $('.menu-side-bar > div > ul > li > ul > li')}, clickSideBar);
//        $('.menu-side-bar > div > ul > li > ul > li > ul > li').on('click',{tmp: $('.menu-side-bar > div > ul > li > ul > li > ul > li')}, clickSideBar);
//    
//        function clickSideBar(e){
//            var $this = $(this),
//                $thisIndex = $(this).index(),
//                $sideBar = e.data.tmp;
//            $sideBar.not($this).removeClass('open-one-sidebar');
//            $sideBar.not($this).find('li').removeClass('open-one-sidebar');
//            $sideBar.not($this).find('i').css('transform','rotate(0deg)');  
//            $sideBar.not($this).find('ul').removeClass('show');
//
//
//            $sideBar.not($this).data('state', false);
//            var state = $this.data('state');
//            state = !state; 
//            if (state) {
//                $this.addClass('open-one-sidebar');
//                $this.children('a').children('i').css('transform','rotate(-90deg)');
//                $this.children('ul').addClass('show'); 
//            } else {
//                $this.removeClass('open-one-sidebar');
//                $this.find('i').css('transform','rotate(0deg)');
//                $this.find('li').removeClass('open-one-sidebar');
//                $this.find('ul').removeClass('show');
//            }
//            $this.data('state', state);
//        }
//    }
    
});