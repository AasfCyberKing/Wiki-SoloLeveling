/* **************DARK MODE**************** */
var element1 = document.getElementsByClassName('SectioN')
console.log(element1)

var darkm = document.getElementById('dark')
console.log(darkm)

darkm.addEventListener("click", function () {
    console.log('Je suis ici après avoir cliqué')
    element1[0].classList.toggle('dark-mode')
})