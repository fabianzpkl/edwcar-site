<header>
    <div class="container">
        <div class="row">
            <div class="col xl2 l6 m6 s6">
                <a href="#">
                    <img class="logo" src="assets/images/logo.svg" alt="Edwcar #VidaEnLaVía">
                </a>
            </div>
            <div class="col xl8">
                <nav class="menu-desck">
                    <ul>
                        <li>
                            <a href="#">Inicio</a>
                        </li>
                        <li>
                            <a href="#">Cursos</a>
                        </li>
                        <li>
                            <a href="#">Servicios empresas</a>
                        </li>
                        <li>
                            <a href="#">Preguntas</a>
                        </li>
                        <li>
                            <a href="#">Sedes y horarios</a>
                        </li>
                        <li>
                            <a href="#">Nosotros</a>
                        </li>
                        <li>
                            <a href="#">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col xl2 l6 m6 s6 right-align">

                <button data-target="modalogin" class="modal-trigger login"><i class="fa-solid fa-user"></i> Iniciar sesión</button>
                <button data-target="slide-out" class="sidenav-trigger"><i class="fa-solid fa-bars"></i> Menú</button>

            </div>
        </div>
    </div>
</header>

<ul id="slide-out" class="sidenav">
    <li>
        <a href="#">Inicio</a>
    </li>
    <li>
        <a href="#">Cursos</a>
    </li>
    <li>
        <a href="#">Servicios empresas</a>
    </li>
    <li>
        <a href="#">Preguntas</a>
    </li>
    <li>
        <a href="#">Sedes y horarios</a>
    </li>
    <li>
        <a href="#">Nosotros</a>
    </li>
    <li>
        <a href="#">Contacto</a>
    </li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a class="subheader">Plataforma de usuario</a></li>
    <li>
        <a class="modal-trigger" href="#modalogin"><i class="fa-solid fa-user"></i> Iniciar sesión</a>
    </li>
</ul>

<div id="modalogin" class="modal modal-small">
    <div class="modal-header">
        <a href="#!" class="modal-close"><i class="fa-solid fa-xmark"></i></a>
    </div>
    <div class="modal-content">
        <img src="assets/images/logo.svg" alt="Edwcar">
        <h5>Area interna para alumnos</h5>
        <p>Sólo disponible para alumnos vigentes de Edwcar</p>
        <div class="row">
            <div class="col xl1 l1 m1 s12">

            </div>
            <div class="col xl10 l10 m8 s12">
                <form action="">
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña">
                    <br><br>
                    <a href="#">¿Olvide la contraseña? </a>
                    <br><br>
                    <button class="btn btn-full">Ingresar</button>
                </form>
            </div>
            <div class="col xl1 l1 m1 s12">
                
            </div>
        </div>

    </div>
</div>