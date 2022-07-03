const nav = document.querySelector('nav')
const readMoreBtn = document.querySelector('.read-more-btn')
const text = document.querySelector('.text')

function stickyNavbar(){
    nav.classList.toggle('scrolled', window.pageYOffset > 0);
}

window.addEventListener('scroll', stickyNavbar);

const toggleButton = document.querySelector('.contain');

toggleButton.onclick = function(){
    toggleButton.classList.toggle('active')
}


readMoreBtn.addEventListener('click', (e) => {
    text.classList.toggle('show-more')
})


var loader = document.querySelector(".containers"); 

window.addEventListener("load", vanish);

function vanish(){ 
    loader.classList.add("disppear");
}
