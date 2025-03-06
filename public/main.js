document.getElementById("menu-btn").addEventListener("click", function() {
    document.getElementById("mobile-menu").classList.remove("hidden");
});

document.getElementById("close-menu").addEventListener("click", function() {
    document.getElementById("mobile-menu").classList.add("hidden");
});

 // Variable to track the currently opened FAQ
 let currentFAQ = null;

function toggleFAQ(faqNumber) {
// Close the previously opened FAQ
if (currentFAQ && currentFAQ !== faqNumber) {
    const previousFAQ = document.getElementById('faq-' + currentFAQ);
    previousFAQ.style.maxHeight = '0px';
}

// Toggle the clicked FAQ
const currentElement = document.getElementById('faq-' + faqNumber);
if (currentElement.style.maxHeight === '0px' || !currentElement.style.maxHeight) {
    currentElement.style.maxHeight = currentElement.scrollHeight + 'px';
    currentFAQ = faqNumber;
} else {
    currentElement.style.maxHeight = '0px';
    currentFAQ = null;
}
}

// untuk chek book 

const agreeCheckbox = document.getElementById('agree-terms');
const submitButton = document.getElementById('submit-btn');

agreeCheckbox.addEventListener('change', function() {
    if (this.checked) {
        submitButton.disabled = false;
        submitButton.classList.remove('opacity-50', 'cursor-not-allowed');
    } else {
        submitButton.disabled = true;
        submitButton.classList.add('opacity-50', 'cursor-not-allowed');
    }
});

// Anismasi

function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function handleScroll() {
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach((element) => {
        if (isInViewport(element)) {
            element.classList.add('visible');
        }
    });
}

window.addEventListener('scroll', handleScroll);
window.addEventListener('DOMContentLoaded', handleScroll); 


