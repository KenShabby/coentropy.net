// footer.js
const currentYear = new Date().getFullYear();

const footerHTML = `
    <div class="footer-inner">

        <div class="footer-grid">

            <div class="footer-col">
                <h4 class="footer-heading">CoEntropy.net</h4>
                <p class="footer-tagline">Patient, personal, and professional
                IT support for homes and small businesses in Sonoma County.</p>
                <div class="footer-certs">
                    <img src="./images/SecurityPlus Logo Certified CE.png"
                        alt="CompTIA Security+ Certified" class="footer-cert-badge">
                    <img src="./images/NetworkPlus Logo Certified CE.png"
                        alt="CompTIA Network+ Certified" class="footer-cert-badge">
                </div>
            </div>

            <div class="footer-col">
                <h4 class="footer-heading">Contact</h4>
                <ul class="footer-list">
                    <li>📞 <a href="tel:+17075950805">(707) 595-0805</a></li>
                    <li>📧 <a href="mailto:brendan@coentropy.net">brendan@coentropy.net</a></li>
                    <li>💬 <a href="https://wa.me/17074862481">WhatsApp</a></li>
                    <li>📅 <a href="./appointment.html">Book a free consultation</a></li>
                    <li>🎫 <a href="https://support.coentropy.net" target="_blank" rel="noopener">Support Portal</a></li>
                    <li>⭐ <a href="https://share.google/B0WwxtkF9v7sPKDTd" target="_blank" rel="noopener">Review us on Google</a></li>
                </ul>
                <p class="footer-hours">Mon – Fri: 9:00 am – 5:00 pm<br>
                After-hours available by arrangement</p>
            </div>

            <div class="footer-col">
                <h4 class="footer-heading">Services</h4>
                <ul class="footer-list">
                    <li><a href="./services.html">Computer Repair &amp; Setup</a></li>
                    <li><a href="./services.html">Network Setup &amp; Troubleshooting</a></li>
                    <li><a href="./services.html">Virus &amp; Malware Removal</a></li>
                    <li><a href="./services.html">Data Backup &amp; Recovery</a></li>
                    <li><a href="./services.html">Smart Home Setup</a></li>
                    <li><a href="./services.html">Website Design</a></li>
                    <li><a href="./pricing.html">Pricing</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-heading">Service Area</h4>
                <p class="footer-service-area">Serving Santa Rosa, Rohnert Park,
                Petaluma, Sebastopol, Healdsburg, Windsor, Guerneville, and the
                greater Sonoma County area.</p>
                <ul class="footer-list footer-nav">
                    <li><a href="./faq.html">FAQs</a></li>
                    <li><a href="./about.html">About</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <p>&copy; ${currentYear} CoEntropy.net &mdash; Brendan Coen &mdash; Santa Rosa, CA
            &mdash; <a href="mailto:brendan@coentropy.net">brendan@coentropy.net</a></p>
        </div>

    </div>
`;

const footerElement = document.querySelector('footer');
function generateFooter() {
    footerElement.innerHTML = footerHTML;
}
generateFooter();
