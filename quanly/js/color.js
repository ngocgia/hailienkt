$(document).ready(function(){
    
    $('.theme .one-theme:nth-child(1)').data('color',{co_hd : '#174b69', co_me : '#3b637d', co_me_ho : '#375b73'});
    $('.theme .one-theme:nth-child(2)').data('color',{co_hd : '#2f789a', co_me : '#0f5d82', co_me_ho : '#2f789a'});
    $('.theme .one-theme:nth-child(3)').data('color',{co_hd : '#1ba556', co_me : '#2e8e57', co_me_ho : '#1ba556'});
    $('.theme .one-theme:nth-child(4)').data('color',{co_hd : '#de5e6f', co_me : '#ca4557', co_me_ho : '#de5e6f'});
    $('.theme .one-theme:nth-child(5)').data('color',{co_hd : '#16a086', co_me : '#13947c', co_me_ho : '#16a086'});
    $('.theme .one-theme:nth-child(6)').data('color',{co_hd : '#e8529e', co_me : '#d73c8a', co_me_ho : '#e8529e'});
    
    
    $('.theme-button').on('click',themeClick);
    
    function themeClick(){
        var $this = $(this);
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            $('.theme .theme-table').show("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.option-button').data('state',false);
            $('.option .option-table').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
        } else {
            $('.theme .theme-table').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
        }
        $this.data('state', state);   
    }
    
    $('.theme .one-theme').on('click',{tmp:$('.theme .one-theme')},onethemeclick);
    
    function onethemeclick(e){
        var $this = $(this);
        var $theme = e.data.tmp;
        
        $theme.not($this).removeClass('show-theme');
        $this.addClass('show-theme');
        
        var $color = $this.data('color');
        changetheme($color);
    }
    
    function changetheme($color){
        var $co_hd = $color.co_hd,
            $co_me = $color.co_me,
            $co_me_ho = $color.co_me_ho;
        $('.header').css('background-color',$co_hd);
        $('.menu-side-bar').css('background-color',$co_me);
        $('.side-bar-mobile').css('background-color',$co_me);
        $('.menu-side-bar > div > ul > li > ul, .menu-side-bar > div > ul > li > ul > li > ul').css('background-color',$co_me);
        $('.menu-side-bar > div > ul > li > a, .menu-side-bar > div > ul > li > ul > li > a, .menu-side-bar > div > ul > li > ul > li > ul > li > a').on('mouseenter',function (){
            $(this).css('background-color', $co_me_ho);
        });
        $('.menu-side-bar > div > ul > li > a, .menu-side-bar > div > ul > li > ul > li > a, .menu-side-bar > div > ul > li > ul > li > ul > li > a').on('mouseleave',function (){
            $(this).css('background-color', 'transparent');
        });
        $('.main-header .main-header-button > div > a').css('background-color',$co_me);
        $('.main-header .main-header-button > div.main-header-submit > div.main-button-submit button ,.main-header .main-header-button > div.main-header-image label, .search > div.main-header-search > a.main-button-search, .main-header .main-header-button > div > a').on('mouseenter',function(){
            $(this).css('background-color',$co_me_ho);
        });
        $('.main-header .main-header-button > div.main-header-submit > div.main-button-submit button, .main-header .main-header-button > div.main-header-image label, .search > div.main-header-search > a.main-button-search, .main-header .main-header-button > div > a').on('mouseleave',function(){
            $(this).css('background-color',$co_me);
        });
        $('.search > div.main-header-search > div.main-search-box ul, .search > div.main-header-search > div.main-search-box, .search > div.main-header-search > a.main-button-search, .header .option .option-table, .main-header .main-header-button > div.main-header-image label, .main-header .main-header-button > div.main-header-submit > div.main-button-submit button, .main-header .main-header-button > div.main-header-handle > div.main-handle-box, .main-header .main-header-button > div.main-header-add > div.main-add-box, .main-header .main-header-button > div.main-header-option > div.main-option-box').css('background-color',$co_me);
        $('.search > div.main-header-search > div.main-search-box ul li a, .header .option .option-table ul li a, .main-header .main-header-button > div.main-header-image label, .main-header .main-header-button > div.main-header-submit > div.main-button-submit button , .main-header .main-header-button > div.main-header-handle > div.main-handle-box ul li a, .main-header .main-header-button > div.main-header-handle > div.main-handle-box ul li button, .main-header .main-header-button > div.main-header-add > div.main-add-box ul li a, .main-header .main-header-button > div.main-header-option > div.main-option-box ul li a').on('mouseenter',function(){
            $(this).css('background-color',$co_me_ho);
        });
        $('.search > div.main-header-search > div.main-search-box ul li a, .header .option .option-table ul li a, .main-header .main-header-button > div.main-header-handle > div.main-handle-box ul li a, .main-header .main-header-button > div.main-header-handle > div.main-handle-box ul li button, .main-header .main-header-button > div.main-header-add > div.main-add-box ul li a, .main-header .main-header-button > div.main-header-option > div.main-option-box ul li a').on('mouseleave',function(){
            $(this).css('background-color','transparent');
        });
        
        
        $('.search .inner-search input').css('border','1px solid ' + $co_me);
        $('.search .inner-search i').css('background-color',$co_me);
        $('.search .inner-search i').css('border','1px solid ' + $co_me);
        
        $('.main-photos-display .photos-display-list > a, .main-photos-display .photos-display-thumb > a').css('background-color',$co_me);
        $('.main-photos-display .photos-display-list > a, .main-photos-display .photos-display-thumb > a').on('mouseenter',function(){
            $(this).css('background-color',$co_me_ho);
        });
        $('.main-photos-display .photos-display-list > a, .main-photos-display .photos-display-thumb > a').on('mouseleave',function(){
            $(this).css('background-color',$co_me);
        });
    }
});

