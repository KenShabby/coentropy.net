// footer.js
const footerHTML = `
            <style>
            footer p {
                text-align: center;
            }
            </style>
            <footer>
                <hr>
                <p>All material Copyright © 2025 - CoEntropy</p>
                <p>Santa Rosa, CA 95407</p>
                <p>(707) 595-0805</p>
                <!-- privacy policy -->
                <!-- social media links -->
            </footer>
`;

const footerElement = document.querySelector('footer');

function generateFooter() {
    const html = footerHTML;
    footerElement.innerHTML = html;
}

generateFooter();
