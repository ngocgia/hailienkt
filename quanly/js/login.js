$(document).ready(function(){
    $('.forgot-pw').addClass('unactive');
    
    $('.ad-forgot-pwd').on('click',function(){
        $('.login').addClass('unactive');
        $('.forgot-pw').removeClass('unactive');
    });
    
    $('.ad-back-login').on('click',function(){
        $('.login').removeClass('unactive');
        $('.forgot-pw').addClass('unactive');
    });
});