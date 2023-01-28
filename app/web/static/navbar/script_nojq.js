function logo_rotate() {
    document.getElementById("logo_main").style.animation= '2s forwards logo_rotate'
}

function logo_rerotate() {
    document.getElementById("logo_main").style.animation = '2s forwards logo_rerotate';
    setTimeout(() => {  document.getElementById('logo_main').style.animation = 'logorotate_hue 10s infinite';}, 2000);
}


