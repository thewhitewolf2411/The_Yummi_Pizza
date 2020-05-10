import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class PizzaComponent extends Component{
    constructor(){
        super();
        //console.log('here');

        this.state = {
            pizza: []
        }
    }

    componentDidMount(){
        axios.get('/data').then(response=>{
            this.setState({pizza:response.data});
        }).catch(error=>{
            console.log(error);
        })
    }

    render(){
        return(

            <div className = "card-body">
                <div className = "intro-text menu-title-text">
                    <p>our delicious menu</p>
                </div>
                {this.state.pizza.map(
                    data =><div className="pizza-object" key={data[1]}>
                            <div className="pizza-row">
                                <p className="pizza-name">{data[1]}</p>
                                <div className="pizza-sizes-container">
                                    <div className="pizza-sizes">
                                        <p>{data[2]}</p>
                                        <p>{data[3]}</p>
                                        <p>{data[4]}</p>
                                    </div>
                                    <div className="pizza-prices">
                                        <p>{data[5]}</p>
                                        <p>{data[6]}</p>
                                        <p>{data[7]}</p>
                                    </div>
                                </div>
                            </div>

                            <div className="pizza-ingredients-container">
                                <p>Ingredients: {data[8]}</p>
                            </div>
                    </div>
                )}
            </div>

        );
    }

}

if (document.getElementById('menu-container')){
    ReactDOM.render(<PizzaComponent />, document.getElementById('menu-container'))
}