function start() {
    document.getElementById("reg_form_container").style.animation='5s fadein 2s forwards'
    document.getElementsByClassName('reg_form_email')[0].style.filter='blur(4px)'
    document.getElementsByClassName('reg_form_pass')[1].style.filter='blur(4px)'
    document.getElementsByClassName('reg_form_pass')[0].style.filter='blur(4px)'
    document.querySelector('.reg_btn').style.filter='blur(8px)'
    document.getElementById('logo_main').style.animation = '2s fullrotate '
}

function reg_before_name() {
    document.getElementsByClassName('reg_form_email')[0].style.filter='blur(4px)'
    document.getElementsByClassName('reg_form_pass')[1].style.filter='blur(4px)'
    document.getElementsByClassName('reg_form_pass')[0].style.filter='blur(4px)'
    document.querySelector('.reg_btn').style.filter='blur(8px)'
    document.getElementsByClassName('reg_form_name')[1].style.filter='none'
    document.getElementsByClassName('reg_form_name')[0].style.filter='none'
}

function reg_after_name() {
    document.getElementsByClassName('reg_form_email')[0].style.filter='none'
    document.getElementsByClassName('reg_form_name')[1].style.filter='blur(4px)'
    document.getElementsByClassName('reg_form_name')[0].style.filter='blur(4px)'
    document.getElementsByClassName('reg_form_pass')[1].style.filter='blur(4px)'
    document.getElementsByClassName('reg_form_pass')[0].style.filter='blur(4px)'
    document.querySelector('.reg_btn').style.filter='blur(8px)'
}

function reg_after_email() {
    document.getElementsByClassName('reg_form_email')[0].style.filter='blur(4px)'
    document.getElementsByClassName('reg_form_pass')[1].style.filter='none'
    document.getElementsByClassName('reg_form_pass')[0].style.filter='none'
    document.getElementsByClassName('reg_form_name')[1].style.filter='blur(4px)'
    document.getElementsByClassName('reg_form_name')[0].style.filter='blur(4px)'
    document.querySelector('.reg_btn').style.filter='none'
}







