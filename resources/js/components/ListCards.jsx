import React from 'react';
import ReactDOM from 'react-dom/client';
import { Button, Card } from 'react-bootstrap';
import Card_C from './Card_C';
import axios from 'axios';
import { useEffect, useState } from 'react';
import Spinner from 'react-bootstrap/Spinner';


function ListCards() {
    const [userData, setUserData] = useState({})
    useEffect(() => {
        const getProducts = async () => {
            await axios.get('http://localhost/petShop2/public/api/Product_index',
            )
                .then(function (response) {
                    // manejar respuesta exitosa
                    console.log(response);
                    setUserData(response.data)
                })
                .catch(function (error) {
                    // manejar error
                    console.log(error);
                })
                .finally(function () {
                    // siempre sera executado
                });
        }
        getProducts()
    }, [])

    if (!userData.length) return
    <Spinner animation="border" role="status">
        <span className="visually-hidden">Loading...</span>
    </Spinner>

    return (
        <>
            {userData.map((product) => (
                <Card_C name={product.name} />
            ))}
        </>


    );
}

export default ListCards;

/*if (document.getElementById('app')) {
    const Index = ReactDOM.createRoot(document.getElementById("app"));

    Index.render(
        <React.StrictMode>
            <ListCards />
        </React.StrictMode>
    )
}*/
