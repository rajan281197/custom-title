// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class HelloWorld extends Component {

  static slug = 'customdivititle_hello_world';

  render() {
    return (
      <div>
        <h1>{this.props.setting_1}</h1>
        <p>{this.props.setting_2}</p>
        <p>{this.props.setting_3}</p>
        <p className={this.props.setting_4}>The class for this text changes on yes/no toggle</p>
        <img alt="change-this" src={this.props.setting_5} />
        <p>{this.props.setting_6}</p>
        <p>The code for this color is: {this.props.setting_7}</p>

      </div>
    );
  }
}

export default HelloWorld;
