$(function(){
    $('[data-toggle="scroll"]').on('click',function(){
        var target = $(this).data('target');
        var offset = $(this).data('offset') || 0;
        var top = $(target).offset().top - offset;
        
        $('html').animate({
            scrollTop:top+'px'
        },500);

        return false;
    });
});