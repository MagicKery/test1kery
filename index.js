// JavaScript for mobile menu toggle
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

// Close mobile menu when a link is clicked
const mobileMenuLinks = mobileMenu.querySelectorAll('a');
mobileMenuLinks.forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });
});

// Optional: Smooth scroll for navigation links if not using native CSS scroll-behavior
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Optional: Add a simple form submission handler (won't send data without a backend)
const contactForm = document.querySelector('#contact form');
if (contactForm) {
    contactForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // You would typically send this data to a server using fetch() or XMLHttpRequest
        // For demonstration, we'll just log it and show a message.
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        console.log('Form Submitted!');
        console.log('Name:', name);
        console.log('Email:', email);
        console.log('Message:', message);

        // Display a simple confirmation message (replace with a proper modal in a real app)
        alert('Thank you for your message! I will get back to you soon.');

        // Clear the form
        contactForm.reset();
    });
}