import React, { Component } from "react"
import "../sass/main.css"
import gym1 from '../../../images/gym1.jpeg';
import gym2 from '../../../images/gym2.jpeg';
import gym3 from '../../../images/gym3.jpeg';


export default class AssignmentTwo extends Component {
    render() {
        return (
            <div style={{ background: "#EBECA5", padding: "5rem" }}>
                <div style={{ textAlign: "center" }}>
                    <p style={{ textShadow: "1px 1px 5px black", fontSize: "70px" }}>Assignment Two</p>
                    <p style={{ textShadow: "1px 1px 5px black", fontSize: "40px" }}>Rotating Card</p>
                </div>
                <p style={{ marginTop: "5%" }} >Here in this jsx file i have created 3 cards which is rotating when the corsor placed over it</p>
                <div className="CardDiv"  >

                    <div style={{ perspective: "500px" }}>
                        <div className="box" style={{ backgroundImage: `url(${gym1})`, backgroundRepeat: "no-repeat", backgroundSize: "100% 100%" }} >
                            <h1 style={{ marginTop: "10%" }}>Free Trail</h1>
                            <h1 >0/-</h1>
                            <div className="innerdiv">
                                <h3 style={{ marginTop: "20%" }}>Get Free Access to any of our branch for 1 week</h3>
                                <button type="button" className="button">Learn More...</button>
                            </div>
                        </div>
                    </div>
                    <div style={{ perspective: "500px" }}>
                        <div className="box" style={{ backgroundImage: `url(${gym2})`, backgroundRepeat: "no-repeat", backgroundSize: "100% 100%" }} >
                            <h1 style={{ marginTop: "10%" }}>Membership</h1>
                            <h1 >2999/-</h1>
                            <div className="innerdiv">
                                <h3 style={{ marginTop: "20%" }}>Get Free Access for 3 month in our all branches</h3>
                                <button type="button" className="button">Learn More...</button>
                            </div>
                        </div>
                    </div>
                    <div style={{ perspective: "500px" }}>
                        <div className="box" style={{ backgroundImage: `url(${gym3})`, backgroundRepeat: "no-repeat", backgroundSize: "100% 100%" }} >
                            <h1 style={{ marginTop: "10%" }}>Membership</h1>
                            <h3>(Primium*)</h3>
                            <h1 >3999/-</h1>
                            <div className="innerdiv">
                                <h3 style={{ marginTop: "20%" }}>Get more like personal trainer, steam bath etc  </h3>
                                <button type="button" className="button">Learn More...</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div style={{ textAlign: "end" }}>by Shakti Prasad Satapathy</div>

               

            </div>
        );
    }
}