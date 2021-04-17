$(document).ready(function(){
    //--------------------------------OPTION-THUMB-ALL-CHECK-BOX--------------------------//
    $('.main-thumb .inner-main-thumb .main-thumb-total > a > div').on('click',activeThumbAllOption);
    function activeThumbAllOption(){
        var $this = $(this);
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            $('.main-thumb .inner-main-thumb .main-thumb-total > a > div').data('state',true);
            $('.main-thumb .inner-main-thumb .main-thumb-total > a > div i').css('display','block');
            
            $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb').addClass('active-thumb');
            $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb .inner-one-main-thumb .main-thumb-option > a:first-child > div').data('state',true);
            $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb .inner-one-main-thumb .main-thumb-option > a:first-child > div i').css('display','block');
            
            $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb .inner-one-main-thumb .main-thumb-option > a:first-child > input').data('state',true);
            $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb .inner-one-main-thumb .main-thumb-option > a:first-child > input').attr('checked','checked');
        } else {
            $('.main-thumb .inner-main-thumb .main-thumb-total > a > div').data('state',false);
            $('.main-thumb .inner-main-thumb .main-thumb-total > a > div i').css('display','none');
            
            $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb').removeClass('active-thumb');
            $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb .inner-one-main-thumb .main-thumb-option > a:first-child > div').data('state',false);
            $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb .inner-one-main-thumb .main-thumb-option > a:first-child > div i').css('display','none');
            
            $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb .inner-one-main-thumb .main-thumb-option > a:first-child > input').data('state',true);
            $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb .inner-one-main-thumb .main-thumb-option > a:first-child > input').removeAttr('checked');
        }
        $this.data('state', state);
        appearThumbHandle();
    }
    
    //--------------------------------OPTION-THUMB-CHECK-BOX--------------------------//
    $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb .inner-one-main-thumb .main-thumb-option > a:first-child > div').on('click',activeThumbOption);
    
    function activeThumbOption(){
        var $this = $(this);
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            $this.parents('.one-main-thumb').addClass('active-thumb')
            $this.find('i').css('display','block');
            
            $this.parents('a').find('input').data('state',true);
            $this.parents('a').find('input').attr('checked','checked');
        } else {
            $this.parents('.one-main-thumb').removeClass('active-thumb')
            $this.find('i').css('display','none');
            
            $this.parents('a').find('input').data('state',false);
            $this.parents('a').find('input').removeAttr('checked');
        }
        $this.data('state', state);
        
        firstCheckThumb();
        //--------------------------------OPTION-THUMB-CHECK-BOX-CLICK--------------------------//
        appearThumbHandle();
    }
    
    function appearThumbHandle(){
        var actt = false;
        $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb').each(function(){
            var $this = $(this);
            if($this.hasClass('active-thumb')){
                actt = true;
            }
        });
        if(actt){
            $('.main-header .main-header-button > div.main-header-handle').css('display','block');
        }
        else{
            $('.main-header .main-header-button > div.main-header-handle').css('display','none');
        }
    }
    
    function firstCheckThumb(){
        var chet = false;
        $('.main-thumb .inner-main-thumb .main-thumb-row .one-main-thumb').each(function(){
            var $this = $(this);
            if(!$this.hasClass('active-thumb')){
                chet = true;
            }
            if(!chet){
                $('.main-thumb .inner-main-thumb .main-thumb-total > a > div').data('state',true);
                $('.main-thumb .inner-main-thumb .main-thumb-total > a > div > i').css('display','block');
            }
            else{
                $('.main-thumb .inner-main-thumb .main-thumb-total > a > div').data('state',false);
                $('.main-thumb .inner-main-thumb .main-thumb-total > a > div > i').css('display','none');
            }
        });
    }
});