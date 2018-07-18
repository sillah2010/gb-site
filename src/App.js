import React, { Component } from 'react';
import './App.css';
import Index from './components/IndexPage/Index'
import NavBar from './components/NavBar'
import '../node_modules/bootstrap/dist/css/bootstrap.min.css'
import '../node_modules/bootstrap/dist/js/bootstrap.min.js'



class App extends Component {
  render() {
    return (
      <div>
        <NavBar/>
        <Index/>
        <h1>Title</h1>
      </div>
    );
  }
}

export default App;
