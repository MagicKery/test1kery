<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="description"/>
    <meta name="author" content="author" />
    <meta name="keywords" content="keywords" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="favicon.ico"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>TGKR - Full Stack Developer Portfolio</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="text-gray-700">

    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md fixed w-full z-10 top-0">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#hero" class="text-2xl font-bold text-indigo-600 rounded-lg p-2 hover:bg-indigo-50 transition-colors duration-300">TGKR</a>
            <div class="hidden md:flex space-x-6">
                <a href="#about" class="text-gray-600 hover:text-indigo-600 transition-colors duration-300 rounded-lg p-2 hover:bg-indigo-50">About</a>
                <a href="#skills" class="text-gray-600 hover:text-indigo-600 transition-colors duration-300 rounded-lg p-2 hover:bg-indigo-50">Skills</a>
                <a href="#projects" class="text-gray-600 hover:text-indigo-600 transition-colors duration-300 rounded-lg p-2 hover:bg-indigo-50">Projects</a>
                <a href="#contact" class="text-gray-600 hover:text-indigo-600 transition-colors duration-300 rounded-lg p-2 hover:bg-indigo-50">Contact</a>
            </div>
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-600 hover:text-indigo-600 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg py-2">
            <a href="#about" class="block px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-indigo-600 transition-colors duration-300">About</a>
            <a href="#skills" class="block px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-indigo-600 transition-colors duration-300">Skills</a>
            <a href="#projects" class="block px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-indigo-600 transition-colors duration-300">Projects</a>
            <a href="#contact" class="block px-6 py-2 text-gray-600 hover:bg-indigo-50 hover:text-indigo-600 transition-colors duration-300">Contact</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="relative bg-gradient-to-r from-indigo-600 to-purple-700 text-white py-24 md:py-32 flex items-center justify-center min-h-screen-nav">
        <div class="container mx-auto px-6 text-center z-10">
            <div class="mb-8">
                <!-- Placeholder Image - Replace with your professional photo -->
                <img src="https://share.google/hClqc3HY1f9WSaLwC" alt="Your Professional Photo" class="w-36 h-36 rounded-full mx-auto shadow-lg border-4 border-white object-cover">
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 animate-fade-in-up">
                Hi, I'm <span class="text-yellow-300">TGKR</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fade-in-up delay-200">
                A <span class="font-semibold">Full-Stack Developer</span> passionate about building robust and user-friendly web applications.
            </p>
            <div class="space-y-4 md:space-y-0 md:space-x-4 flex flex-col md:flex-row justify-center animate-fade-in-up delay-400">
                <a href="#projects" class="bg-white text-indigo-600 px-8 py-3 rounded-full text-lg font-semibold shadow-lg hover:bg-gray-100 hover:scale-105 transition-all duration-300">
                    View My Work <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="#contact" class="border border-white text-white px-8 py-3 rounded-full text-lg font-semibold shadow-lg hover:bg-white hover:text-indigo-600 hover:scale-105 transition-all duration-300">
                    Get in Touch <i class="fas fa-envelope ml-2"></i>
                </a>
            </div>
            <!-- Social Links -->
            <div class="mt-12 flex justify-center space-x-6 animate-fade-in-up delay-600">
                <a href="https://github.com/yourusername" target="_blank" class="text-white hover:text-yellow-300 transition-colors duration-300 text-3xl">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://linkedin.com/in/yourusername" target="_blank" class="text-white hover:text-yellow-300 transition-colors duration-300 text-3xl">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://twitter.com/yourusername" target="_blank" class="text-white hover:text-yellow-300 transition-colors duration-300 text-3xl">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
        <!-- Background Overlay for subtle effect -->
        <div class="absolute inset-0 bg-black opacity-20"></div>
    </section>

    <!-- About Me Section -->
    <section id="about" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-4xl font-bold text-center text-indigo-700 mb-12">About Me</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="text-lg leading-relaxed text-gray-600">
                    <p class="mb-4">
                        Hello! I'm <span class="font-semibold text-indigo-600">Your Name</span>, a passionate Full-Stack Developer with a strong foundation in both frontend and backend technologies. My journey in web development began with a fascination for creating intuitive user interfaces and evolved into a love for building robust, scalable server-side applications.
                    </p>
                    <p class="mb-4">
                        I specialize in crafting seamless web experiences, from pixel-perfect designs to efficient database interactions. My goal is to transform complex ideas into elegant and functional digital solutions that deliver real value.
                    </p>
                    <p>
                        When I'm not coding, you can find me exploring new technologies, contributing to open-source projects, or enjoying a good book. I'm always eager to learn and take on new challenges!
                    </p>
                </div>
                <div class="flex justify-center">
                    <!-- Another placeholder image or an illustration -->
                    <img src="https://placehold.co/300x300/e0e7ff/4338ca?text=About+Me" alt="About Me Illustration" class="rounded-lg shadow-xl transform hover:scale-105 transition-transform duration-300">
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-6 max-w-5xl">
            <h2 class="text-4xl font-bold text-center text-indigo-700 mb-12">My Skills</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Frontend Skills -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-200">
                    <h3 class="text-2xl font-semibold text-indigo-600 mb-6 flex items-center">
                        <i class="fas fa-laptop-code mr-3 text-3xl"></i> Frontend
                    </h3>
                    <ul class="space-y-3 text-lg text-gray-700">
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> HTML5 & CSS3 (Tailwind CSS, SCSS)</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> JavaScript (ES6+)</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> React.js (Hooks, Context API)</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> Responsive Design & UI/UX</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> Git & GitHub</li>
                    </ul>
                </div>

                <!-- Backend Skills -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-200">
                    <h3 class="text-2xl font-semibold text-indigo-600 mb-6 flex items-center">
                        <i class="fas fa-server mr-3 text-3xl"></i> Backend (PHP)
                    </h3>
                    <ul class="space-y-3 text-lg text-gray-700">
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> PHP (OOP, PSR Standards)</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> Laravel Framework</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> RESTful API Development</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> MySQL & Database Design</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> Authentication & Authorization</li>
                    </ul>
                </div>

                <!-- Other Skills -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-200">
                    <h3 class="text-2xl font-semibold text-indigo-600 mb-6 flex items-center">
                        <i class="fas fa-tools mr-3 text-3xl"></i> Other Tools
                    </h3>
                    <ul class="space-y-3 text-lg text-gray-700">
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> Docker</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> AWS (EC2, S3) / DigitalOcean</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> VS Code</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> Agile Methodologies</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> Problem Solving</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-6 max-w-6xl">
            <h2 class="text-4xl font-bold text-center text-indigo-700 mb-12">My Projects</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- Project 1 -->
                <div class="bg-gray-50 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 border border-gray-200">
                    <img src="https://placehold.co/600x400/a78bfa/ffffff?text=E-commerce+Platform" alt="Project 1 Image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-indigo-700 mb-3">E-commerce Platform</h3>
                        <p class="text-gray-600 mb-4">
                            A full-featured e-commerce application with product listings, shopping cart, user authentication, and order management.
                        </p>
                        <p class="text-sm font-medium text-gray-500 mb-4">
                            <span class="font-bold text-indigo-600">Frontend:</span> React.js, Tailwind CSS <br>
                            <span class="font-bold text-indigo-600">Backend:</span> Laravel (PHP), MySQL, RESTful API
                        </p>
                        <div class="flex justify-between items-center">
                            <a href="#" target="_blank" class="text-indigo-600 hover:text-indigo-800 font-semibold flex items-center">
                                Live Demo <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                            </a>
                            <a href="https://github.com/yourusername/ecommerce-project" target="_blank" class="text-gray-600 hover:text-gray-800 flex items-center">
                                <i class="fab fa-github text-xl mr-2"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-gray-50 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 border border-gray-200">
                    <img src="https://placehold.co/600x400/818cf8/ffffff?text=Blog+CMS" alt="Project 2 Image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-indigo-700 mb-3">Blog Content Management System</h3>
                        <p class="text-gray-600 mb-4">
                            A custom CMS for managing blog posts, categories, and comments, with an intuitive admin panel.
                        </p>
                        <p class="text-sm font-medium text-gray-500 mb-4">
                            <span class="font-bold text-indigo-600">Frontend:</span> Vanilla JavaScript, HTML, CSS <br>
                            <span class="font-bold text-indigo-600">Backend:</span> PHP (Custom MVC), MySQL
                        </p>
                        <div class="flex justify-between items-center">
                            <a href="#" target="_blank" class="text-indigo-600 hover:text-indigo-800 font-semibold flex items-center">
                                Live Demo <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                            </a>
                            <a href="https://github.com/yourusername/blog-cms-project" target="_blank" class="text-gray-600 hover:text-gray-800 flex items-center">
                                <i class="fab fa-github text-xl mr-2"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-gray-50 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 border border-gray-200">
                    <img src="https://placehold.co/600x400/6366f1/ffffff?text=Task+Manager+App" alt="Project 3 Image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-indigo-700 mb-3">Task Manager Application</h3>
                        <p class="text-gray-600 mb-4">
                            A single-page application for managing tasks with drag-and-drop functionality and user authentication.
                        </p>
                        <p class="text-sm font-medium text-gray-500 mb-4">
                            <span class="font-bold text-indigo-600">Frontend:</span> Vue.js, Axios <br>
                            <span class="font-bold text-indigo-600">Backend:</span> Lumen (PHP Micro-framework), PostgreSQL
                        </p>
                        <div class="flex justify-between items-center">
                            <a href="#" target="_blank" class="text-indigo-600 hover:text-indigo-800 font-semibold flex items-center">
                                Live Demo <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                            </a>
                            <a href="https://github.com/yourusername/task-manager-project" target="_blank" class="text-gray-600 hover:text-gray-800 flex items-center">
                                <i class="fab fa-github text-xl mr-2"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Add more projects as needed -->

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-24 bg-gray-100">
        <div class="container mx-auto px-6 max-w-3xl">
            <h2 class="text-4xl font-bold text-center text-indigo-700 mb-12">Get in Touch</h2>

            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <p class="text-center text-lg text-gray-600 mb-8">
                    Have a question or want to discuss a project? Feel free to send me a message!
                </p>
                <form id="contact-form" class="space-y-6">
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Name</label>
                        <input type="text" id="name" name="name" required
                               class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-lg outline-none">
                    </div>
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                               class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-lg outline-none">
                    </div>
                    <div>
                        <label for="subject" class="block text-lg font-medium text-gray-700 mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" required
                               class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-lg outline-none">
                    </div>
                    <div>
                        <label for="message" class="block text-lg font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="6" required
                                  class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-lg outline-none"></textarea>
                    </div>
                    <button type="submit" id="submit-button"
                            class="w-full bg-indigo-600 text-white px-6 py-3 rounded-lg text-lg font-semibold shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-300 flex items-center justify-center">
                        Send Message <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                    <div id="form-message" class="mt-4 text-center text-lg font-medium hidden"></div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2025 Your Name. All rights reserved.</p>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="https://github.com/yourusername" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-300 text-2xl">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://linkedin.com/in/yourusername" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-300 text-2xl">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://twitter.com/yourusername" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-300 text-2xl">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>

