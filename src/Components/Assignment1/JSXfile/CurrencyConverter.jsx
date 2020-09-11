import React, { Component } from 'react'
import "../CSSfile/CurrencyConverter.css"
class Message extends Component {
    render() {
        if (this.props.dollar !== "" && this.props.inr !== "") {
            return (
                <h3>You have {this.props.dollar} {this.props.currency} and {this.props.inr} Rupees</h3>
            )
        }
        return null
    }
}
export default class CurrencyCalculator extends Component {
    currencytypes = ["dollar", "inr", "dinar", "pkr"]
    state = {
        dollar: "",
        inr: "",
        currency: "Dollar"
    }
    handelChange = (e) => {
        // this.flush()
        if (isNaN(e.target.value)) {
            alert("Please Enter Numeric values only")
        }
        else {

            this.setState({
                // [e.target.name]: parseInt(e.target.value)
                [e.target.name]: e.target.value

            })
        }
    }
    convert = () => {
        if (this.state.inr !== "" && this.state.dollar !== "" ||
            this.state.inr === "" && this.state.dollar === "") {
            alert("Sorry Please Enter value in only 1 box");
        }
        else {

            if (this.state.inr === "") {
                this.setState({
                    inr: this.state.dollar * 75
                })
                // console.log("=====", this.state.inr);
            }
            else if (this.state.dollar === "" && this.state.inr > 76) {
                this.setState({
                    dollar: this.state.inr / 75
                })
                // console.log("*****=====", this.state.dollar);
            }
            else if (this.state.dollar === "" && this.state.inr < 75) {
                this.setState({
                    dollar: this.state.inr * 1.3,
                    currency: "Cents"
                })
                // console.log(this.state.inr ,"*****=====*****", this.state.dollar);
            }
        }
    }
    flush = () => {
        this.setState({
            dollar: "",
            inr: ""
        })
        console.log(this.state.inr, "*****=====*****", this.state.dollar);
    }

    render() {
        return (
            <div className="maindiv">
                <h2>This Conversion is for 1$ = 75INR</h2>
                <form>
                    <label>
                        Select Currency:
                        <select>
                            {this.currencytypes.map((type, index) =>
                                <option value={type} key={index}>{type}</option>
                            )}
                        </select>
                    </label>
                    <br /><br />
                    <label className="inputs">
                        <p style={{ marginTop: "3%" }}>In INR:</p>
                        <input
                            className="textfield"
                            type="text"
                            name="inr"
                            placeholder="Please Enter Value In INR"
                            value={this.state.inr}
                            onChange={this.handelChange}
                        />
                    </label>
                    <br /><br />
                    <label className="inputs">
                        <p style={{ marginTop: "3%" }}>In Dollar:</p>
                        <input
                            className="textfield"
                            type="text"
                            name="dollar"
                            placeholder="Please Enter Value In Dollar"
                            value={this.state.dollar}
                            onChange={this.handelChange}
                        />
                    </label>
                    <br /><br />
                    <button type="button" onClick={this.convert}>Click Me!</button>
                    <br /><br />

                    <Message dollar={this.state.dollar} inr={this.state.inr} currency={this.state.currency} />
                </form>
            </div>
        )
    }
}