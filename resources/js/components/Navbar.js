import React from 'react';
import ReactDOM from 'react-dom';


function Navbar() {
    return (
        <nav className = "navbar navbar-expand-lg navbar-dark bg-dark" >
        <a className="navbar-brand" href="/">DevSolutions</a>
        <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
        </button>
        <div className="collapse navbar-collapse" id="navbarNav">
            <ul className="navbar-nav">
                <li className="nav-item active">
                    <a className="nav-link" href="#">Home <span className="sr-only">(current)</span></a>
                </li>
                <li className="nav-item">
                    <a className="nav-link" href="#">Features</a>
                </li>
                <li className="nav-item">
                    <a className="nav-link" href="#">Pricing</a>
                </li>
                <li className="nav-item">
                    <a className="nav-link disabled" href="#" tabIndex="-1" aria-disabled="true">Disabled</a>
                </li>
               {/* if(Route('login')){
                    <li>
                        <div className="top-right links">
                            auth{
                                <a href="{{ url('././views/home') }}">Home</a>
}
                                else{
                                    <a href="{{ url('././views/login')}}">Login</a>
                                }
                                    if(Route(register)){
                                        <a href="../views/auth/registrer">Register</a>
                                    }
                        </div>
                    }
                     */}
                    {/* <div>

                    </div>
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif */}
                
}
            </ul>
        </div>
        </nav>
    );
}

export default Navbar;

if (document.getElementById('navbar')) {
    ReactDOM.render(<Navbar />, document.getElementById('navbar'));
}
// function LoginButton(props) {
//     return (
//       <button onClick={props.onClick}>
//         Login
//       </button>
//     );
//   }
  
//   function LogoutButton(props) {
//     return (
//       <button onClick={props.onClick}>
//         Logout
//       </button>
//     );
//   }