<?php
header('Content-Type: application/json'); // Set header for JSON response
header('Access-Control-Allow-Origin: *'); // Allow requests from any origin (for development, restrict in production)
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Handle preflight OPTIONS request for CORS
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Get the raw POST data
$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true); // Decode JSON into an associative array

$response = [];

if ($data === null) {
    // JSON decoding failed or no data
    $response = ['success' => false, 'message' => 'Invalid JSON input.'];
} else {
    // Sanitize input data
    $name = isset($data['name']) ? htmlspecialchars(strip_tags(trim($data['name']))) : '';
    $email = isset($data['email']) ? htmlspecialchars(strip_tags(trim($data['email']))) : '';
    $subject = isset($data['subject']) ? htmlspecialchars(strip_tags(trim($data['subject']))) : '';
    $message = isset($data['message']) ? htmlspecialchars(strip_tags(trim($data['message']))) : '';

    // Validate input
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $response = ['success' => false, 'message' => 'All fields are required.'];
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response = ['success' => false, 'message' => 'Invalid email format.'];
    } else {
        // --- Email sending logic ---
        $to = 'your_professional_email@example.com'; // !!! IMPORTANT: Replace with your actual email address !!!
        $email_subject = "Portfolio Contact: " . $subject;
        $email_body = "You have received a new message from your portfolio website.\n\n" .
                      "Name: " . $name . "\n" .
                      "Email: " . $email . "\n" .
                      "Subject: " . $subject . "\n" .
                      "Message:\n" . $message;
        $headers = "From: noreply@yourdomain.com\r\n"; // !!! IMPORTANT: Replace with your domain or a valid sender email !!!
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Attempt to send the email
        if (mail($to, $email_subject, $email_body, $headers)) {
            $response = ['success' => true, 'message' => 'Message sent successfully!'];
        } else {
            // This might fail if your server's mail configuration is not set up
            $response = ['success' => false, 'message' => 'Failed to send message. Server mail configuration issue.'];
            // Log the error for debugging (optional)
            error_log("Mail sending failed to $to from $email. Subject: $email_subject");
        }
    }
}

echo json_encode($response); // Output the JSON response
?>
