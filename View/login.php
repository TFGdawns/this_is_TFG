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
                        <h2 class="text-center">Iniciar Sesión</h2>
                        
                        <form action="control/process-forms.php" method="POST" class="mt-4">
                            <div class="mb-3">
                                <label for="email-user" class="form-label">Correo Electrónico</label>
                                <input type="email" id="email-user" name="email-user" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password-user" class="form-label">Contraseña</label>
                                <input type="password" id="password-user" name="password-user" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">🔓 Iniciar Sesión</button>
                        </form>
                
                        <p class="text-center mt-3">
                            ¿Aún no tienes una cuenta? Regístrate ✨<a href="/register" class="text-decoration-none fw-bold">aquí</a>✨
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>';

require_once "View/Partials/footer.php";
