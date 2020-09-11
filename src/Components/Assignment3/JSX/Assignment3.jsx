import React, { Component } from 'react'
import Select from '@material-ui/core/Select';
import TextField from '@material-ui/core/TextField';
import MenuItem from '@material-ui/core/MenuItem';
import Button from '@material-ui/core/Button';
import ButtonGroup from '@material-ui/core/ButtonGroup';



import '../SASS/Assignment3.css'

export default class Assignment3 extends Component {
    constructor() {
        super();

        this.today = new Date();
        this.year = this.today.getFullYear();
        this.day = this.today.getDate();
        this.hour = this.today.getHours();
        this.minute = this.today.getMinutes()

        console.log(this.hour, "JJJJJJJJJJJJJJ");
        this.state = {
            title: "",
            first_name: "",
            last_name: "",
            time_color: "",
            date_of_birth: "",
            age: "",
            age_color: "",
            date_of_joining: "",
            days_to_go: "",
            is_ok: "false"
        }
    }

    handelChange = (e) => {

        this.setState({
            [e.target.name]: e.target.value
        })
    }
    handelSubmit = () => {
        console.log(parseInt(this.state.date_of_joining.slice(8)), "ppppppp", this.day);
        if (this.minute === 0) {
            this.hour = Math.abs(this.hour - 9)
        }
        else {
            this.hour = Math.abs(this.hour - 8)
        }
        this.minute = 60 - this.minute


        if (parseInt(this.state.date_of_joining.slice(8)) >= this.day) {
            this.day = parseInt(this.state.date_of_joining.slice(8)) - this.day

            this.setState({
                is_ok: "true",
                age: this.year - parseInt(this.state.date_of_birth.slice(0, this.state.date_of_birth.indexOf('-'))),
                // days_to_go: parseInt(this.state.date_of_joining.slice(8)) - this.day

            })
        }
        else {
            alert("Please Enter Valid Credentials")
        }
    }
    handelAgeColor = (e) => {
        console.log("kkkkkkkkkkkkk");
        if (e.target.name === "male") {
            alert("male")
            this.setState({
                age_color: "blue"
            })
        }
        else if (e.target.name === "female") {
            alert("female")
            this.setState({
                age_color: "pink"
            })
        }
        else if (e.target.name === "others") {
            alert("others")

            this.setState({
                age_color: "orange"
            })
        }
    }

    render() {

        return (
            <div>
                <h1>Hello Clappers!!!</h1>
                <marquee >Enter the details and get your joining status</marquee>
                <form noValidate autoComplete="off">
                    <div className="inputs">

                        <Select>
                            <MenuItem disabled>
                                Titles
                            </MenuItem>
                            <MenuItem value="Mrs." name='title' onChange={this.handelChange}>Mrs.</MenuItem>
                            <MenuItem value="Mr." name='title' onChange={this.handelChange} >Mr.</MenuItem>
                            <MenuItem value="Jr." name='title' onChange={this.handelChange} >Jr.</MenuItem>
                        </Select>
                        <TextField value={this.state.first_name} name="first_name" label="First Name" onChange={this.handelChange} />
                        <TextField value={this.state.last_name} name="last_name" label="Last Name" onChange={this.handelChange} />
                        <TextField
                            value={this.state.date_of_birth}
                            name="date_of_birth"
                            label="Date of Birth"
                            type="date"
                            defaultValue="0000-00-00"
                            InputLabelProps={{
                                shrink: true,
                            }}
                            onChange={this.handelChange}
                        />

                        <TextField
                            value={this.state.date_of_joining}
                            name="date_of_joining"
                            label="Date of Joining"
                            type="date"
                            defaultValue="0000-00-00"
                            InputLabelProps={{
                                shrink: true,
                            }}
                            onChange={this.handelChange}

                        />
                    </div>

                    <div className="inputs">
                        <ButtonGroup size="small" color="primary" aria-label="large outlined primary button group" >
                            <Button name="male" onClick={this.handelAgeColor} >Male</Button>
                            <Button name="female" onClick={this.handelAgeColor}  >Female</Button>
                            <Button name="others" onClick={this.handelAgeColor}  >Others</Button>
                        </ButtonGroup>
                        <TextField label="Time Color" value={this.state.time_color} name="time_color" onChange={this.handelChange} />
                        <Button variant="contained" color="primary" onClick={this.handelSubmit}>Submit</Button>

                    </div>
                </form>
                <DisplaBox is_ok={{
                    title: this.state.title,
                    first_name: this.state.first_name,
                    last_name: this.state.last_name,
                    age_color: this.state.age_color,
                    time_color: this.state.time_color,
                    age: this.state.age,
                    is_ok: this.state.is_ok,
                }} day={this.day} hour={this.hour} minute={this.minute} />
                {/* <h1>age_color= {this.state.age_color}</h1> */}

            </div>
        );
    }
}
class DisplaBox extends Component {
    render() {
        if (this.props.is_ok.is_ok === "true") {
            return (
                <div>
                    <div className="displa_box">
                        <p> welcome {this.props.is_ok.title} {this.props.is_ok.first_name} {this.props.is_ok.last_name} you are </p>
                        <p style={{ color: this.props.is_ok.age_color, fontSize: "70px" }}>{this.props.is_ok.age}</p>
                        <p> years old and you are selected for cognived internship program. your date of joining is just</p>
                        <div style={{ display: "flex" }}>
                            <p style={{ fontSize: "60px", color: this.props.is_ok.time_color }}>{this.props.day}</p><p>Days</p>
                            <p style={{ fontSize: "60px", color: this.props.is_ok.time_color }}>{this.props.hour}</p><p>Hours</p>
                            <p style={{ fontSize: "60px", color: this.props.is_ok.time_color }}>{this.props.minute}</p><p>Minutes</p>
                        </div>
                        <h1>Away</h1>
                    </div>
                </div>
            )
        }
        else {
            return (
                null
            )
        }
    }
}