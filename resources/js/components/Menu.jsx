import Nav from "react-bootstrap/Nav";
import Navbar from "react-bootstrap/Navbar";
import Container from "react-bootstrap/Container";
import Carousel from "react-bootstrap/Carousel"; // Agregar importación de Carousel
import { Link, Outlet } from "react-router-dom";
import { Card } from "react-bootstrap";


function Menu() {
  return (
    <>
      <Navbar expand="lg" bg="light" variant="light">
        <Container>
          <Navbar.Brand href="#home">PETSHOP</Navbar.Brand>
          <Navbar.Toggle aria-controls="basic-navbar-nav" />
          <Navbar.Collapse id="basic-navbar-nav">
            <Nav className="me-auto">
              <Nav.Link as={Link} to="/">Home</Nav.Link>
              <Nav.Link as={Link} to="crud">Crud</Nav.Link>
              <Nav.Link as={Link} to="card">Card</Nav.Link>
              <Nav.Link as={Link} to="listcards">List Cards</Nav.Link>
              <Nav.Link as={Link} to="login">Login</Nav.Link>


            </Nav>
          </Navbar.Collapse>
        </Container>
      </Navbar>
      {/* Agrega el carrusel aquí */}

      <section>
        <Container>
          <Outlet></Outlet>
        </Container>
      </section>
    </>
  );
}


export default Menu;