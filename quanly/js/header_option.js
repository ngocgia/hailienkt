$(document).ready(function(){
    //-----------------------------------------MENU-SEARCH------------------------------------------//
//    $('.search > div.main-header-search > div.main-search-box > ul > li > ul > li > ul').on("click",function(e){
//        e.stopPropagation();
//    });
//    $('.search > div.main-header-search > div.main-search-box > ul > li > ul > li > ul > li > ul').on("click",function(e){
//       e.stopPropagation(); 
//    });
    
    $('.search > div.main-header-search > div.main-search-box > ul > li').on('mouseenter',{tmp: $('.search > div.main-header-search > div.main-search-box > ul > li')}, enterSideBar);
    $('.search > div.main-header-search > div.main-search-box > ul > li > ul > li').on('mouseenter',{tmp: $('.search > div.main-header-search > div.main-search-box > ul > li > ul > li')}, enterSideBar);
    $('.search > div.main-header-search > div.main-search-box > ul > li > ul > li > ul >li').on('mouseenter',{tmp: $('.search > div.main-header-search > div.main-search-box > ul > li > ul > li > ul > li')}, enterSideBar);
    
    function enterSideBar(e){
        var $this = $(this),
            $thisIndex = $(this).index(),
            $sideBar = e.data.tmp;
        $sideBar.not($this).find('ul').removeClass('show');
        

        $this.children('ul').addClass('show'); 


        $this.on("mouseleave",{tmp: $this},leaveSideBar);
    }
    function leaveSideBar(e){
        var $this = e.data.tmp;

        $this.find('ul').removeClass('show');

    }
    
    
    //-----------------------------------------SEARCH-CLICK-BOX------------------------------------------//
    $('.main-button-search').on('click',mainHeaderSearch);
    
    function mainHeaderSearch(){
        var $this = $(this);
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            $('.main-header-search .main-search-box').show("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.main-button-handle').data('state',false);
            $('.main-header-handle .main-handle-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.main-button-add').data('state',false);
            $('.main-header-add .main-add-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.main-button-option').data('state',false);
            $('.main-header-option .main-option-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
        } else {
            $('.main-header-search .main-search-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
        }
        $this.data('state', state);  
    }
    
    
    //-----------------------------------------HANDLE-CLICK-BOX------------------------------------------//
    $('.main-button-handle').on('click',mainHeaderHandle);
    
    function mainHeaderHandle(){
        var $this = $(this);
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            $('.main-header-handle .main-handle-box').show("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.main-button-search').data('state',false);
            $('.main-header-search .main-search-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.main-button-add').data('state',false);
            $('.main-header-add .main-add-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.main-button-option').data('state',false);
            $('.main-header-option .main-option-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
        } else {
            $('.main-header-handle .main-handle-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
        }
        $this.data('state', state);  
    }
    
    //-----------------------------------------ADD-CLICK-BOX------------------------------------------//
    $('.main-button-add').on('click',mainHeaderAdd);
    
    function mainHeaderAdd(){
        var $this = $(this);
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            $('.main-header-add .main-add-box').show("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.main-button-search').data('state',false);
            $('.main-header-search .main-search-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.main-button-handle').data('state',false);
            $('.main-header-handle .main-handle-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.main-button-option').data('state',false);
            $('.main-header-option .main-option-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
        } else {
            $('.main-header-add .main-add-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
        }
        $this.data('state', state);  
    }
    
    //-----------------------------------------OPTION-CLICK-BOX------------------------------------------//
    $('.main-button-option').on('click',mainHeaderOption);
    
    function mainHeaderOption(){
        var $this = $(this);
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            $('.main-header-option .main-option-box').show("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.main-button-search').data('state',false);
            $('.main-header-search .main-search-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.main-button-handle').data('state',false);
            $('.main-header-handle .main-handle-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
            $('.main-button-add').data('state',false);
            $('.main-header-add .main-add-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
        } else {
            $('.main-header-option .main-option-box').hide("slide",{direction:"up", easing:"easeOutQuad"},200);
        }
        $this.data('state', state);  
    }
    
    //-----------------------------------------ACTIVE-CHECK-OPTION------------------------------------------//
    $('.main-header .main-header-button > div.main-header-option > div.main-option-box ul li a').each(function(){
        var $this = $(this);
        
        if($this.parent('li').hasClass('active-td')){
            $this.data('state',true);
            $this.find('> div i').css('display','block');
        }
        else{
            $this.data('state',false);
            $this.find('> div i').css('display','none');
        }
    });
    
    var arr_op = [];
    var $op_box = $('.main-header .main-header-button > div.main-header-option > div.main-option-box ul li');
    for(var i = 0 ; i< $op_box.length ; i++){
        if($op_box.eq(i).hasClass('active-td')){
            arr_op[i] = 1;
        }
        else{
            arr_op[i] = 0;
        }
    }
    //-----------------------------------------ACTIVE-COLUME-TABLE------------------------------------------//
    activeTable();
    
    function activeTable(){
        $('.main-table .inner-main-table table tr').each(function(){
            var $this = $(this);
            for(var j = 0 ; j< $('.main-table .inner-main-table table tr:nth-child(1) td').length ; j++){
                if(arr_op[j] == 0){
                    $this.find('td:nth-child('+ (j+2) +')').addClass('hidden');
                }
                else{
                    $this.find('td:nth-child('+ (j+2) +')').removeClass('hidden');
                }
            }
        });
    }
    
    //-----------------------------------------ACTIVE-CHECK-OPTION-CLICK------------------------------------------//
    $('.main-header .main-header-button > div.main-header-option > div.main-option-box ul li a').on('click',activeOption);
    
    function activeOption(){
        var $this = $(this);
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            $this.parent('li').addClass('active-td')
            $this.find('> div i').css('display','block');
        } else {
            $this.parents('li').removeClass('active-td')
            $this.find('> div i').css('display','none');
        }
        $this.data('state', state);
        
        var $i = $this.parent('li').index();
        if($this.parent('li').hasClass('active-td')){
            arr_op[$i] = 1;
        }
        else{
            arr_op[$i] = 0;
        }
        
        activeTable();
    }
});


