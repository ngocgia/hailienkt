$('document').ready(function(){
    
    $('.one-help > i').on('mouseenter',function(){
        var $this = $(this);
        $this.parent('.one-help').children('.one-help-text').css('display','block');
        $this.on('mouseleave',function(){
            $this.parent('.one-help').children('.one-help-text').css('display','none');
        });
    });
   
    $('.add-table .add-content > div').each(function(index){
        if(index != 0){
            $(this).css('display','none');
        }
    });
    
    setHeightSideBar();
    
    $('.add-table .add-direction ul li').on('click',addTable);

    function addTable(){
        var $this = $(this),
           $i = $this.index();

        $('.add-table .add-direction ul li').not($this).removeClass('add-acti-dir');
        $this.addClass('add-acti-dir');

        $('.add-table .add-content > div').each(function(index){
            if(index != $i){
                $(this).css('display','none');
            }
            else{
                $(this).css('display','block');
            }
        });
        
        setHeightSideBar();
    }
    
    
    function setHeightSideBar(){
        //var winHeight = window.screen.height;
        var documentHeight = $('body').height();
        var winInnerHeight = window.innerHeight;
        if(winInnerHeight > documentHeight){
            $('.menu-side-bar').height(winInnerHeight - 45);
        }
    }
});