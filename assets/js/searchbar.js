const btn =
document.querySelector(".myBtn")
const searchBox =
document.querySelector(".fullScreen")
const closeBtn =
document.querySelector(".closeBtn")
 
 
closeBtn.addEventListener("click", ()=>{
    searchBox.style.display = "none"
    btn.style.display = "flex"
})
 
btn.addEventListener('click', ()=>{
    searchBox.style.display = "block"
    btn.style.display = "none"
})