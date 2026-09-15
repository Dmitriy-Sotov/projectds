const menu = document.querySelector('.navigation')
const burger = document.querySelector('.burger-btn')

burger.addEventListener('click',()=>{
   menu.classList.toggle('navigation--open')
});