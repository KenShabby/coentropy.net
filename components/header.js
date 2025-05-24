// header.js

const navbarHTML = `
            <header>
                <h1><a href="./index.html">
                    <img src="./images/CoEntropy-1-01.png" width=40% alt="CoEntropy logo">
                </a></h1>
                <h3>Computer Consulting and Support Services for Sonoma County</h3>
                <nav>
                    <ul class="nav-list">
                      <li><a href="index.html">Main</a></li>
                      <li><a href="services.html">Services</a></li>
                      <li><a href="pricing.html">Pricing</a></li>
                      <li><a href="contact.html">Contact</a></li>
                      <li><a href="appointment.html">Appointments</a></li>
                      <li><a href="faq.html">FAQs</a></li>
                      <li><a href="about.html">About</a></li>
                    </ul>
                </nav>
            </header>
            `;

const navbarElement = document.querySelector('header');

function generateHeader() {
    const html = navbarHTML;
    navbarElement.innerHTML = html;
}

generateHeader();
