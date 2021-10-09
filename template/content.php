    <div class="container-fluid">
        <div class = "row" >
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item row">
                            <i class="fas fa-users" style="color: #ffffff; font-size: 25px;"></i>
                            <a class="nav-link" aria-current="page" href="#"  
                            onclick="CargarContenido('modules/usuarios/listadoUsuarios.php');">
                            Usuarios
                            </a>
                        </li>
                        <li class="nav-item row">
                            <i class="fas fa-restroom" style="color: #ffffff; font-size: 25px;"></i>
                            <a class="nav-link" href="#">
                            Deudores
                            </a>
                        </li>
                        <li class="nav-item row">
                            <i class="fas fa-dollar-sign" style="color: #ffffff; font-size: 25px;"></i>
                            <a class="nav-link" href="#">
                            Ventas
                            </a>
                        </li>
                        <li class="nav-item row">
                            <i class="far fa-address-book" style="color: #ffffff; font-size: 25px;"></i>
                            <a class="nav-link" href="#">
                            Clientes
                            </a>
                        </li>
                    </ul>        
                </div>
            </nav>
            <main class = "col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class = "table-responsive" id = "contenedorPrincipal">   
                </div>
            </main>
        </div>
    </div>
    <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-facebook-f"></i
            ></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-twitter"></i
            ></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-google"></i
            ></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-instagram"></i
            ></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-linkedin-in"></i
            ></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-github"></i
            ></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="#" style = "text-decoration: none; hover{cursor: poiner;}">SISTEMA VENTAS</a>
        </div>
        <!-- Copyright -->
    </footer>
    <link rel="stylesheet" href="navbar.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    </body>
</html>