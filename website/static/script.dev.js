"use strict";

function opensidebar() {
  document.getElementById('sidebar').style.opacity = '0%';
  document.getElementById('sidebar').style.display = 'block';
  document.getElementById('arrow').style.animation = '2s rotate forwards';
  document.getElementById('sidebar').style.animation = '1s fadein 1s forwards';
  document.getElementById('rearrow').style.animation = 'none';
  setTimeout(function () {
    document.getElementById('arrow').style.display = 'none';
    document.getElementById('rearrow').style.display = 'block';
  }, 2500);
}

;

function closesidebar() {
  document.getElementById('sidebar').style.animation = '1s fadeout 1s forwards';
  document.getElementById('sidebar').style.display = 'none';
  document.getElementById('rearrow').style.animation = '2s rerotate forwards';
  document.getElementById('arrow').style.animation = 'none';
  setTimeout(function () {
    document.getElementById('rearrow').style.display = 'none';
    document.getElementById('arrow').style.display = 'block';
  }, 2500);
}

;

function start() {
  document.getElementById('logo_main').style.animation = '2s fullrotate';
}

function logo_click() {
  document.getElementById('main_function_container').style.display = 'block';
  document.getElementById('main_function_container').style.animation = '4s main_function_container_fadein forwards';
}

function logo_click_exit() {
  document.getElementById('main_function_container').style.animation = '2s main_function_container_fadeout forwards';
  setTimeout(function () {
    document.getElementById('main_function_container').style.display = 'none';
  }, 2100);
}