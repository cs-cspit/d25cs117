// FAQ Toggle
document.querySelectorAll(".faq-question").forEach(q => {
    q.addEventListener("click", () => {
        let answer = q.nextElementSibling;
        answer.style.display = (answer.style.display === "block") ? "none" : "block";
    });
});

// Popup
const popupBtn = document.getElementById("popupBtn");
const popup = document.getElementById("popup");
const overlay = document.getElementById("overlay");
const closePopup = document.getElementById("closePopup");

popupBtn.addEventListener("click", () => {
    popup.style.display = "block";
    overlay.style.display = "block";
});
closePopup.addEventListener("click", () => {
    popup.style.display = "none";
    overlay.style.display = "none";
});

// Image Slider
let index = 0;
const slides = document.getElementById("slides");
const totalSlides = slides.children.length;

setInterval(() => {
    index++;
    slides.style.transform = `translateX(${-index * 250}px)`;

    if(index==totalSlides-1){
        index=0;
    }
    if (index === totalSlides - 1) {
        setTimeout(() => {
            slides.style.transition = "none";
            index = 0;
            
        }, 2000);
    }
}, 2000);
