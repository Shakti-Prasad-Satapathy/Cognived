import React, { Component } from "react"
import "../CSSfiles/navbar.css"
import logo from "../../../images/logo.png"
export default class NavBar extends Component {
    render() {
        return (
            <div>
                <div className="topnav">
                    <div style={{ width: "15%" }} >
                        <a className="active" href="#home" style={{ padding: 0 }}> <img src={logo} alt=" LOGO " /></a>
                    </div>
                    <a href="#">Images</a>
                    <a href="#contact">Contact</a>
                    <a href="#about">About</a>
                </div>
            </div>
        )
    }
}