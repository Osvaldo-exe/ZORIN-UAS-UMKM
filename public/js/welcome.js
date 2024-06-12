// script.js
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelector('.slides');
    const slideCount = document.querySelectorAll('.slide').length;
    let currentIndex = 0;

    function goToNextSlide() {
        currentIndex = (currentIndex + 1) % slideCount;
        updateSlidePosition();
    }

    function updateSlidePosition() {
        const offset = -currentIndex * 100;
        slides.style.transform = `translateX(${offset}%)`;
    }

    setInterval(goToNextSlide, 3000); // Change slide every 3 seconds
});
