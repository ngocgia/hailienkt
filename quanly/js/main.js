$(document).ready(function(){
//    $('.book-table .book-table-row .one-book-table').each(function(){
//        var $this = $(this);
//        if($this.hasClass('active-table')){
//            $this.find('.time-one-book-table').css('display','block');
//        }
//    });
    
    
    if($(window).innerWidth() >= 992){
        $('.book-table .book-table-row .one-book-table:not(".active-table")').on('mouseenter',function(){
            var $this = $(this);
            $this.addClass('active-table');
            $this.on('mouseleave',function(){
                $this.removeClass('active-table');
            });
        });
    }
//    if($(window).innerWidth() < 992){
//        $('.book-table .book-table-row .one-book-table').on('click',function(){
//            var $this = $(this);
//            
//            $('.book-table .book-table-row .one-book-table').not($this).data('state',false);
//            $('.book-table .book-table-row .one-book-table .op-one-book-table').removeClass('op-one-book-table-open');
//            $('.book-table .book-table-row .one-book-table .op-one-book-table a').removeClass('mb-blur-active');
//            
//            var state = $this.data('state');
//            state = !state; 
//            if (state) {
//                $this.find('.op-one-book-table').addClass('op-one-book-table-open');
//                $this.find('.op-one-book-table a').addClass('mb-blur-active');
//            } else {
//                $this.find('.op-one-book-table').removeClass('op-one-book-table-open');
//                $this.find('.op-one-book-table a').removeClass('mb-blur-active');
//            }
//            $this.data('state', state);  
//        });
//    }
});