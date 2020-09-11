import React, { Component } from "react"
// *****************************************************************
import NavBar from "./NavBar"



import "../CSSfiles/Home.css"
import Logo from '../../../images/logo.png';
import Gym1 from '../../../images/gym1.jpeg';
import Gym2 from '../../../images/gym2.jpeg';
import Gym3 from '../../../images/gym3.jpeg';
import Gym4 from '../../../images/gym4.jpeg';
import Gym5 from '../../../images/gym5.jpeg';
import Gym6 from '../../../images/gym6.jpeg';

export default class Home extends Component {
    render() {
        return (
            <div >
                < NavBar />
                <div className="ParallexOne" >
                    <div className="logocard" >
                        <div className="logoContent" >
                            <div className="front" >
                                <img src={Logo} alt="image not found" />
                            </div>
                            <div className="back" >
                                <h2 style={{ marginLeft: "5%", marginTop: "20%" }}><i>We Work For Your Fitness...</i></h2>
                            </div>
                        </div>
                    </div>

                </div>
                <div style={{ background: "black", color: "white", textAlign: "center", height: "120px", opacity: 0.7, }}>
                    <p style={{ top: "15%", position: "relative" }}> <u>We Give the best service</u> </p><br />
                    <p style={{ top: "15%", position: "relative" }}>Unlimited Access of gym all over india, Free home delivery of medicins, yearly 3 times medical checkups, and much more...</p>
                    <h2 style={{ top: "25%", position: "relative" }} >Do <b>SUBSCRIBE</b> Now </h2>
                </div>
                <div className="ParallexOTwo" >
                    <div className="CardDiv" >
                        <div style={{ perspective: "800px", }}>
                            <div className="box" style={{ backgroundImage: `url(${Gym1})`, backgroundRepeat: "no-repeat", backgroundSize: "100% 100%" }} >
                                <h1 style={{ marginTop: "10%" }}>Free Trail</h1>
                                <h1 >0/-</h1>
                                <h3 style={{ marginTop: "20%" }}>Get Access Gym facility for 1 week</h3>
                                <button type="button" className="button">Learn More...</button>
                            </div>
                        </div>
                        <div style={{ perspective: "800px" }}>
                        <div className="box" style={{ backgroundImage: `url(${Gym2})`, backgroundRepeat: "no-repeat", backgroundSize: "100% 100%" }} >
                                <h1 style={{ marginTop: "10%" }}>Membership</h1>
                                <h1 >2999/-</h1>
                                <h3 style={{ marginTop: "20%" }}>Get free access to any of our gym for 3 month</h3>
                                <button type="button" className="button">Learn More...</button>
                            </div>
                        </div>
                        <div style={{ perspective: "800px" }}>
                        <div className="box" style={{ backgroundImage: `url(${Gym3})`, backgroundRepeat: "no-repeat", backgroundSize: "100% 100%" }} >
                                <h1 style={{ marginTop: "10%" }}>Membership<span style={{fontSize:10}}>(Primium*)</span></h1>
                                <h1 >3999/-</h1>
                                <h3 style={{ marginTop: "20%" }}>get extra like zumba and more...</h3>
                                <button type="button" className="button">Learn More...</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div style={{ background: "black", height: "230px", opacity: 0.7 }}>
                    <marquee loop="500" scrollamount="30" behavior="alternate" >
                        <div style={{ display: "flex" }} >
                            <img src={Gym1} style={{ width: "25%", height: "auto", margin: "2%", marginLeft: "5%" }} alt="image not found" />
                            <img src={Gym2} style={{ width: "25%", height: "auto", margin: "2%" }} alt="image not found" />
                            <img src={Gym3} style={{ width: "25%", height: "auto", margin: "2%" }} alt="image not found" />
                            <img src={Gym4} style={{ width: "25%", height: "auto", margin: "2%" }} alt="image not found" />
                            <img src={Gym5} style={{ width: "25%", height: "auto", margin: "2%" }} alt="image not found" />
                            <img src={Gym6} style={{ width: "25%", height: "auto", margin: "2%" }} alt="image not found" />
                        </div>
                    </marquee>
                </div>
                <div className="ParallexThree" >
                    <div className="CardDiv" >
                        <div className="card">
                                <h1 className="aaaaa" >Mission</h1>
                                <h3 className="aaaaa">Making a fitness freek world</h3>
                                <h3 className="aaaaa" >We strive to provide the highest quality fitness experience</h3>
                        </div>
                        <div className="card">
                            <h1>Vission</h1>
                            <h3>Help people be awesome</h3>
                            <h3>To be the largest and best fitness organization of the world</h3>
                        </div>
                        <div className="card2">
                            <h1>Why Us</h1>
                            <h3> “We are Ladies and Gentlemen serving Ladies and Gentlemen”</h3>
                            <h3> The best introductory program for new members </h3>
                            <h3>The best possible existing member experience </h3>
                            <h3>Professional coaching.</h3>
                        </div>
                    </div>
                </div>
                <div style={{ background: "black", color: "white", textAlign: "center", height: "50px", opacity: 0.7 }}>
                    <p style={{ top: "25%", position: "relative" }}> 2020 copyright by Shakti Prasad Satapathy </p>
                </div>
            </div>

        );
    }
}