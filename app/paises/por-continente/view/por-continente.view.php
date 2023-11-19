<h1 class="text-center">App Paises</h1>
<hr>
<div class="container mt-3">

    <main class="row">
        <!-- Menu -->
        <section class="col-12 col-sm-6 col-md-4 col-lg-3">
            <?php
                require_once("./app/paises/common/menu/menu.php");
            ?>
        </section>
    
        <!-- Container -->
        <section class="col">
            <div class="col-12">
                <h3 class="text-center">Continentes</h3>
                <hr>
            </div>
            <div id="button-container" class="col-12 text-center"></div>
            <div id="paises-container" class="col-12 row"></div>
        </section>
    </main>
</div>
<script src="/app/paises/por-continente/controller/por-continente.controller.js"></script>
<script src="/app/paises/helper/renderPaises.helper.js"></script>