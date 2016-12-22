<?php 
/**
 *Formulario para desarrollo y hoteles
 *
 */

if ( LANDINGPAGE != 'agencias' ) : ?>
<form id="contact" method="post" action="enviar-formulario.php">
    <input type="hidden" name="landing" id="landing" value="hola">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required placeholder="correo electrónico">
    <label for="tel">Teléfono</label>
    <input type="text" id="tel" name="tel" placeholder="teléfono">
    <label for="consulta">Consulta;</label>
    <textarea id="consulta" name="consulta" placeholder="mensaje"></textarea>
    <button type="submit"><span class="red-icon red-icon-contacto"></span> enviar</button>
    <div class="close-form">
          <span class="cruz-l"></span>
          <span class="cruz-lr"></span>
    </div>      
</form>

<?php 
/**
 *Formulario para agencias
 *
 */
else :
?>
<form id="contact" method="post" action="enviar-formulario-agencias.php">
    <input type="hidden" name="landing" id="landing" value="agencias">
    
<!--- presupuesto -->
    <div class="row">

        <div class="col-l">
            <h3 class="inline-decore">
                ¿<span>Qué necesitas</span> para tu <span>página web</span>?
            </h3>
        </div>
        <div class="col-r">
            <div class="row-in">
                <div class="col-l-in">
                Cargar o modificar tus paquetes (auto administrable)
                </div>
                <div class="col-r-in">
                    <input type="checkbox" name="autoadministrable" id="autoadministrable">
                    <label for="autoadministrable"><span></span></label>
                </div>
            </div>
            <div class="row-in">
                <div class="col-l-in">
                    Venta online
                </div>
                <div class="col-r-in">
                    <input type="checkbox" name="ventaonline" id="ventaonline">
                    <label for="ventaonline"><span></span></label>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-l">
            <h3 class="inline-decore">
                ¿Qué cantidad de <span>paquetes</span> maneja <span>tu agencia</span>?
            </h3>
        </div>

        <div class="col-r">
            <div class="row-in">

                <div class="col-l-in">  
                    Menos de 100
                </div>
                <div class="col-r-in">
                    <input type="radio" name="paquetes" id="paquetes1" value="menos100">
                    <label for="paquetes1"><span></span></label>
                </div>
            </div>
            <div class="row-in">
                <div class="col-l-in">  
                    Menos de 500
                </div>
                <div class="col-r-in">
                    <input type="radio" name="paquetes" id="paquetes2" value="menos500">
                    <label for="paquetes2"><span></span></label>
                </div>
            </div>
            <div class="row-in">
                
                <div class="col-l-in">  
                    Más de 500
                </div>
                <div class="col-r-in">
                    <input type="radio" name="paquetes" id="paquetes3" value="mas500">
                    <label for="paquetes3"><span></span></label>
                </div>

            </div>
        </div>
    </div>
<!--- datos ------>
    <div class="row">
        <div class="col-l">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="col-r">
            <label for="tel">Teléfono</label>
            <input type="text" id="tel" name="tel">
            <label for="tel">Página web</label>
            <input type="url" id="web" name="web">
        </div>
    </div>

    
    <div class="row">

        <label for="consulta">
            Mensaje adicional: 
                <span>(cualquier otra aclaración)</span>
            </label>
        <textarea id="consulta" name="consulta"></textarea>
    </div>

    <div class="row">
        <div class="btn-wrapper">
            <button type="submit" class="btn btn-negro-csombra">enviar</button>
        </div>
    </div>
</form>
<?php endif; ?>