function opensidebar() {
    
    document.getElementById('sidebar').style.opacity ='0%';
    document.getElementById('sidebar').style.display ='block';
    document.getElementById('arrow').style.animation ='2s rotate forwards';
    document.getElementById('sidebar').style.animation ='1s fadein 1s forwards';
    document.getElementById('rearrow').style.animation='none';
    setTimeout(() => {  document.getElementById('arrow').style.display ='none'; document.getElementById('rearrow').style.display ='block'; }, 2500);
};

function closesidebar() {
    document.getElementById('sidebar').style.animation ='1s fadeout 1s forwards';
    document.getElementById('sidebar').style.display ='none';
    document.getElementById('rearrow').style.animation ='2s rerotate forwards';
    document.getElementById('arrow').style.animation='none';
    setTimeout(() => {  document.getElementById('rearrow').style.display ='none'; document.getElementById('arrow').style.display ='block';}, 2500);
};

function start() {
    document.getElementById('logo_main').style.animation = '2s fullrotate '
}
