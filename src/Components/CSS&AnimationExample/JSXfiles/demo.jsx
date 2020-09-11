import React, { Component } from 'react'

import "../CSSfiles/demo.css"

const div1 = {
    background : "#6A81EC",
    height: "50px",
    // width: "25%",
    // marginTop: "50px",
    // marginLeft: "50px",
}

export default class Demo extends Component {

    render() {

        return (
            <div>
                <div className="div1">
                    ajhsfjhajshfja
                </div>
                
                <div style={div1} >
                    <h2>sdgfsdsfgsdg</h2>
                    <p>sdjfkjh</p>
                </div>
                <div id="div2" >
                    <ul>
                        <li >111111111111</li>
                        <li >222222222222</li>
                        <li >333333333333</li>
                        <li >444444444444</li>
                        <li >555555555555</li>
                    </ul>
                </div>
                <div className="div3" >
                    <h1>===aaaaaaaaaaaaaaaaaa</h1>
                    <h2>===jjjjjjjjjjjjjjjjjj</h2>
                    <div className="div4">
                        <p>hhhhhhhhhhhhhhhh</p>
                    </div>
                </div>
                <div >
                    <div style={{height:200, width: 300, margin:5, border: "2px solid black"}}></div>
                    <div style={{height:200, width: 300, margin:5, border: "2px solid black"}}></div>
                    <div style={{height:200, width: 300, margin:5, border: "2px solid black"}}></div>
                    <div style={{height:200, width: 300, margin:5, border: "2px solid black"}}></div>
                    <div style={{height:200, width: 300, margin:5, border: "2px solid black"}}></div>
                    <div style={{height:200, width: 300, margin:5, border: "2px solid black"}}></div>
                </div>
            </div>
        );
    }
}