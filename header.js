var nav = document.getElementById('header');
window.onscroll = function(){
    if(window.pageYOffset > 100){
        nav.style.position='fixed';
        nav.style.top =0;
        nav.style.right=0;

    }else{
        nav.style.position = 'relative';
        nav.style.top = 100;
        nav.style.right=100;
    }
}