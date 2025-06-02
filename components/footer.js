// footer.js
const footerHTML = `
            <style>
            footer p {
                text-align: center;
            }

            hr {
                margin: 2rem;
            }

            </style>
            <footer>
                <hr>
                <p>All material Copyright © 2025 - CoEntropy</p>
                <p>Santa Rosa, CA 95407</p>
                <p>(707) 595-0805</p>
                <p><a href="../privacy_policy.html">Privacy Policy</a></p>
                <p><a href="../tos.html">Terms of Service</a></p>
            </footer>
            `;

const footerElement = document.querySelector('footer');

function generateFooter() {
    const html = footerHTML;
    footerElement.innerHTML = html;
}

generateFooter();
