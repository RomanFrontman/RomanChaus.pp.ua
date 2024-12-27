document.addEventListener('DOMContentLoaded', function () {

    var menuBtn = document.querySelector('.header__menu-btn');
    var headerControlsWrap = document.querySelector('.header-controls-wrap');
    var mainNavLinks = document.querySelectorAll('.main-nav a');

    menuBtn.addEventListener('click', function () {
        if (menuBtn.classList.contains('is-active')) {
            menuBtn.classList.remove('is-active');
            headerControlsWrap.classList.remove('is-active');
            document.body.classList.add('loaded');
        } else {
            menuBtn.classList.add('is-active');
            headerControlsWrap.classList.add('is-active');
            document.body.classList.remove('loaded');
        }
    });

    mainNavLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            menuBtn.classList.remove('is-active');
            document.body.classList.add('loaded');
            headerControlsWrap.classList.remove('is-active');
        });
    });
});

document.querySelector('.nav-btn--next').addEventListener('click', function() {
    window.scrollBy({
        top: window.innerHeight * 0.9, // 90vh
        behavior: 'smooth'
    });
});

// carousel

const track = document.getElementById("image-track");

const handleOnDown = e => track.dataset.mouseDownAt = e.clientX;

const handleOnUp = () => {
  track.dataset.mouseDownAt = "0";  
  track.dataset.prevPercentage = track.dataset.percentage;
}

const handleOnMove = e => {
  if(track.dataset.mouseDownAt === "0") return;
  
  const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
        maxDelta = window.innerWidth / 2;
  
  const percentage = (mouseDelta / maxDelta) * -100,
        nextPercentageUnconstrained = parseFloat(track.dataset.prevPercentage) + percentage,
        nextPercentage = Math.max(Math.min(nextPercentageUnconstrained, 0), -100);
  
  track.dataset.percentage = nextPercentage;
  
  track.animate({
    transform: `translate(${nextPercentage}%, -20%)`
  }, { duration: 1200, fill: "forwards" });
  
  for(const image of track.getElementsByClassName("image")) {
    image.animate({
      objectPosition: `${100 + nextPercentage}% center`
    }, { duration: 1200, fill: "forwards" });
  }
}

/* -- Had to add extra lines for touch events -- */

window.onmousedown = e => handleOnDown(e);

window.ontouchstart = e => handleOnDown(e.touches[0]);

window.onmouseup = e => handleOnUp(e);

window.ontouchend = e => handleOnUp(e.touches[0]);

window.onmousemove = e => handleOnMove(e);

window.ontouchmove = e => handleOnMove(e.touches[0]);