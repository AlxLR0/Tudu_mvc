<?php 
    if (isset($error)) {
        echo "
            <div class='error-container'>
                <div id='alerta' class='alert alert-warning fade show'>
                    <strong>Aviso: </strong>{$error}
                </div>
            </div>
        ";
    }elseif(isset($exito)){
        echo "
        <div class='error-container'>
            <div id='alerta' class='alert alert-success fade show'>
                <strong>Aviso: </strong>{$exito}
            </div>
        </div>
    ";

    }
?>
<h1 class="text-center textoChido">Mis tareas</h1>
<hr>
<div class="container mt3">

    <section class="row">
        <div class="col-md-4 col-lg-3 col-sm-6 col-12 ">
            <div class="estiki">
                <h3 class="text-center textoChido">Menu</h3>
                <hr style="margin-top:-1px; background: #fff;">
                <div class="card" style="width: 16.5rem;">
                    <img class="card-img-top" src="/app/assets/user.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">correo: <?php  echo $_SESSION['correo'];?></h5>               
                        <a href="#" class="btn btn-primary"><i class="ri-user-fill"> </i>Perfil</a>
                        <a href="/logout" class="btn btn-outline-primary"><i class="ri-logout-circle-line"> </i>Logout</a>
                    </div>
                </div>
                <ul class="list-group mt-3 estiki">
                    <li class="list-group-item">
                        <a href="/tareas/registro" class="btn btn-link ">Nueva tarea</a>
                    </li>
                    <li class="list-group-item bg-primary">
                        <a href="/tareas" class="btn btn-link text-white">Mis tareas</a>
                    </li>
                </ul>
    
            </div>
        </div>
        <div class="col row">
            <h3 class="text-center textoChido">Tareas</h3>
            <hr>
            <?php
                include_once("./app/tareas/repository/tareas.repository.php");
    
                $tareas = TareasRepository::getInstance()->getAllTareas();
    
                // print_r($tareas);
    
                for ($i=0; $i < count($tareas) ; $i++) { 
                    $color = "";
                    $ocultar = "";
                    switch ($tareas[$i]->getStatus()) {
                        case 'Pendiente':
                            $color = "warning";
                            break;
                        case 'Completado':
                            $color = "success";
                            $ocultar = "visually-hidden";
                            break;
                        
                        default:
                            $color = "danger";
                            break;
                    }
    
                    $html ="
                        <div class='col-md-12'>
                        <div class='card mt-3 border-black'>
                            <div class='card-header bg-{$color}'>
                                <h4 class='card-title text-center text-white'>
                                    {$tareas[$i]->getTitulo()} 
                                </h4>
                            </div>
                    
                            <div class='card-body'>
                                <p class='card-text'>
                                    {$tareas[$i]->getDescripcion()}
                                </p>
                            </div>
                    
                            <div class='card-footer d-flex justify-content-between align-items-center'>
                                <strong class='card-text text-{$color}'>
                                    ESTADO: {$tareas[$i]->getStatus()}
                                </strong>
                                <div>
                            <form method='POST' action=''>
                                <input type='hidden' name='completar' value='{$tareas[$i]->getId()}'>
                                <button type='submit' class='btn btn-success rounded-circle {$ocultar}' href='mvc/tareas/'>
                                    <i class='ri-checkbox-circle-fill'></i>
                                </button>
                                
                            </form>
                    
                </div>
                            </div>
                        </div>
                    </div>
                
                    ";
                        echo $html;
                }
            ?>
        </div>
    </section>
</div>

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
    .estiki{
        position: sticky;
        top: 20px;
    }
</style>
<script>
    setTimeout(()=>{

    let alerta = document.getElementById('alerta');
    if (alerta) {
        
        alerta.remove();
    }
},2000);
</script>
