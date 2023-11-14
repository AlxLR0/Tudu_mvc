<h1 class="text-center">App paises</h1>
<hr>
<main class="row">
    <!--meu  -->
    <section class="col-12 col-sm-6 col-md-4 col-lg-3"> 
        <?php
            require_once("./app/paises/common/menu/menu.php")
        ?>
    </section>

    <!-- container -->
    <section class="col">
        <h3 class="col-12 text-center">Paises</h3>
        <hr class="col-12">
        <input type="text" class="col-12 form-control" placeholder="Nombre del pais" onkeypress="onKeyPress(event)">

        <hr class="col-12">
        <div id="paises-container" class="col12 row justify-content-between"></div>
    </section>
</main>

<script src="/app/paises/por-pais/controller/por-pais.controller.js"></script>
<script src="/app/paises/helper/renderPaises.helper.js"></script>