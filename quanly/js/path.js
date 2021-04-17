$(document).ready(function(){
    $('.path > p > a').on("mouseenter",function(){
        var $this = $(this);
        $this.addClass('path-hover');
        $this.on("mouseleave",function(){
           $this.removeClass('path-hover'); 
        });
    });
});