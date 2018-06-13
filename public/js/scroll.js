$(document).ready(function(){
    $('#moveDown').click(function(){
        // скорость скролла
        var speed = 1000;
        
        // место скролла
        var top = $('#ex').offset().top;
        
        $('html, body').animate({scrollTop: top}, speed);
        
        return false;
    });
});