$(document).ready(function(){
    
    
    
    //-------------ORDER-MOBILE-PHONE--------------//
    if($(window).innerWidth()< 768){
        $('.order-menu').removeClass('order-table-mobile');
        $('.order-table').addClass('order-table-mobile');
        
        $('.order-mobile > ul > li:first-child').on('click',function(){
            $('.order-mobile > ul > li:first-child').addClass('order-mobile-active');
            $('.order-mobile > ul > li:nth-child(2)').removeClass('order-mobile-active');
            $('.order-menu').removeClass('order-menu-mobile');
            $('.order-table').addClass('order-table-mobile');
        });
        
        $('.order-mobile > ul > li:nth-child(2)').on('click',function(){
            $('.order-mobile > ul > li:first-child').removeClass('order-mobile-active');
            $('.order-mobile > ul > li:nth-child(2)').addClass('order-mobile-active');
            $('.order-menu').addClass('order-menu-mobile');
            $('.order-table').removeClass('order-table-mobile');
        });
        
        $('.print-menu').removeClass('print-table-mobile');
        $('.print-table').addClass('print-table-mobile');
        
        $('.print-mobile > ul > li:first-child').on('click',function(){
            $('.print-mobile > ul > li:first-child').addClass('print-mobile-active');
            $('.print-mobile > ul > li:nth-child(2)').removeClass('print-mobile-active');
            $('.print-menu').removeClass('print-menu-mobile');
            $('.print-table').addClass('print-table-mobile');
        });
        
        $('.print-mobile > ul > li:nth-child(2)').on('click',function(){
            $('.print-mobile > ul > li:first-child').removeClass('print-mobile-active');
            $('.print-mobile > ul > li:nth-child(2)').addClass('print-mobile-active');
            $('.print-menu').addClass('print-menu-mobile');
            $('.print-table').removeClass('print-table-mobile');
        });
    }
    
    
    
    
    
    
    //--------------------------------------MOVE-MENU-TO-MORE--------------------------------------------------------//
    var m = moveMenuToMore();
    for(var i = m.length - 1; i >= 0; i--){
        $('.order .order-menu .order-menu-header > ul > li').eq(m[i]).prependTo('.order .order-menu .order-menu-header .order-menu-overflow .inner-order-menu-overflow > ul');
    }
    
    function moveMenuToMore(){
        var h = $('.order .order-menu .order-menu-header').innerWidth() - $('.order .order-menu .order-menu-header .order-menu-overflow').innerWidth();
        var wh = 0;
        var r = [];
        for(var u = 0; u < $('.order .order-menu .order-menu-header > ul > li').length; u++){
            if(wh <= h){
                wh = wh + $('.order .order-menu .order-menu-header > ul > li').eq(u).innerWidth();
            }
            if(wh > h){
                r.push(u);
            }
        }
        return r;
    }
    
    //--------------------------------------SHOW-MORE-MENU--------------------------------------------------------//
    $('.order .order-menu .order-menu-header .order-menu-overflow .order-menu-dot').on('click',function(){
        var $this = $(this);
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            $this.find('div').addClass('order-menu-dot-active');
            $this.parents('.order-menu-overflow').find('.inner-order-menu-overflow > ul').show('drop',{direction:"left"},200);
        } else {
            $this.find('div').removeClass('order-menu-dot-active');
            $this.parents('.order-menu-overflow').find('.inner-order-menu-overflow > ul').hide('drop',{direction:"down"},200);
        }
        $this.data('state', state);
    });
//    
//    
//    
//    //---------------------------------------MENU-HEADER-------------------------------------------------------//
//    $('.order .order-menu .order-menu-header > ul > li > a').on('click',orderMenu);
//    $('.order .order-menu .order-menu-header .order-menu-overflow .inner-order-menu-overflow > ul > li a').on('click',orderMenu);
//    
//    function orderMenu(){
//        var $this = $(this);
//        
//        $('.order .order-menu .order-menu-header > ul > li').removeClass('menu-active');
//        $('.order .order-menu .order-menu-header .order-menu-overflow .inner-order-menu-overflow > ul > li').removeClass('menu-active');
//        $this.parent('li').addClass('menu-active');
//        
//        var n = getIndexOrderMenu($this);
//        
//        $('.order .order-menu .order-list .one-order-list').each(function(){
//            var $this4 = $(this);
//            
//            var d = getOneOrderList($this4);
//            
//            if(d == n){
//                $this4.addClass('one-order-active');
//            }
//            else{
//                $this4.removeClass('one-order-active');
//            }
//            
//            oneDishes();
//        });
//    }
//    
//    function getOneOrderList($this){
//        var a = $this.attr('class').split(' ');
//        for(var i = 0 ; i< a.length ; i++){
//            if(a[i].indexOf('menu-list-') > -1){
//                var b = a[i].split('-');
//                for(var j = 0; j < b.length ; j++){
//                    if( j == b.length - 1){
//                        var c = b[j];
//                    }
//                }
//            }
//        }
//        return c;
//    }
//    
//    function getIndexOrderMenu($this){
//        var a = $this.parent('li').attr('class').split(' ');
//        for(var i = 0 ; i< a.length ; i++){
//            if(a[i].indexOf('order-menu-') > -1){
//                var b = a[i].split('-');
//                for(var j = 0; j < b.length ; j++){
//                    if( j == b.length - 1){
//                        var c = b[j];
//                    }
//                }
//            }
//        }
//        return c;
//    }
//    //--------------------------------------END-MENU-HEADER--------------------------------------------------------//
//    
//    
//    
//    //--------------------------------------CLICK-DISHES--------------------------------------------------------//
//    oneDishes();
//    function oneDishes(){
//        $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-menu > ul > li').removeClass('list-active');
//        $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-menu > ul > li').eq(0).addClass('list-active');
//        
//        $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-row .one-dishes').each(function(){
//            var $th = $(this);
//            if($th.hasClass('type-dishes-0')){
//                $th.addClass('one-dishes-display');
//            }
//            else{
//                $th.removeClass('one-dishes-display');
//            }
//
//            if($(window).width()<992){
//                setAnimate(2);
//                setHeightOrderList(2);
//            }
//            else{
//                setAnimate(3);
//                setHeightOrderList(3);
//            }
//
//        });
//
//        $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-menu > ul > li > a').on('click',function(){
//            var $this = $(this);
//
//            $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-menu > ul > li').removeClass('list-active');
//            $this.parent('li').addClass('list-active');
//
//            //-----GET-VALUE-OF-LI-----------//
//            var a = getIndexMenu($this);
//
//            $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-row .one-dishes').each(function(){
//                var $this2 = $(this);
//                    $this2.removeClass('one-dishes-display');
//
//                //-------------GET-VALUE-OF-DISHES--------------//
//                var b = displayDishes($this2);
//                for(var i = 0 ; i < b.length ; i++){
//                    if(a == b[i]){
//                        $this2.addClass('one-dishes-display');
//                    }
//                }
//
//                if($(window).width()<992){
//                    setAnimate(2);
//                    setHeightOrderList(2);
//                }
//                else{
//                    setAnimate(3);
//                    setHeightOrderList(3);
//                }
//            });
//
//        });
//    }
//    
//    
//    //-------------SET-HEIGHT-ORDER-LIST-ROW--------------//
//    function setHeightOrderList(a){
//        var ohe = $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-row').innerHeight();
//        
//        var len = $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-row .one-dishes.one-dishes-display').length;
//        var he = $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-row .one-dishes').innerHeight();
//        if(len%a == 0){
//            if(((len/a)*he)> ohe){
//                $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-row').css('height',(len/a)*he + 'px');
//            }
//        }
//        else{
//            if(((Math.floor((len/a)) + 1)*he) > ohe){
//                $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-row').css('height',(Math.floor((len/a)) + 1)*he + 'px');
//            }
//        }
//    }
//    
//    //-------------SET-ANIMATION-OF-DISHES--------------//
//    function setAnimate(a){
//        var wi = $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-row .one-dishes').innerWidth();
//        var he = $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-row .one-dishes').innerHeight();
//        $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-row .one-dishes.one-dishes-display').each(function(index){
//            var $this3 = $(this),
//                $index = index + 1;
//                $this3.css('top',Math.floor(($index - 1)/a)*he + 'px');
//                if($index%a == 0){
//                    $this3.css('left',(a - 1)*wi + 'px');
//                }
//                else{
//                    $this3.css('left',(($index%a) - 1)*wi + 'px');
//                }
//            
//            var leng = $('.order .order-menu .order-list .one-order-list.one-order-active .order-list-row .one-dishes.one-dishes-display').length;
//            $this3.css('z-index',(leng - $index) + 1);
//        });
//    }
//    
//    
//    
//    function getIndexMenu($this){
//        var a = $this.parent('li').attr('class').split(' ');
//        for(var i = 0 ; i< a.length ; i++){
//            if(a[i].indexOf('order-list-') > -1){
//                var b = a[i].split('-');
//                for(var j = 0; j < b.length ; j++){
//                    if( j == b.length - 1){
//                        var c = b[j];
//                    }
//                }
//            }
//        }
//        return c;
//    }
//    
//    function displayDishes($this2){
//        var c = [];
//        var a = $this2.attr('class').split(' ');
//        for(var i = 0 ; i< a.length ; i++){
//            if(a[i].indexOf('type-dishes-') > -1){
//                var b = a[i].split('-');
//                for(var j = 0; j < b.length ; j++){
//                    if( j == b.length - 1){
//                        c.push(b[j]);
//                    }
//                }
//            }
//        }
//        return c;
//    }
    
});