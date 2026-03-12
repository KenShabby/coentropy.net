// header.js
const navbarHTML = `
    <div class="header-inner">
        <a href="./index.html" class="header-logo-link">
            <img src="./images/CoEntropy-1-01.png" width="180" alt="CoEntropy.net logo">
        </a>
        <p class="header-tagline">Computer Consulting &amp; IT Support for Sonoma County</p>
        <nav class="nav-container">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="appointment.html">Appointments</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>
    </div>
`;

const navbarElement = document.querySelector('header');
function generateHeader() {
    navbarElement.innerHTML = navbarHTML;
}
generateHeader();
