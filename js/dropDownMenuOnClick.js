'use strict'

// const elements = document.getElementsByClassName('menu-item');

// for (i = 0; i < elements.length; i += 1){
//     elements[i].addEventListener('mousedown', showMenu);
//     elements[i].addEventListener('mouseleave', hideMenu);
// }

// function showMenu() {
//     if (this.children.length > 1) {
//         this.children[1].style.height = '50px';
//         this.children[1].style.opacity = '1';
//         this.children[1].style.overflow = 'visible';
//     }
// }

// function hideMenu() {
//     if (this.children.length > 1) {
//         this.children[1].style.height = '0';
//         this.children[1].style.opacity = '0';
//         this.children[1].style.overflow = 'hidden';
//     }
// }

function func() {
    this.className = 'open';
}

let listObj = document.querySelectorAll('.block');

for (let i = 0; i < listObj.length; i += 1){
    listObj[i].onClick = func;
}