import React from 'react'

class C extends React.Component {
    state = { size: "", price:"" }
    onchangesize = (e) => {
        this.setState(
            {
                size: e.target.name,
                price: e.target.value
            }
        )
    }
    render() {
        if (this.props.itemname !== "") {
            return (
                <div>
                    <div style={{width: "150px", height: "100px", border: "2px solid", position: "absolute", left: "565px"}}>
                        <form>
                            <label style={{ fontSize: "20px" }} >small</label><input type="checkbox" name="small" value="10$" onClick={this.onchangesize} />10$<br />
                            <label style={{ fontSize: "25px" }} >meduim</label><input type="checkbox" name="meduim" value="15$" price="15$" onClick={this.onchangesize} />15$<br />
                            <label style={{ fontSize: "30px" }} >large</label><input type="checkbox" name="large" value="20$" price="20$" onClick={this.onchangesize} />20$<br />
                        </form>
                    </div>
                    <B itemsize={this.state.size} itemname={this.props.itemname} itemprice={this.state.price} isok={this.props.isok} />

                </div>
            );
        }
        else {
            return (
                null
            )
        }
    }
}
class B extends React.Component {
    render() {
        if (this.props.isok === true && this.props.itemsize !== "" && this.props.itemname !== "" )
            return (
                <div>
                    <h2 style={{position:"relative", top: "111px"}}> You have Selected a {this.props.itemsize} size {this.props.itemname} of price {this.props.itemprice} </h2>
                </div>
            )
        return (
            null
        )
    }
}

export default class A extends React.Component {
    state = {
        isok: false,
        item: ""

    }
    fun1 = () => {
        this.setState(
            {
                isok: true
            }
        )
    }
    onchangeitem = (e) => {
        console.log(e.target.value, "llllllllll");

        this.setState(
            {
                item: e.target.value
            }
        )
    }
    render() {
        return (

            <div>
                <h1> welcome to vaibhavi restaurent</h1>
                <div style={{ height: "800px", border: "5px solid blue" }}>
                    <form >
                        <div style={{ display: "flex", justifyContent: "space-around" }}>
                            <div style={{ height: "320px", width: "25%", border: "3px solid blue", margin: "10px" }}>
                                <img src="http://cdn-image.myrecipes.com/sites/default/files/styles/4_3_horizontal_-_1200x900/public/image/recipes/ck/gluten-free-cookbook/pepperoni-pizza-ck-x.jpg?itok=TYYBYtNI" alt="Smiley face" /><br />
                                <label style={{ fontSize: "35px" }} >pizza</label><input type="checkbox" name="pizza" value="pizza" onClick={this.onchangeitem} />
                            </div>
                            
                            <div style={{ height: "300px", width: "30%", border: "3px solid blue", margin: "10px" }}>
                                <img src="https://tse1.mm.bing.net/th?id=OIP.DirWFkP2KApX0KHqZXekbwDMEx&pid=Api&P=0&w=300&h=300" alt="burger" /><br />
                                <label style={{ fontSize: "35px" }} >Burger</label><input type="checkbox" name="Burger" value="Burger" onClick={this.onchangeitem} />
                            </div>

                            <div style={{ height: "300px", width: "30%", border: "3px solid blue", margin: "10px" }}>
                                <img src="https://tse4.mm.bing.net/th?id=OIP.CC2u14WS5_WSqFsRZ8c_gwHaJn&pid=Api&P=0&w=300&h=300" alt="Frenchfrice" /><br />
                                <label style={{ fontSize: "35px" }} >Frenchfrice</label><input type="checkbox" name="Frenchfrice" value="Frenchfrice" onClick={this.onchangeitem} />
                            </div>
                        </div>
                        <div style={{ display: "flex", justifyContent: "center", marginTop: "50px" }}>
                            <button type="button" onClick={this.fun1} style={{ width: "150px", height: "40px" }}>Submit </button>
                        </div>
                    </form>
                    <C itemname={this.state.item} isok={this.state.isok} />
                </div>
            </div>
        )
    }
}
