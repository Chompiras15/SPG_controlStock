$(document).ready(main);

var cont=1;
function main()
{
    $('.nav_menu').click(function(){
        //$('.sidebar').toggle();
        if(cont==1)
        {
            $('.sidebar').animate({
                left:'0'
            });
            $('.logo').animate({
                left:'0'
            });
            $('.logo').css({
                position: 'relative'

            });

            $('.header-date').animate({
                left:'250px'
            });

            $('.header-date').css({position:'fixed'});

          
           $('.header_sede').animate({
                left:'-200px'
            });
           

           /* document.getElementsByClassName("pull-right")[0].animate([
                // fotogramas clave
                { transform: 'translateX(0px)' },
                { transform: 'translateX(300px)' }
              ], {
                // opciones de sincronización
                duration: 1000,
                iterations: 1
              });*/

           $('.header_user').animate({
                right:'-200px'
            });

      
            
            cont=0;
        }else{
            $('.sidebar').animate({
                left:'-100%'
            });

            $('.logo').animate({
                left:'-100%'
            });

            $('.logo').css({position:'absolute'});

            $('.header-date').animate({
                left:'0px',
            });
            $('.header-date').css({position:'fixed'});

          
           /* $('.pull-right').animate({
                top:'00px'
            });*/
            $('.header_sede').animate({
                left:'20px'
            });

            $('.header_user').animate({
                right:'80px'
            });
           

            cont=1;
        };
    });
};