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
                position: 'relative',

            });

            $('.header-date').animate({
                left:'250px',
            });

            $('.header-date').css({position:'fixed'});
            
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
            cont=1;
        };
    });
};