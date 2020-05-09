import React from 'react';
import ReactDOM from 'react-dom';

function Footer() {
    let newDate = new Date();
    let year = newDate.getFullYear();


    return (
        <div className="footer-container">
            <div className="footer-columns-container">
                <div className="footer-column-container">
                    <p>All rights reserved.</p>
                    <img src="/images/Logo.png"></img>
                </div>
                <div className="footer-column-container">
                    <h3>Contact</h3>
                    <a href=""><p>Phone number</p></a>
                    <a href=""><p>Email address</p></a>
                    <a href=""><p>Adress</p></a>
                </div>
                <div className="footer-column-container">
                    <h3>Menu links</h3>
                    <a href=""><p>Menu</p></a>
                    <a href=""><p>About us</p></a>
                </div>
                <div className="footer-column-container">
                    <h3>Follow us</h3>
                    <a href=""><p>Menu</p></a>
                    <a href=""><p>About us</p></a>
                </div>
            </div>
            <div className="rigts-class-container">
                <p className="right-class">
                {year}, All Rights reserved.
                </p>
            </div>
        </div>
    );
}

export default Footer;

if (document.getElementById('footer')) {
    ReactDOM.render(<Footer />, document.getElementById('footer'));
}
