<?php 
    if (isset($error)) {
        echo "
            <div class='error-container'>
                <div id='alerta' class='alert alert-warning fade show'>
                    <strong>Aviso: </strong>{$error}
                </div>
            </div>
        ";
    }
?>
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-8">
            <div class="card" style="margin-top: 2%;">                
                <h3 class="text-center">Iniciar sesión</h3>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="correo" class="form-label"><i class="ri-mail-fill ri-lg"></i>Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="contrasena" class="form-label"><i class="ri-lock-fill ri-lg"></i>Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                    </div>
                    <p class="text-center">¿No tienes cuenta? <strong><a href="/mvc/signup" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Crear cuenta</a></strong></p>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-success" type="submit">Entrar <i class="ri-arrow-right-fill ri-lg"></i></button>
                        <p class="text-center"><strong><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Olvide mi contraseña</a></strong></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<style>
    
    
    body{
        background: linear-gradient(245.59deg, #4d5e95 0%, #383c70 28.53%, #131c39 75.52%);
    
   
    
    }
    .card{
        margin-top: 10%;
        padding: 5%;        
    }
    .container{
        margin-top: -1.4%;
    }
    .error-container {
        position: fixed; /* Hace que el contenedor sea fijo en la ventana */
        top: 0; /* Lo coloca en la parte superior de la ventana */
        left: 0; /* Lo coloca en la parte izquierda de la ventana */
        width: 100%; /* Ocupa todo el ancho de la ventana */
        z-index: 999; /* Asegura que esté en la parte superior de otros elementos */
    }

    /* Estilos adicionales para el aviso de error */
    .error-container .alert {
        margin: 0; /* Elimina cualquier margen para un mejor aspecto */
    }
   

</style>
<script>
    setTimeout(()=>{

    let alerta = document.getElementById('alerta');
    if (alerta) {
        
        alerta.remove();
    }
},4000);
</script>


