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
            <div className="pizza-container">
                <div className = "card-body">
                    {this.state.pizza.map(
                        data =><div className="pizza-object">
                             <p>{data[1]}</p>
                             <p>{data[2]}</p>
                             <p>{data[3]}</p>
                             <p>{data[4]}</p>
                             <p>{data[5]}</p>
                             <p>{data[6]}</p>
                             <p>{data[7]}</p>
                        </div>
                    )}
                </div>
            </div>
        );
    }

}

if (document.getElementById('menu-container')){
    ReactDOM.render(<PizzaComponent />, document.getElementById('menu-container'))
}