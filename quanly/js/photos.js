$(document).ready(function(){
    
    $('body').append('<div class="full-image"></div>'); 
    
    $('.image-td').on('click',imageClick);
   
    function imageClick(){
        var $this = $(this),
            $img = $this.find('img').attr('src');
        
        $('.full-image').addClass('full-image-max');
        $('.full-image').append('<div><i title="Thu nhỏ ảnh">X</i></div><img alt="full-image" src="'+ $img +'">');

        $('.full-image i').on('click',function(){
            $('.full-image').removeClass('full-image-max');
            $('.full-image').empty();
        });
    }
    
    $('.main-table-photos').hide();
    $('.photos-display-thumb').on('click',function(){
        $('.main-thumb').show();
        $('.main-table-photos').hide();
    });
    $('.photos-display-list').on('click',function(){
        $('.main-thumb').hide();
        $('.main-table-photos').show();
    });
    
    
});