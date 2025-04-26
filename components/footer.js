class Header extends HTMLElement {
    constructor() {
        super();
    }


    connectedCallback() {
        this.innerHTML = `
            <style>
                nav {
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: left;
                    background-color:  black;
                }

                ul {
                    padding: 0;
                }

                a {
                    font-weight: 700;
                    margin: 0 25px;
                    color: #fff;
                    text-decoration: none;
                }

                a:hover {
                    padding-bottom: 5px;
                    box-shadow: inset 0 -2px 0 0 #fff;
                }
            </style>
            <header>
                <h1><a href="./index.html">CoEntropy</a></h1>
                <p>Brendan Coen, Founder</p>
                <h3>Computer Consulting and Support Services for Sonoma County</h3>
                <nav>
                    <ul>
                      <li><a href="index.html">Main</a></li>
                      <li><a href="services.html">Services</a></li>
                      <li><a href="contact.html">Contact</a></li>
                      <li><a href="appointment.html">Appointments</a></li>
                      <li><a href="faq.html">FAQs</a></li>
                      <li><a href="about.html">About</a></li>
                    </ul>
                </nav>
            </header>
            `;
    }
}

customElements.define('header-component', Header);
