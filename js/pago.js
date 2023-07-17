function pagar() {
    var overlay = document.getElementById("overlay");
    overlay.style.display = "block";
  
    var overlay = document.getElementById("medioPago");
    overlay.style.display = "block";
  }
  
  function cerrar() {
    var overlay = document.getElementById("overlay");
    overlay.style.display = "none";
  
    var overlay = document.getElementById("medioPago");
    overlay.style.display = "none";
  }
  
  function validateForm() {
    // Validar el campo Número de Tarjeta (solo números y longitud de 16 dígitos)
    var cardNumberInput = document.getElementById("card-number");
    var cardNumber = cardNumberInput.value;
    var cardNumberPattern = /^[0-9]{16}$/;
    if (!cardNumberPattern.test(cardNumber)) {
      alert("Ingrese un número de tarjeta válido (16 dígitos numéricos).");
      cardNumberInput.focus();
      return false;
    }
  
    // Validar el campo Fecha de Caducidad (formato MM/AA)
    var expirationDateInput = document.getElementById("expiration-date");
    var expirationDate = expirationDateInput.value;
    var expirationDatePattern = /^(0[1-9]|1[0-2])\/?([0-9]{2})$/;
    if (!expirationDatePattern.test(expirationDate)) {
      alert("Ingrese una fecha de caducidad válida (formato MM/AA).");
      expirationDateInput.focus();
      return false;
    }
  
    // Validar el campo Titular de la Tarjeta (no puede estar vacío)
    var cardHolderInput = document.getElementById("card-holder");
    var cardHolder = cardHolderInput.value;
    if (cardHolder.trim() === "") {
      alert("Ingrese el titular de la tarjeta.");
      cardHolderInput.focus();
      return false;
    }
  
    // Validar el campo Emisor de la Tarjeta (debe seleccionar una opción)
    var cardIssuerInput = document.getElementById("card-issuer");
    var cardIssuer = cardIssuerInput.value;
    if (cardIssuer === "") {
      alert("Seleccione un emisor de tarjeta.");
      cardIssuerInput.focus();
      return false;
    }
  
    // Validar el campo CVV (solo números y longitud de 3 o 4 dígitos)
    var cvvInput = document.getElementById("cvv");
    var cvv = cvvInput.value;
    var cvvPattern = /^[0-9]{3,4}$/;
    if (!cvvPattern.test(cvv)) {
      alert("Ingrese un CVV válido (3 o 4 dígitos numéricos).");
      cvvInput.focus();
      return false;
    }
  
    // Si todas las validaciones pasan, el formulario es válido
    return true;
  }