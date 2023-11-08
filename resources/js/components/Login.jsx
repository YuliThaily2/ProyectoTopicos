import React, {useState} from "react";
import axios from "axios";
import {useNavigate} from "react-router-dom"; 
import { Button,Form } from "react-bootstrap";
import { useAuth } from './authContext';
import { Link } from "react-router-dom";

function Login() {
    const { setAuthToken } = useAuth();
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  const handleLogin = async () => {
    // Realiza la autenticación y obtén el token (ajusta según tu lógica)
    const token = await autenticar(email, password);

    // Almacena el token en el contexto de autenticación
    setAuthToken(token);
  };
    const [formValue, setFormValue] = useState({
        email: '', 
        password: ''
    })
    const navigate = useNavigate(); 

    const onChange = (e)=>{
        e.persist(); 
        setFormValue({...formValue, [e.target.name]:e.target.value}); 
    }

    const handleSubmit = (e)=>{
        if(e&&e.preventDefault()) e.preventDefault(); 
        const formData = new FormData(); 
        formData.append("email", formValue.email); 
        formData.append("password", formValue.password); 
        axios.post("http://localhost/petShop2/public/api/login",
        formData, 
        {headers: {'Content-Type':'multipart/form-data',
        'Accept': 'application/json'}}
        ).then(response=>{
            console.log("response: ");
            console.log(response);

            localStorage.setItem('token', response.data.token);
            console.log(localStorage.getItem('token'));

           
                  }).catch(error=>{
            console.log(error);
        }); 
    };

    return (
        <Form onSubmit={handleSubmit}>
        <Form.Group className="mb-3" controlId="formBasicEmail">
          <Form.Label>Email address</Form.Label>
          <Form.Control name="email" type="email" placeholder="Enter email" value={formValue.email} onChange={onChange}/>
          <Form.Text className="text-muted">
            We'll never share your email with anyone else.
          </Form.Text>
        </Form.Group>
  
        <Form.Group className="mb-3" controlId="formBasicPassword">
          <Form.Label>Password</Form.Label>
          <Form.Control name="password" type="password" placeholder="Password" value={formValue.password} onChange={onChange} />
        </Form.Group>
        <Form.Group className="mb-3" controlId="formBasicCheckbox">
          <Form.Check type="checkbox" label="Check me out" />
        </Form.Group>
        <Button as={Link} to="/petShop2/public/" variant="primary">
          Submit
        </Button>
      </Form>
    )
}

export default Login;