// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(a => a.addEventListener('click', e => {
    e.preventDefault(); const target = document.querySelector(a.getAttribute('href'));
    if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
}));

// Accordion
document.querySelectorAll('.accordion button').forEach(btn => {
    btn.addEventListener('click', () => {
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        // close all
        document.querySelectorAll('.accordion button').forEach(b => b.setAttribute('aria-expanded', 'false'));
        document.querySelectorAll('.accordion .panel').forEach(p => p.hidden = true);
        // toggle this
        if (!expanded) { btn.setAttribute('aria-expanded', 'true'); btn.nextElementSibling.hidden = false }
    });
});

const hamburger = document.querySelector('.hamburger');
const menu = document.querySelector('.menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    menu.classList.toggle('active');
});
