import React from "react";
import { Link, Outlet } from "react-router-dom";
import { Container } from "react-bootstrap";
import Carousel from "react-bootstrap/Carousel";

function Home() {
  return (
    <>
    <div >
      <Carousel>
        <Carousel.Item>
          <img
            className="d-block w-100 h-100"
            src="./images/perrito.png"
            alt="Primera imagen"
          />
          <Carousel.Caption>
            <h3>petShop</h3>
            <p>Articulos para tu mascota.</p>
          </Carousel.Caption>
        </Carousel.Item>
        <Carousel.Item>
          <img
            className="d-block w-100 h-100"
            src="./images/articulos.jpg"
            alt="Segunda imagen"
          />
          <Carousel.Caption>
            <h3>Imagen 2</h3>
            <p>Descripción de la imagen 2.</p>
          </Carousel.Caption>
        </Carousel.Item>
        {/* Agrega más elementos de Carousel.Item según sea necesario */}
      </Carousel>

      <Container>
        <Outlet />
      </Container>
      </div>
    </>
  );
}

export default Home;
