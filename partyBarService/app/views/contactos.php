<?php
require $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/class/Productos.php';
include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/headform.php';
include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/header.php';

?>
<div class="container container-form">
        <h1> Contáctanos </h1>
        <p>Muchas gracias por mostrar interés en nuestros servicios, rellena el siguiente formulario y nos comunicaremos contigo a la brevedad.</p>
        <form action="../resource/envio-form.php" method="POST">
        
            <div>
                <label for="consulta">Motivo de consulta:</label>
                <select name="consulta" id="consulta">
                <option value="">Seleccionar...</option>
                <option value="presupuesto">Presupuesto personalizado</option>
                <option value="atencion">Atención al cliente</option>
                <option value="other">Otro</option>
                </select>
            </div>
            
            <div id="nameDiv">
                <h2>Datos personales:</h2>
                <label for="nameUser">Nombre:</label>
                <input type="text" name="nameUser" id="nameUser" onchange="nameValidation()">
            </div>

            <div id="lastNameDiv">
                <label for="last_name">Apellido:</label>
                <input type="text" name="last_name" id="last_name" onchange="lastNameValidation()">
            </div>

            <div id="mailDiv">
                <label for="mail">E-mail:</label>
                <input type="email" name="mail" id="mail" placeholder="ejemplo@mail.com" onchange="mailValidation()">
            </div>

            <div id="dniDiv">
                <label for="dni">DNI:</label>
                <input type="number" name="dni" id="dni" onchange="dniValidation()">
            </div>

            <div id="streetDiv">
                <h2>Domicilio:</h2>
                <label for="street">Calle:</label>
                <input type="text" name="street" id="street" placeholder="Ejemplo: Riobamba" onchange="streetValidation()"> 
            </div>
            
            <div id="streetNumberDiv">
                <label for="street_number">Altura:</label>
                <input type="number" name="street_number" id="street_number" placeholder="Ejemplo: 1234" onchange="streetNumberValidation()">
            </div>
            
            <div id="postalCodeDiv">
                <label for="postal_code">Código postal:</label>
                <input type="number" name="postal_code" id="postal_code" placeholder="Ejemplo: 5678" onchange="postalCodeValidation()">
            </div>

            <div id="birthDiv">
                <label for="birth_date">Fecha de nacimiento</label>
                <input type="date" name="birth_date" id="birth_date" onchange="birthDateValidation()">
            </div>

            <div id="textMessage">
                <label for="messageContent">Escriba su mensaje aquí:</label>
                <textarea name="messageContent" id="messageContent"></textarea>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="validationFormCheck1" onclick="checkboxValidation()">
                <label class="form-check-label" for="validationFormCheck1">Acepto los términos y condiciones</label>
                <div class="invalid-feedback">Debes aceptar los términos y condiciones</div>
            </div>

            <button type="submit" class="btn" onclick="confirmSubmit()">Enviar</button>
            
        </form>
    </div>
    <script src="../resource/misfunciones.js"></script>
<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/footer.php';

?>