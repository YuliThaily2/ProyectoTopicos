import React from "react";
import { Button, Card } from 'react-bootstrap';


function Card_C(props){
  const name = props.name
    return(
        <Card style={{ width: '18rem' }}>
          <Card.Img variant="top" src="holder.js/100px180" />
          <Card.Body>
            <Card.Body>{name}</Card.Body>
            <Button variant="primary">Go somewhere</Button>
          </Card.Body>
        </Card>
    );
}

export default Card_C;