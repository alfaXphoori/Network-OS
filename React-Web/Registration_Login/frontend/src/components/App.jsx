import Home from './Home';
import Login from './Login';
import Register from './Register';
import {BrowserRouter, Routes, Route} from "react-router-dom";

function App() {

  return (
    <div>
      <BrowserRouter >
        <Routes>
          <Route path="/" element ={<Login/>} />
          <Route path="/login" element ={<Login/>} />
          <Route path="/register" element ={<Register/>} />
          <Route path="/home" element ={<Home/>} />
        </Routes>
      </BrowserRouter>
    </div>
  )
}

export default App
