var element = document.getElementsById('element');
var fullscreen = document.getElementById('fullscreen');

fullscreen.addEventListener('click' , function(){
    //element.webkitRequestFullscreen();
    if(element.requestFullscreen){
        element.requestFullscreen();
    }
    else if(element.webkitRequestFullscreen ){
        element.webkitRequestFullscreen();
    }
    else if(element.mozRequestFullscreen){
            element.mozRequestFullscreen();
    }
    else if(element.msRequestFullscreen){
        element.msRequestFullscreen();
    }
} );