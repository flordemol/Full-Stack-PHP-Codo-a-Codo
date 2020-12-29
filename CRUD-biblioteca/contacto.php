<?php
    include_once "header.php"
?>

<main>
    <div class="container" id="contacto">
        <div id="fotoContacto">
            <img src="img/fondo-login.jpg" alt="foto de pinturas">
        </div>
        <h1 class="text-center mb-3">Contacto</h1>
        
        <form action="" method="post" id="formContacto">

            <div class="row">
                  <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required/>
                  </div>
                  <div class="col-md-6 mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-3">
                    <textarea class="form-control" name="mensaje" id="mensaje" rows="5" placeholder="Mensaje" required></textarea>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block" id="btn-contacto">Enviar</button>
        </form>

    </div>
</main>

<?php
    include_once "footer.html"
?>