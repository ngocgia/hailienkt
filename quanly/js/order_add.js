$(document).ready(function(){
    $('.order-table .order-bill > table tr td:nth-child(2) i').on('click',function(){
        var $this = $(this);
        var $thisIn = $this.parents('tr').index();
        
        $('.order-table .order-bill > table tr td:nth-child(2) i').not($this).data('state', false);
        $('.order-table .order-bill > table tr td:nth-child(2) i').not($this).css('color','#262626');
        $('.order-table .order-bill .order-note > div').hide();
        
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            
            
            $this.css('color','red');
            $('.order-table .order-bill .order-note > div').eq($thisIn).show();
        } else {
            $this.css('color','#262626');
            $('.order-table .order-bill .order-note > div').eq($thisIn).hide();
        }
        $this.data('state', state);
    });
    
    
    
    
    $('.order-table .order-bill-avalaible > table tr td:nth-child(2) i').on('click',function(){
        var $this = $(this);
        var $thisIn = $this.parents('tr').index();
        
        $('.order-table .order-bill-avalaible > table tr td:nth-child(2) i').not($this).data('state', false);
        $('.order-table .order-bill-avalaible > table tr td:nth-child(2) i').not($this).css('color','#262626');
        $('.order-table .order-bill-avalaible .order-note > div').hide();
        
        var state = $this.data('state');  
        state = !state; 
        if (state) {
            
            
            $this.css('color','red');
            $('.order-table .order-bill-avalaible .order-note > div').eq($thisIn).show();
        } else {
            $this.css('color','#262626');
            $('.order-table .order-bill-avalaible .order-note > div').eq($thisIn).hide();
        }
        $this.data('state', state);
    });
    
//    var sess = [];
//    
//    //--------------------------------OPTION-TABLE-CHECK-BOX--------------------------//
//    $('.order .order-menu .order-list .one-order-list .order-list-row .one-dishes .one-dishes-add a').on('click',activeDishes);
//    
//    function activeDishes(){
//        var $this = $(this);
//        var state = $this.data('state');  
//        state = !state; 
//        if (state) {
//            $this.parents('.one-dishes').addClass('active-one-dishes');
//            $this.find('i').css('display','block');
//            
//            $this.find('input').data('state',true);
//            $this.find('input').attr('checked','checked');
//            
//            //-------------SESSION------------------//
//            sessDishes($this.parents('.one-dishes'));
//        } else {
//            $this.parents('.one-dishes').removeClass('active-one-dishes');
//            $this.find('i').css('display','none');
//            
//            $this.find('input').data('state',false);
//            $this.find('input').removeAttr('checked');
//            
//            //-------------CLEAR-SESSION------------------//
//            clearSessDishes($this.parents('.one-dishes'));
//        }
//        $this.data('state', state);
//        
//        
//    }
//    
//    function sessDishes($this){
//        var i = $this.find('.one-dishes-add input').val(),
//            n = $this.find('.one-dishes-name a').text(),
//            am = 1,
//            p = $this.find('.one-dishes-price p').text(),
//            a = [i,n,am,p];
//            sess.push(a);
//            
//            $('.order-table .order-bill > table').append('<tr class="row-dishes row-dishes-'+ i +'">\n\
//                    <td class="hidden">'+ i +'</td>\n\
//                    <td>'+ n +'</td>\n\
//                    <td class="amount-dishes-'+ i +'"><input type="number" value="'+ am +'"></td>\n\
//                    <td class="price-dishes">'+ p +'</td>\n\
//                    <td><a class="delete-dishes-'+ i +'"><i class="icon-cross"></i></a></td>\n\
//                </tr>');
//            $(".delete-dishes-"+ i).on("click", deleteSessDishes);
//            $(".amount-dishes-"+ i +" input").on("change",{tmp:p, id:i}, changeMoney);
//            
//            countMoney();
//    }
//    
//    function clearSessDishes($this){
//        var i = $this.find('.one-dishes-add input').val(),
//            n = $this.find('.one-dishes-name a').text(),
//            am = 1,
//            p = $this.find('.one-dishes-price p').text(),
//            a = [i,n,am,p];
//            for(var j = sess.length - 1; j >= 0; j--) {
//                if(sess[j][0] == a[0]) {
//                   sess.splice(j, 1);
//                }
//            }
//            
//            $('.order-table .order-bill > table tr.row-dishes-' + i).remove();
//            
//            countMoney();
//    }
//    
//    function deleteSessDishes(){
//        var $this = $(this);
//        $this.parents('tr.row-dishes').remove();
//        var a = $this.attr('class').split('-');
//        
//        $('.order .order-menu .order-list .one-order-list .order-list-row .one-dishes.active-one-dishes').each(function(){
//            var $this2 = $(this).find('.one-dishes-add a');
//            if($this2.parents('.one-dishes').find('.one-dishes-add input').val() == a[2]){
//                $this2.data('state', false);
//                $this2.parents('.one-dishes').removeClass('active-one-dishes');
//                $this2.find('i').css('display','none');
//
//                $this2.find('input').data('state',false);
//                $this2.find('input').removeAttr('checked');
//            }
//        });
//        
//        for(var j = sess.length - 1; j >= 0; j--) {
//            if(sess[j][0] == a[2]) {
//               sess.splice(j, 1);
//            }
//        }
//        
//        countMoney();
//    }
//    
//    function changeMoney(e){
//        var $this = $(this),
//            val = $this.val();
//        var si = e.data.tmp;
//        var id = e.data.id;
//        
//        $this.parents('tr.row-dishes').find('.price-dishes').text(si*val);
//        
//        for(var j = sess.length - 1; j >= 0; j--) {
//            if(sess[j][0] == id) {
//               sess[j][2] = val;
//            }
//        }
//        
//        countMoney();
//    }
//    
//    function countMoney(){
//        var to = 0;
//        $('.order-table .order-bill > table tr.row-dishes').each(function(){
//            var $this = $(this);
//            
//            var pr = Number($this.find('td.price-dishes').text());
//            to = to + pr;
//        });
//        $('.order-table .order-total-money > span').text(to);
//		
//    }
    
    
});