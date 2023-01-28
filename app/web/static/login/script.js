function start() {
    document.getElementById("log_form_container").style.animation='5s fadein 2s forwards'
    document.getElementsByClassName('log_form_email')[0].style.filter='blur(4px)'
    document.getElementsByClassName('log_form_pass')[1].style.filter='blur(4px)'
    document.getElementsByClassName('log_form_pass')[0].style.filter='blur(4px)'
    document.querySelector('.log_btn').style.filter='blur(8px)'
    document.getElementById('logo_main').style.animation = '2s fullrotate '
}

function log_before_name() {
    document.getElementsByClassName('log_form_email')[0].style.filter='blur(4px)'
    document.getElementsByClassName('log_form_pass')[1].style.filter='blur(4px)'
    document.getElementsByClassName('log_form_pass')[0].style.filter='blur(4px)'
    document.querySelector('.log_btn').style.filter='blur(8px)'
    document.getElementsByClassName('log_form_name')[1].style.filter='none'
    document.getElementsByClassName('log_form_name')[0].style.filter='none'
}

function log_after_name() {
    document.getElementsByClassName('log_form_email')[0].style.filter='none'
    document.getElementsByClassName('log_form_name')[1].style.filter='blur(4px)'
    document.getElementsByClassName('log_form_name')[0].style.filter='blur(4px)'
    document.getElementsByClassName('log_form_pass')[1].style.filter='blur(4px)'
    document.getElementsByClassName('log_form_pass')[0].style.filter='blur(4px)'
    document.querySelector('.log_btn').style.filter='blur(8px)'
}

function log_after_email() {
    document.getElementsByClassName('log_form_email')[0].style.filter='blur(4px)'
    document.getElementsByClassName('log_form_pass')[1].style.filter='none'
    document.getElementsByClassName('log_form_pass')[0].style.filter='none'
    document.getElementsByClassName('log_form_name')[1].style.filter='blur(4px)'
    document.getElementsByClassName('log_form_name')[0].style.filter='blur(4px)'
    document.querySelector('.log_btn').style.filter='none'
}







