import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class AddPizza extends Component{
    constructor(){
        super();
        //console.log('here');

        this.state = {
            pizzaname: '',
            pizzasmallprice: '',
            pizzamediumprice: '',
            pizzajumboprice: '',
            pizzaingridients:''

        }
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleChange(event) {this.setState({ [event.target.name]: event.target.value });}

    handleSubmit(event){
        event.preventDefault();
        const newPizza ={
            pizzaname: this.state.pizzaname,
            pizzasmallprice: this.state.pizzasmallprice,
            pizzamediumprice: this.state.pizzamediumprice,
            pizzajumboprice: this.state.pizzajumboprice,
            pizzaingridients: this.state.pizzaingridients
        };

        axios.post('/addpizza', {newPizza}, {'Access-Control-Allow-Origin': '*' , 'Access-Control-Allow-Methods ':  'POST, GET, OPTIONS, PUT, DELETE','Access-Control-Allow-Headers':  'Content-Type, X-Auth-Token, Origin, Authorization','X-Requested-With': 'XMLHttpRequest'})
            .then(res=>{
                if(res.data){
                    alert('Pizza succesfully added.');
                    window.location.reload(true);
                }
            })
    }

    render(){
        return(
            <div className="add-pizza">
                <p className="intro-text add-pizza-title-container">Add new item to menu</p>
                <form className="add-pizza-form" onSubmit={this.handleSubmit}>
                <label>
                    New pizza name:
                    <input type="text" name="pizzaname" onChange={this.handleChange} required />
                </label>
                <label>
                    New pizza small price:
                    <input type="number" name="pizzasmallprice" onChange={this.handleChange} required/>
                </label>
                <label>
                    New pizza medium price:
                    <input type="number" name="pizzamediumprice" onChange={this.handleChange}/>
                </label>
                <label>
                    New pizza jumbo price:
                    <input type="number" name="pizzajumboprice" onChange={this.handleChange}/>
                </label>
                <label>
                    New pizza ingridients:
                    <input type="text" name="pizzaingridients" onChange={this.handleChange} required/>
                </label>
                <button type="submit">Add new pizza</button>
                </form>

                <div className="add-instructions-container">
                    <label>
                        Please follow these instructions for adding new pizza:
                        <p>
                            Enter desired pizza name 
                        </p>
                        <p>
                            Enter desired price for small pizza in € currency.
                        </p>
                        <p>
                            Enter desired price for medium pizza in € currency, only if you wish medium verion of pizza in your offer.
                        </p>
                        <p>
                            Enter desired price for jumbo pizza in € currency, only if you wish jumbo verion of pizza in your offer.
                        </p>
                        <p>
                            Enter all ingredients, and please divide each with a comma sign. Example: "Cheese,Ketchup,Mushrooms..."
                        </p>
                    </label>
                </div>
            </div>
        );
    }

}

if (document.getElementById('add-pizza-container')){
    ReactDOM.render(<AddPizza />, document.getElementById('add-pizza-container'))
}