<section id="contactya" class="bck-gradient py-3 text-center text-white px-3">
    <h2 class="pt-5 pb-1">Empezá ahora a mejorar tu marca</h2>
    <p class="pb-5">Dejanos tus datos y nos comunicamos para empezar atrabajar en tu idea.</p>
    <div class="mx-auto d-flex flex-column flex-lg-row align-items-md-stretch justify-content-md-center gap-3 mb-4">
        <? if (!$HTTP_POST_VARS){ ?>
        <form class="row row-cols-lg-auto g-3 align-items-center mx-2" method="post" action="layouts/contactya.php">
            <div class="col-12">
                <label class="visually-hidden" for="email">Mail</label>
                <input type="text" class="form-control p-3" id="email" placeholder="Mail" required>
            </div>
            <div class="col-12">
                <label class="visually-hidden" for="telefono">Teléfono</label>
                <input type="tel" class="form-control p-3" id="telefono" placeholder="Teléfono">
            </div>
            <div class="col-12">
                <button class="smaller btn btn-dark btn-icontransicion ps-5  font-monospace text-uppercase px-4 py-3 ms-3 bck-green border-0" role="button" aria-pressed="true" type="submit">
                    <div class="icons">
                        <i class="fa-solid fa-circle-right me-2 icon-default"></i>
                        <i class="fa-solid fa-thumbs-up text-white me-2 icon-hover"></i>
                    </div>                
                    contactarme
                </button>
            </div>
        </form>
        <? } else {
            $cuerpo = "Quiero más información \n";
            $cuerpo .= "Email: " . $HTTP_POST_VARS["email"] . "\n";
            $cuerpo .= "Telefono: " . $HTTP_POST_VARS["telefono"] . "\n";
            $remitente = $_POST['email'];
            //mando el correo...
            mail("valeria.dcv@gmail.com","Formulario enviado desde la section contacto",$cuerpo,"FROM: $remitente");
            //doy las gracias 
            echo("Gracias por comunicarse con nosotros. En breve responderemos su consulta.");
        }
        ?>
    </div>
</section>