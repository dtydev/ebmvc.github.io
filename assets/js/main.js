// DARKMODE SCRIPT
let body = document.querySelector(".body")
let sun = document.querySelector(".sun")
let moon = document.querySelector(".moon")

moon.onclick = function(){
    body.classList.add("dark-mode")
}
sun.onclick = function(){
    body.classList.remove("dark-mode")
}

// SIDEBAR MENU MOBILE
let menu = document.querySelector(".menu")
let sidebar = document.querySelector(".sidebar")
let mainContainer = document.querySelector(".main-container")

menu.onclick = function(){
    sidebar.classList.toggle("activemenu")
}
mainContainer.onclick = function(){
    sidebar.classList.remove("activemenu")
}