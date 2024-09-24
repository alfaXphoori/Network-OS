// Home.js
import { Link } from "react-router-dom";
import './Home.css';
import ReactLogo from './assets/react-logo.svg';
import NodejsLogo from './assets/nodejs-logo.svg';
import NginxLogo from './assets/nginx-logo.svg';
import DockerLogo from './assets/docker-logo.svg';

const Home = () => {
  return (
    <div
      className="animated-background d-flex flex-column justify-content-center align-items-center text-center vh-100"
    >
      <h1 className="fade-in fade-in-heading">
        Login Success Page
      </h1>

      <div className="logo-container">
        <img src={ReactLogo} alt="React Logo" className="logo react-logo" />
        <img src={NodejsLogo} alt="Node.js Logo" className="logo nodejs-logo" />
        <img src={NginxLogo} alt="Nginx Logo" className="logo nginx-logo" />
        <img src={DockerLogo} alt="Docker Logo" className="logo docker-logo" />
      </div>

      <Link to="/login" className="btn btn-light my-5 fade-in fade-in-button">
        Logout
      </Link>
    </div>
  );
};

export default Home;
