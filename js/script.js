const toggle = document.getElementById('nav-toggle');
const close = document.getElementById('close');


// Toggle nav
toggle.addEventListener('click', () => document.body.classList.add('show-nav'));

// Hide modal
close.addEventListener('click', () => document.body.classList.remove('show-nav'));