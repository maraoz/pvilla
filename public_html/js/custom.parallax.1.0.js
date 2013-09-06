$(function(){
    ////PARALLAXY by roXon
    //##### SET LAYERS DISTANCE AND SENSITIVITY ###########
    distance = 5;
    sensitivity = 20;
    //##############################
    var distHalf = distance / 2;

    var parW = $('#par').width(),
    parH = $('#par').height();

    $('.layer').each(function() {
        var layer = $(this);

        pixPos = distance * (layer.index() + 1);
        pixPosHalf = distHalf * (layer.index() + 1);

        layer.width('+=' + pixPos);
        layer.height('+=' + pixPos);
        layer.animate({
            left: '-' + pixPosHalf
        }, 0); // just to remove shock on page load
        layer.animate({
            top: '-' + pixPosHalf
            }, 0); // just to remove shock on page load
    
        wDiff1 = $('#par').width();
        hDiff1 = $('#par').height();
        wDiff2 = layer.width();
        hDiff2 = layer.height();

        var wDiff = ((wDiff2 / wDiff1) - 1).toFixed(2);
        var hDiff = ((hDiff2 / hDiff1) - 1).toFixed(2);

        $('#par').mousemove(function(mousEv) {
            parOffset = $(this).offset();
            mouseX = (mousEv.pageX - parOffset.left);
            mouseY = (mousEv.pageY - parOffset.top);
        });

        // for mouse and layers start pos
        var parWhalf = parW / 2,
        parHhalf = parH / 2;
        var mouseX = parWhalf,
        mouseY = parHhalf;
        var posX = parWhalf,
        posY = parHhalf;
        //#
        setInterval(function() {
            posX += (mouseX - posX) / sensitivity;
            posY += (mouseY - posY) / sensitivity;
            layer.css({
                left: '-' + Math.round(posX * wDiff) + 'px',
                top: '-' + Math.round(posY * hDiff) + 'px'
            });
        }, 30);

    });
});