// @codekit-append "main.js"

$("#menu-icon-trigger").click(function(e) {e.preventDefault(); $(".main").toggleClass("toggled");});
$("#menu-icon-trigger").click(function(e) {e.preventDefault(); $("#page-content-wrapper>.container").toggleClass("container-resized");});
$("#menu-icon-trigger").click(function(e) {e.preventDefault(); $("#menu-icon-wrapper").toggleClass("toggled");});
$("#menu-icon-trigger").click(function(e) {e.preventDefault(); $(".menu-icon-wrapper svg path").toggleClass("toggled");});
$("#menu-icon-trigger").click(function(e) {e.preventDefault(); $("#wrapper").toggleClass("toggled");});
