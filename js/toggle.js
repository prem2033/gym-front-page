function toggleburger(){
    const navbar=document.querySelector('.navbar'); 
    const list=document.querySelector('.nav-item-link');
    const home=document.querySelector('.home');
    const icon=document.querySelector('.icon');
       
    navbar.classList.toggle('navbar-response');
    list.classList.toggle('nav-item-link-resp');
    home.classList.toggle('home-width');
    icon.classList.toggle('icononclick');

}