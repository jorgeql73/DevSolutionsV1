import React from 'react';
import ReactDOM from 'react-dom';

function Carousel() {
    return (
        <div id="carouselExampleCaptions" className="carousel slide" data-ride="carousel">
            <ol className="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div className="carousel-inner">
                <div className="carousel-item active">
                    <img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/styles/480/public/media/image/2019/03/lenguajes_programacion_odiados_amados_2019.jpg?itok=N85E5HTT" width="100" height="300 px" className="d-block w-100" alt="300 px"></img>
                        <div className="carousel-caption d-none d-md-block">
                            <h5>Deslizar para ver mas</h5>
                            <p>Imagen de prueva 1.</p>
                        </div>
                </div>
                <div className="carousel-item">
                    <img src="https://www.bbva.com/wp-content/uploads/2018/11/BBVA-programacion-1024x629.jpg" width="100" height="300 px" className="d-block w-100" alt="250 px"></img>
                    <div className="carousel-caption d-none d-md-block">
                        <h5>Deslizar</h5>
                        <p>Imagen de prueva 2.</p>
                    </div>
                </div>
                <div className="carousel-item">
                    <img src="https://blog.educacionit.com/wp-content/uploads/2018/09/shutterstock-10338536170938-620x354-01-750x410.jpg" width="100" height="300 px" className="d-block w-100" alt="250 px"></img>
                    <div className="carousel-caption d-none d-md-block">
                        <h5>Deslizar</h5>
                        <p>imagen de Prueva 3.</p>
                    </div>
                </div>
            </div>
            <a className="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                <span className="sr-only">Previous</span>
            </a>
            <a className="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span className="carousel-control-next-icon" aria-hidden="true"></span>
                <span className="sr-only">Next</span>
            </a>
        </div>
    );
}

export default Carousel;

if (document.getElementById('carousel')) {
    ReactDOM.render(<Carousel />, document.getElementById('carousel'));
}
