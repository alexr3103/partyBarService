//Crear parrafos para mensaje de error
let errorMessage= document.createElement("p");
errorMessage.classList.add("errorMessage");

//validación de mail
function mailValidation(){

    let email=document.getElementById("mail").value;
    let mailError=document.getElementById("mailDiv");
    let mailDomain=["gmail.com","hotmail.com","outlook.com"];
    
    //verificar que el dominio pertenezca
    const [ ,domain]=email.split("@");

    let validDomain=false;
    mailDomain.forEach(validDomains => {
        if(domain===validDomains){
            validDomain=true
        }
    });
    
    //validación1 incluye @
    if(!email.includes("@")){
        errorMessage.textContent="Ingrese un mail válido.";
        mailError.appendChild(errorMessage);
    //validacion2 dominio valido
    }else if(!validDomain){
        errorMessage.textContent="Ingrese con un correo gmail.com, hotmail.com u outlook.com."
        mailError.appendChild(errorMessage);
    }else{
        mail.classList.add("validation");
        errorMessage.textContent="";
    }
}


//validacion de calle
function streetValidation(){
    let userStreet=document.getElementById("street").value;
    let streetError=document.getElementById("streetDiv");

    //Regex de caracteres especiales
    let regex1 = /[!@#$%^&*():;<>,.?~|=-]/;

    //validacion1 que el campo no este vacio
    if (userStreet===""){
        errorMessage.textContent="El campo no puede estar vacío.";
        streetError.appendChild(errorMessage);
    } else if(regex1.test(userStreet)){
        errorMessage.textContent="Ingrese una calle válida."
        streetError.appendChild(errorMessage);
    //validacion2 que la calle no tenga caracteres especiales
    }else{
        street.classList.add("validation");
        errorMessage.textContent="";
    }
}

//validacion de altura
function streetNumberValidation(){
    let userStreetNumber=document.getElementById("street_number").value;
    let streetNumberError=document.getElementById("streetNumberDiv");
    let streetNumberCharacters=userStreetNumber.length;
    
    //Validacion1 máximo 7 caracteres 
    if (streetNumberCharacters>7){
        errorMessage.textContent="Ingrese una altura válida.";
        streetNumberError.appendChild(errorMessage);
    //Validacion2 no puede tener numeros negativos
    } else if (userStreetNumber<0){
        errorMessage.textContent="La altura no puede ser negativa, ingrese una altura válida.";
        streetNumberError.appendChild(errorMessage);
    }else{
        streetNumber.classList.add("validation");
        errorMessage.textContent="";
    }
}

//validacion de codigo postal
function postalCodeValidation(){
    let postalCode=document.getElementById("postal_code").value;
    let postalCodeError=document.getElementById("postalCodeDiv");
    let postalCodeDigits=postalCode.length;

    //Validacion 1 que tenga 4 digitos
    if (postalCodeDigits !== 4){
        errorMessage.textContent="El código postal debe tener 4 dígitos";
        postalCodeError.appendChild(errorMessage);
    //validacion2 que sea un codigo postal valido
    } else if (postalCode<1001 || postalCode>9999){
        errorMessage.textContent="El código postal es inválido, ingrese un número válido";
        postalCodeError.appendChild(errorMessage);
    }else {
        postal_code.classList.add("validation");
        errorMessage.textContent="";
    }
}

//validacion de nombre
function nameValidation(){
    let name_user=document.getElementById("nameUser").value;
    let nameError=document.getElementById("nameDiv");
    let nameCharacters=name_user.length;
    //regex para no repetir letras
    let regex4=/([a-zA-Z])\1{2,}/;
    //regex de numeros
    let regex2=/\d/;

    //validacion1 que el nombre tenga más de dos caracteres 
    if(nameCharacters<3){
        errorMessage.textContent="Ingrese un nombre válido.";
        nameError.appendChild(errorMessage);
    //validacion2 que no contenga numeros
    }else if(regex2.test(name_user)){
        errorMessage.textContent="Nombre inválido. Ingrese un nombre válido.";
        nameError.appendChild(errorMessage);
    //que no se repitan letras
    }else if (regex4.test(name_user)){
        errorMessage.textContent="Ingrese un nombre válido, no repitas más de 2 letras.";
        nameError.appendChild(errorMessage);
    }else{
        nameUser.classList.add("validation");
        errorMessage.textContent=""
    }
}

//validacion de apellido
function lastNameValidation(){
    let lastName=document.getElementById("last_name").value;
    let lastNameError=document.getElementById("lastNameDiv");
    let lastNameCharacters=lastName.length;
    
    //validacion1 no puede quedar vacio
    if(lastName===""){
        errorMessage.textContent="Este campo no puede quedar vacio";
        lastNameError.appendChild(errorMessage);
    //validacion2 que el apellido tenga más de 2 letras 
    } else if(lastNameCharacters<2){
        errorMessage.textContent="Ingrese un apellido válido";
        lastNameError.appendChild(errorMessage);
    //validacion2 que no contenga numeros
    }else if(regex2.test(lastNameCharacters)){
        errorMessage.textContent="Apellido inválido. Ingrese un apellido válido.";
        lastNameErrorameError.appendChild(errorMessage);
    }else{
        last_name.classList.add("validation");
        errorMessage.textContent="";
    }
}

//validacion de dni
function dniValidation(){
    let userDni=document.getElementById("dni").value;
    let userDniError=document.getElementById("dniDiv");
    let dniDigits=userDni.length; 

    console.log(dniDigits)

    //validacion1 que no sea menor a 800mil
    if(userDni<800000){
        errorMessage.textContent="Dato erróneo, ingrese un DNI válido.";
        userDniError.appendChild(errorMessage);
    //validacion2 que no tenga mas de 10 digitos
    } else if (dniDigits>10){
        errorMessage.textContent="Ingrese un DNI válido.";
        userDniError.appendChild(errorMessage);
    } else{
        dni.classList.add("validation");
        errorMessage.textContent="";
    }
}
//validacion de fecha de nacimiento
function birthDateValidation(){
    let userBirth=document.getElementById("birth_user").value;
    let=document.getElementById("birthDiv");
    
// validacion de fecha de nacimiento
function birthDateValidation() {
let birthDate = document.getElementById("birth_date").value;
let birthError = document.getElementById("birthError");

// Calcula la edad en base a la fecha de nacimiento
let today = new Date();
let birthDateObj = new Date(birthDate);
let age = today.getFullYear() - birthDateObj.getFullYear();
let monthDiff = today.getMonth() - birthDateObj.getMonth();

if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDateObj.getDate())) {
    age--;
}

// Validacion1: La persona debe tener al menos 18 años
if (age < 18) {
    birthError.textContent = "Debes ser mayor de 18 años.";
    birth_date.classList.remove("validation");
    birth_date.classList.add("is-invalid");
}
// Validacion2: La persona no puede ser mayor de 120 años
else if (age > 120) {
    birthError.textContent = "La edad máxima permitida es 120 años.";
    birth_date.classList.remove("validation");
    birth_date.classList.add("is-invalid");
} else {
    birth_date.classList.remove("is-invalid");
    birth_date.classList.add("validation");
    birthError.textContent = "";
}
}


}


function checkboxValidation() {
let checkbox = document.getElementById("validationFormCheck1");
let checkboxFeedback = document.getElementById("validationFormCheck1");

if (checkbox.checked) {
checkbox.classList.remove("is-invalid")
checkbox.classList.add("is-valid");
errorMessage.textContent = '';
} else {
checkbox.classList.remove("is-valid");
checkbox.classList.add("is-invalid");
errorMessage.textContent = 'Debes aceptar para enviar';
}
}

function guardarInformacion(event) {
event.preventDefault(); 

}