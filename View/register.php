<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "View/Partials/head.php";
require_once "View/Partials/header.php";

echo '<main class="container flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow mt-5">
                    <div class="card-body">
                        <h2 class="text-center text-dark">Registro de Usuario</h2>

                        <form action="control/process-forms.php" method="POST" class="mt-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Apellido</label>
                                <input type="text" id="lastname" name="lastname" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                        </form>
                        
                        <p class="text-center mt-3">
                            ¿Ya estás registrado? Inicia sesión ✨<a href="/login" class="text-decoration-none fw-bold">aquí</a>✨
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>';

require_once "View/Partials/footer.php";
