/* Version 1.0 */

/* Menu */
 const toggleBtn = document.querySelector('.toggle_btn')
 const toggleBtnIcon = document.querySelector('.toggle_btn i')
 const dropDownMenu = document.querySelector('.dropdown_menu')
 const modelContainer = document.querySelector('.model-container')

 toggleBtn.onclick = function () {
     dropDownMenu.classList.toggle('open')
     const isOpen = dropDownMenu.classList.contains('open')

     toggleBtnIcon.classList = isOpen
     ? 'fa-solid fa-xmark'
     : 'fa-solid fa-bars'

     
 }
 /* Leaving website :( */
 let docTitle = document.title;
 window.addEventListener("blur", ()=>{
     document.title = "Come back!";
 })

 window.addEventListener("focus", ()=>{
     document.title = docTitle;
 })
 /* Hidden Button - png */
 document.getElementById("gameplay-image").addEventListener("click", function() {
window.open("https://www.youtube.com/watch?v=xvFZjo5PgG0&ab_channel=Duran", "_blank");
});