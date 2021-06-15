
// Solo permite ingresar numeros.
function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}
// solo numero y punto
function securePhoneNumber(el) {
  const regex = /^[0-9.]+$/
  if (!regex.test(el.value)) {
    el.value = el.value.substring(0, el.value.length - 1)
  }
}
// letras y espacio
function validar(e) {
tecla = (document.all) ? e.keyCode : e.which;
if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
// dejar la línea de patron que se necesite y borrar el resto
patron =/[A-Za-z ]/; // Solo acepta letras
//patron = /\d/; // Solo acepta números
//patron = /\w/; // Acepta números y letras
//patron = /\D/; // No acepta números
//
te = String.fromCharCode(tecla);
return patron.test(te);
}
function numerosyletras(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
    // dejar la línea de patron que se necesite y borrar el resto
    patron =/[A-Za-z . 0-9 ]/ ; // Solo acepta letras
    //patron = /\d/; // Solo acepta números
    //patron = /\w/; // Acepta números y letras
    //patron = /\D/; // No acepta números
    //
    te = String.fromCharCode(tecla);
    return patron.test(te);
    }
