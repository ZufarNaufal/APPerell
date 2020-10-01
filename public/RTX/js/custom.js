/*$(".dropdown-trigger").dropdown();

//document.addEventListener('./resource/home', function() {
//    var elems = document.querySelectorAll('.dropdown-trigger');
//    var instances = M.Dropdown.init(elems, options);
//  }); 

const elemsBtns = document.querySelectorAll(".fixed-action-btn");
const floatingBtn = M.FloatingActionButton.init(elemsBtns, {
    direction = "left",
    hoverEnabled: false
});

  const elemsDropdown = dociment.querySelectorAll(".dropdown-trigger");
  const instancesDropdown = M.Dropdown.init(elemsDropdown);

/* Carousel */

/* SideNav */

const trigger = document.querySelector('.trigger');
const nav = document.querySelector('.navigation');

const toggleClass = (element, className) => element.classList.toggle(className);

trigger.addEventListener('click', () => {
	toggleClass(nav, 'open');
	toggleClass(trigger, 'rotate-trigger');
});

const slides = document.querySelector('.slides');
const slidesCount = slides.childElementCount;
const maxLeft = (slidesCount - 1) * 100 * -1;

let current = 0;

setInterval(() => {
    if (current > maxLeft) {
        current -= 100;
        slides.style.left = current + '%';
    } else {
        current = 0;
        slides.style.left = 0;
    }
}, 1500)
