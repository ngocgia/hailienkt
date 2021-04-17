$(document).ready(function(){
    $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb').each(function(index){
       var $this = $(this);
       var $index = index + 1;
       var $count = $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb').length;
       cleardiv($this,$index,$count,6,6,4,2);
    });
    
    $('.order .order-menu .order-list .one-order-list .order-list-row').each(function(){
        $(this).find('.one-dishes').each(function(index){
           var $this = $(this);
           var $index = index + 1;
           var $count = $('.order .order-menu .order-list .one-order-list .order-list-row .one-dishes').length;
           cleardiv($this,$index,$count,4,4,2,2);
        });;
    });
    
//    $('.order .order-menu .order-list .one-order-list .order-list-row .one-dishes').each(function(index){
//       var $this = $(this);
//       var $index = index + 1;
//       var $count = $('.order .order-menu .order-list .one-order-list .order-list-row .one-dishes').length;
//       cleardiv($this,$index,$count,4,4,2,2);
//    });
    
    $('.print .print-menu .print-row .one-print-table').each(function(index){
       var $this = $(this);
       var $index = index + 1;
       var $count = $('.print .print-menu .print-row .one-print-table').length;
       cleardiv($this,$index,$count,3,3,2,1);
    });
    
    function cleardiv($div,i,j,a,b,c,d){
        if(window.innerWidth >= 1200){
            var t = Math.floor(j/a);
            for (var u = 1 ; u<=t ; u++){
                if(i == (u*a)){
                    $('<div class="clear"></div>').insertAfter($div);
                }
            }
            
        }
        else if(window.innerWidth >= 992){
            var t = Math.floor(j/b);
            for (var u = 1 ; u<=t ; u++){
                if(i == (u*b)){
                    $('<div class="clear"></div>').insertAfter($div);
                }
            }
        }
        else if(window.innerWidth >= 768){
            var t = Math.floor(j/c);
            for (var u = 1 ; u<=t ; u++){
                if(i == (u*c)){
                    $('<div class="clear"></div>').insertAfter($div);
                }
            }
        }
        else{
            var t = Math.floor(j/d);
            for (var u = 1 ; u<=t ; u++){
                if(i == (u*d)){
                    $('<div class="clear"></div>').insertAfter($div);
                }
            }
        }
    } 
});