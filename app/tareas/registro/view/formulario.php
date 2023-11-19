<h1 class="text-center textoChido">Nueva tarea</h1>
<hr>

<?php 
    if (isset($query_params)) {
        $error = $query_params['error'];
        echo"
            
            <div id='alerta' class='alert alert-danger fade show'>
                <strong>Error: </strong>{$error}
                
            </div>
            
            ";
    }
?>
<div class="container mt3">
    
    <section class="row">
        <div class="col-md-4 col-lg-3 col-sm-6 col-12">
            <h3 class="text-center textoChido">Menu</h3>
            <hr>
            <div class="card" style="width: 16.5rem;">
                <img class="card-img-top" src="/app/assets/user.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">correo: <?php  echo $_SESSION['correo'];?></h5>                
                    <a href="#" class="btn btn-primary"><i class="ri-user-fill"> </i>Perfil</a>
                    <a href="/logout" class="btn btn-outline-primary"><i class="ri-logout-circle-line"> </i>Logout</a>
                </div>
            </div>
            <ul class="list-group mt-3">
                <li class="list-group-item bg-primary">
                    <a href="/tareas/registro" class="btn btn-link textoChido">Nueva tarea</a>
                </li>
                <li class="list-group-item">
                    <a href="/tareas" class="btn btn-link ">Mis tareas</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <h3 class="text-center textoChido">Tarea</h3>
            <hr>
            <form action="" method="post">
                <div class="form-floating mt-3">
                    <input type="text" class="form-control" 
                        name="titulo" id="titulo" 
                        placeholder="" required>
                    <label for="titulo">Titulo tarea</label>
                </div>
                <div class="form-floating mt-3">
                    <textarea class="form-control" name="descripcion" 
                        id="descripcion" placeholder="" required></textarea>
                    <label for="descripcion">Descripcion</label>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success mt-3">
                        Guardar <i class="ri-add-circle-fill"></i>
                    </button>
                    
                </div>
            </form>
        </div>
    </section>
</div>
<!-- <script src="./app/tareas/registro/view/js/formulario.js"></script> -->
<script>
    setTimeout(()=>{

    let alerta = document.getElementById('alerta');
    if (alerta) {
        
        alerta.remove();
    }
},4000);

    
</script>

<style>
    body{
        background: #000428;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #004e92, #000428);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #004e92, #000428); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */    
    }
    .textoChido{
        color: #fff;
    }
    hr {
        background-color: #fff; 
        height: 1px; 
        border: none; 
        margin: 20px 0; 
    }
</style>