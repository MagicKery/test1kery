// Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                // Close mobile menu if open
                const mobileMenu = document.getElementById('mobile-menu');
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Contact Form Submission
        const contactForm = document.getElementById('contact-form');
        const submitButton = document.getElementById('submit-button');
        const formMessage = document.getElementById('form-message');

        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault(); // Prevent default form submission

            // Disable button and show loading state
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Sending...';
            formMessage.classList.add('hidden'); // Hide previous messages

            const formData = new FormData(contactForm);
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            try {
                // IMPORTANT: Replace 'send_email.php' with the actual path to your PHP script
                const response = await fetch('send_email.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data),
                });

                const result = await response.json();

                if (result.success) {
                    formMessage.classList.remove('hidden');
                    formMessage.classList.remove('text-red-600');
                    formMessage.classList.add('text-green-600');
                    formMessage.textContent = 'Message sent successfully! I will get back to you soon.';
                    contactForm.reset(); // Clear the form
                } else {
                    formMessage.classList.remove('hidden');
                    formMessage.classList.remove('text-green-600');
                    formMessage.classList.add('text-red-600');
                    formMessage.textContent = result.message || 'There was an error sending your message. Please try again.';
                }
            } catch (error) {
                console.error('Error:', error);
                formMessage.classList.remove('hidden');
                formMessage.classList.remove('text-green-600');
                formMessage.classList.add('text-red-600');
                formMessage.textContent = 'Network error. Please check your connection and try again.';
            } finally {
                // Re-enable button and restore original text
                submitButton.disabled = false;
                submitButton.innerHTML = 'Send Message <i class="fas fa-paper-plane ml-2"></i>';
            }
        });