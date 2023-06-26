const navMenu = document.getElementById('nav_menu'),
    navToggle = document.getElementById('nav_toggle'),
    navClose = document.getElementById('nav_close')

    if(navToggle){
        navToggle.addEventListener('click', () => {
            navMenu.classList.add('show-menu')
        })
    }

    if(navClose){
        navClose.addEventListener('click', () =>{
            navMenu.classList.remove('show-menu')
        })
    }

const navLink = document.querySelectorAll('.nav-link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav_menu')
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

const scrollHeader = () => {
    const header = document.getElementById('header')
    this.scrollY >= 50 ? header.classList.add('bg-header')
                       : header.classList.remove('bg-header')
}
window.addEventListener('scroll', scrollHeader)

const scrollUp = () => {
    const scrollUp = document.getElementById('scroll-up')
    this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
                        : scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
})

sr.reveal('.home-img')
sr.reveal('.home-data', {origin: 'bottom'})
sr.reveal('.section-subtitle')
sr.reveal('.section-title')
sr.reveal('.popular-container')
sr.reveal('.features-card')
sr.reveal('.about-data')
sr.reveal('.about-img')
sr.reveal('.sub-title')
sr.reveal('.pic-ctn')
sr.reveal('.form')
sr.reveal('.recipe-title')
sr.reveal('.pic-rcp')
sr.reveal('.serve-container')
sr.reveal('.ingredient-container')
sr.reveal('.suggested-container')
sr.reveal('.suggested-title')
sr.reveal('.sec-container', {
    interval: 200,
    reset: true,
});
sr.reveal('.swiper', {
    interval: 200,
    reset: true,
});
sr.reveal('.newsletter-container')

const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'ri-sun-line'

const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'ri-moon-line' : 'ri-sun-line'

if (selectedTheme) {
    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
    themeButton.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme)
}

themeButton.addEventListener('click', () =>{
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    localStorage.setItem('selected-item', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

const translate = document.querySelectorAll(".translate");
const big_title = document.querySelectorAll(".big-title");
const landing = document.querySelectorAll(".landing");
const shadow = document.querySelectorAll(".shadow")
const section = document.querySelectorAll(".section")

let landing_height = landing.offsetHeight;
let section_height = section.offsetHeight;

window.addEventListener('scroll', () => {
    let scroll = window.scrollY;

    translate.forEach(element => {
        let speed = element.dataset.speed;
        element.style.transform = `translateY(${scroll * speed}px)`;
    })
    
    big_title.style.opacity = -scroll / (landing_height/2) + 1;
    shadow.style.height = `${scroll * 0.5 + 300}px`;

})

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    grabCursor: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});
  