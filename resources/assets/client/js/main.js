//imports
import './bootstrap/bootstrap';
import './scripts/drop';
import './scripts/form';
import './scripts/modal';
import './scripts/video';

console.log("%c© VIIBES Study", "color: #a264f1; font-size:25px;");

let banner = document.getElementById("viibes__top_banner");
let banner_height = banner.getBoundingClientRect().height;

//добавить источник при копировании
/*
const copyListener = (event) => {
    const range = window.getSelection().getRangeAt(0),
        rangeContents = range.cloneContents(),
        pageLink = `Источник: VIIBES Study. Больше по ссылке ${document.location.href}`,
        helper = document.createElement("div");

    helper.appendChild(rangeContents);

    event.clipboardData.setData("text/plain", `${helper.innerText}\n${pageLink}`);
    event.clipboardData.setData("text/html", `${helper.innerHTML}<br>${pageLink}`);
    event.preventDefault();
};
document.addEventListener("copy", copyListener);
*/

//HEADER
const header = document.getElementById('header')
const shadow = document.getElementById('shadow')
window.addEventListener('load', () => headerBackground())
document.addEventListener('scroll', () => headerBackground())
const headerBackground = () => {
    window.pageYOffset > 100 ? headerBackgroundActive() : header.classList.remove('viibes__header_active')
}
const headerBackgroundActive = () => header.classList.add('viibes__header_active')

//BURGER
const burger = document.getElementById('burger')
const mobileMenu = document.getElementById('mobile_menu')
burger.addEventListener('click', () => {
    if (banner.style.marginTop[0] === '-' && window.pageYOffset <= 500){
        banner.style.marginTop = '0';
    }
    else {
        banner.style.marginTop = -banner_height + 'px';
    }
    shadow.classList.toggle('viibes__shadow_active')
    burger.classList.toggle('open')
    mobileMenu.classList.toggle('viibes__header_mobile_menu_active')
    header.classList.toggle('viibes__header_background')
})

//REVIEWS
const reviews_link_home_m = document.getElementById('reviews_link_home_m');
if (document.getElementById('reviews_slider')){
    reviews_link_home_m.addEventListener('click', () => {
        shadow.classList.toggle('viibes__shadow_active')
        burger.classList.toggle('open')
        mobileMenu.classList.toggle('viibes__header_mobile_menu_active')
        header.classList.toggle('viibes__header_background')
    })
    const reviews_swiper = new Swiper('#reviews_slider', {
        slidesPerView: 1,
        spaceBetween: 16,
    })
}

//CARDS
if (document.getElementById('cards_benefits_slider')){
    const cards_benefits_swiper = new Swiper('#cards_benefits_slider', {
        slidesPerView: 1,
        spaceBetween: 16,
        pagination: {
            el: "#cards_benefits_slider__pagination",
        },
    })
}
if (document.getElementById('cards_services_slider')){
    const cards_services_swiper = new Swiper('#cards_services_slider', {
        slidesPerView: 1,
        spaceBetween: 16,
        pagination: {
            el: "#cards_services_slider__pagination",
        },
    })
}
if (document.getElementById('cards_process_slider')){
    const cards_process_swiper = new Swiper('#cards_process_slider', {
        slidesPerView: 1,
        spaceBetween: 16,
        pagination: {
            el: "#cards_process_slider__pagination",
        },
    })
}

if (document.getElementById('cards_courses_slider')){
    const cards_courses_slider = new Swiper('#cards_courses_slider', {
        slidesPerView: 1,
        spaceBetween: 16,
        pagination: {
            el: "#cards_courses_slider__pagination",
        },
    })
}

//UNIVERSITIES SLIDER
if(document.getElementById('universities_slider')){
    const universities_swiper = new Swiper('#universities_slider', {
        navigation: {
            nextEl: '.swiper_2',
            prevEl: '.swiper_1',
        },
        slidesPerView: 1,
        spaceBetween: 16,
        breakpoints: {
            768: { // when window width is >= 768px
                slidesPerView: 2,
                spaceBetween: 16
            },
            991: { // when window width is >= 991px
                slidesPerView: 3,
                spaceBetween: 24
            }
        }
    });
}

//COURSES
const courseItems = document.querySelectorAll('.viibes__course_drop')
const courseClickOnArrow = (willBeActive) => {
    courseItems.forEach(item => item.classList.remove('viibes__course_drop_active'))
    willBeActive.classList.add('viibes__course_drop_active')
}
const courseCloseAll = () => courseItems.forEach(item => item.classList.remove('viibes__course_drop_active'))
courseItems.forEach((item) => {
    item.addEventListener('click', (e) => {
        let path = e.composedPath();
        if (path[0].localName !== 'img' && path[0].localName !== 'h5') return

        if(path[2].classList.contains('viibes__course_drop_active')) {
            courseCloseAll()
            return
        }
        courseClickOnArrow(path[2])
    })
});

//COURSE MORE BUTTON
const courseMore = document.querySelector('.viibes__course_group_main_content_show-more')
if(courseMore){
    const courseStep = 6
    const courseToggle = () => {
        courseItems.forEach((item, index) => {
            if (index <= 6) item.classList.add('viibes__course_drop_visible')
            if (courseMore.classList.contains('viibes__course_group_main_content_show-more_active')){
                item.classList.add('viibes__course_drop_visible')
            }else if (index > 6)  item.classList.remove('viibes__course_drop_visible')
        })
        courseMore.classList.contains('viibes__course_group_main_content_show-more_active') ? courseMore.innerHTML="Скрыть" : courseMore.innerHTML="Показать все разделы"
        courseMore.classList.toggle('viibes__course_group_main_content_show-more_active')
    }
    window.addEventListener('load', courseToggle)
    courseMore.addEventListener('click', courseToggle)
}

//HIDE and SHOW directions
let direction_arrow = document.getElementById('tags__blur_block_arrow');
let directions_block = document.getElementById('viibes__preview_tags');
let directions_blur_block = document.getElementById('tags__blur_block');
if (direction_arrow !== null)
direction_arrow.addEventListener('click', () => {
    directions_block.classList.toggle("viibes__preview_tags_open");
    directions_blur_block.classList.toggle("tags__blur_block_open");
    direction_arrow.classList.toggle("tags__blur_block_arrow_open");
});


//ADD TARGET _BLANK TO A IN EDITOR BLOCK
const links = document.querySelectorAll('#viibes__editor_content a');
links.forEach(function(element) {
    element.setAttribute('target', '_blank');
    element.setAttribute('rel', 'nofollow');
});

//SHOW AND HIDE BANNER
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if ((prevScrollpos > currentScrollPos) || currentScrollPos <= 500) {
        banner.style.marginTop = '0';
    } else {
        banner.style.marginTop = -banner_height + 'px';
    }
    prevScrollpos = currentScrollPos;
};
