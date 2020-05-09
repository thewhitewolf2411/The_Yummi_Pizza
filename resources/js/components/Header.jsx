import React from 'react';
import ReactDOM from 'react-dom';

function Header() {
    return (
        <div className="header-container">
            <div className="logo-container">
                <a href="/"><img className="logo" src="/images/Logo.png" alt="Yummi Pizza Logo" /></a>
            </div>
            <div className="links-container">
                <div className="link">
                    <a href="/">Home</a>
                </div>
                <div className="link">
                    <a href="/Menu">Menu</a>
                </div>
                <div className="link">
                    <a href="/about">About us</a>
                </div>
            </div>
        </div>
    );
}

export default Header;

if (document.getElementById('header')) {
    ReactDOM.render(<Header />, document.getElementById('header'));
}
