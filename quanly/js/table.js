$(document).ready(function(){
    //--------------------------------OPTION-TABLE-ALL-CHECK-BOX--------------------------//
    $('.main-table .inner-main-table table tr:first-child td:first-child a > div').on('click',activeAllOption);
    function activeAllOption(){
        var $this = $(this);
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            $('.main-table .inner-main-table table tr:not(.first-row)').addClass('active-tr');
            $('.main-table .inner-main-table table tr td:first-child a div').data('state',true);
            $('.main-table .inner-main-table table tr td:first-child i').css('display','block');
            
            $('.main-table .inner-main-table table tr td:first-child a input').data('state',true);
            $('.main-table .inner-main-table table tr td:first-child a input').attr('checked','checked');
        } else {
            $('.main-table .inner-main-table table tr:not(.first-row)').removeClass('active-tr');
            $('.main-table .inner-main-table table tr td:first-child a div').data('state',false);
            $('.main-table .inner-main-table table tr td:first-child i').css('display','none');
            
            $('.main-table .inner-main-table table tr td:first-child a input').data('state',true);
            $('.main-table .inner-main-table table tr td:first-child a input').removeAttr('checked');
        }
        $this.data('state', state);
        appearHandle();
    }
    
    //--------------------------------OPTION-TABLE-CHECK-BOX--------------------------//
    $('.main-table .inner-main-table table tr:not(.first-row) td:first-child a > div').on('click',activeOption);
    
    function activeOption(){
        var $this = $(this);
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            $this.parents('tr').addClass('active-tr')
            $this.find('i').css('display','block');
            
            $this.parents('a').find('input').data('state',true);
            $this.parents('a').find('input').attr('checked','checked');
        } else {
            $this.parents('tr').removeClass('active-tr')
            $this.find('i').css('display','none');
            
            $this.parents('a').find('input').data('state',false);
            $this.parents('a').find('input').removeAttr('checked');
        }
        $this.data('state', state);
        
        firstCheckTable();
        //--------------------------------OPTION-TABLE-CHECK-BOX-CLICK--------------------------//
        appearHandle();
    }
    
    function appearHandle(){
        var act = false;
        $('.main-table .inner-main-table table tr:not(.first-row)').each(function(){
            var $this = $(this);
            if($this.hasClass('active-tr')){
                act = true;
            }
        });
        if(act){
            $('.main-header .main-header-button > div.main-header-handle').css('display','block');
        }
        else{
            $('.main-header .main-header-button > div.main-header-handle').css('display','none');
        }
    }
    
    function firstCheckTable(){
        var che = false;
        $('.main-table .inner-main-table table tr:not(.first-row)').each(function(){
            var $this = $(this);
            if(!$this.hasClass('active-tr')){
                che = true;
            }
            if(!che){
                $('.main-table .inner-main-table table tr:first-child td:first-child a > div').data('state',true);
                $('.main-table .inner-main-table table tr:first-child td:first-child i').css('display','block');
            }
            else{
                $('.main-table .inner-main-table table tr:first-child td:first-child a > div').data('state',false);
                $('.main-table .inner-main-table table tr:first-child td:first-child i').css('display','none');
            }
        });
    }
    
    //--------------------------------TABLE-OPTION-HOVER--------------------------//
    $('.main-table .inner-main-table table tr td:last-child ul li').on('mouseenter',function(){
        var $this = $(this);
        var $thisIndex = $this.index();
        
        $this.find('i').addClass('menu-hover-' + ($thisIndex +1));
        $this.on('mouseleave',function(){
            $this.find('i').removeClass('menu-hover-' + ($thisIndex +1));
        });
    });
});