var diegoMenu = document.getElementById('diego-menu')
var menu = document.getElementById('menu-mobile')


diegoMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})

