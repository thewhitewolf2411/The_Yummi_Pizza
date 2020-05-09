import React from 'react';
import ReactDOM from 'react-dom';

function Intro() {
    return (
        <div className="intro">
            <img src="/images/Background/Background-Image.jpg"></img>
            <b className="intro-text">Find your food online, <br />and order faster</b>
        </div>
    );
}

export default Intro;

if (document.getElementById('intro-container')) {
    ReactDOM.render(<Intro />, document.getElementById('intro-container'));
}
