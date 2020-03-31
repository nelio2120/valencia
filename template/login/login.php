<?php
require "../../mod_seguridad/ambiente_login.php";
session_start();
$_SESSION = array();
session_destroy();
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY("bg-primary");
if (isset($_POST['inputLogin'])) Login::VALIDAR_USUARIO();
?>
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">    <img src="../../imagenes/logo.jpeg"
                                                                                                               alt=""  width="100px"></h3></div>
                            <div class="card-body">
                                <form method="post">
                                    <div class="form-group"><label class="small mb-1" for="usuario">Nombre de Usuario</label>
                                        <input class="form-control py-4" id="usuario" name="usuario" type="text" placeholder="Ingrese su Usuario" />
                                    </div>
                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" id="pass"
                                               name="pass" type="password" placeholder="Enter password" />
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                            <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a>
                                        <button class="btn btn-primary" type="submit" name="inputLogin">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2019</div>

                </div>
            </div>
        </footer>
    </div>
</div>

<?php
    Ambiente::CERRAR_BODY();
?>