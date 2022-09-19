import React from 'react';
import ReactDOM from 'react-dom';

const Example = ({embalses}) =>{
    console.log(embalses)
    return (
        <div>s</div>
    )
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
