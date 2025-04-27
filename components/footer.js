class Footer extends HTMLElement {
    constructor() {
        super();
    }


    connectedCallback() {
        this.innerHTML = `
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
            <p>
        </p>
        </footer>
        `;
    }
}

customElements.define('footer-component', Footer);
