
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./bulma-extensions');


//Menu slide**/
import Slideout from "slideout";

/*var slideout = new Slideout({
  'panel': document.getElementById('panel'),
  'menu': document.getElementById('menu'),
  'side': ''
});

document.querySelector('.js-slideout-toggle').addEventListener('click', function() {
  slideout.toggle();
});

document.querySelector('.menu').addEventListener('click', function(eve) {
  if (eve.target.nodeName === 'A') { slideout.close(); }
});

var fixed = document.querySelector('.fixed-header');

slideout.on('translate', function(translated) {
  fixed.style.transform = 'translateX(' + translated + 'px)';
});

slideout.on('beforeopen', function () {
  fixed.style.transition = 'transform 300ms ease';
  fixed.style.transform = 'translateX(5256px)';
});

slideout.on('beforeclose', function () {
  fixed.style.transition = 'transform 300ms ease';
  fixed.style.transform = 'translateX(50px)';
});

slideout.on('open', function () {
  fixed.style.transition = '';
});

slideout.on('close', function () {
  fixed.style.transition = '';
});*/

var slideout = new Slideout({
  'panel': document.getElementById('panel'),
  'menu': document.getElementById('menu'),
  'side': 'right',
  'padding': 256,
  'tolerance': 70
});

document.querySelector('.js-slideout-toggle').addEventListener('click', function() {
  slideout.toggle();
});

var fixed = document.querySelector('.fixed-header');

slideout.on('translate', function(translated) {
  fixed.style.transform = 'translateX(' + translated + 'px)';
});

slideout.on('beforeopen', function () {
  fixed.style.transition = 'transform 300ms ease';
  fixed.style.transform = 'translateX(-256px)';
});

slideout.on('beforeclose', function () {
  fixed.style.transition = 'transform 300ms ease';
  fixed.style.transform = 'translateX(0px)';
});

slideout.on('open', function () {
  fixed.style.transition = '';
});

slideout.on('close', function () {
  fixed.style.transition = '';
});
