var cartas = new Array(
  { nombre: "Nomina", seleccion: false },
  { nombre: "Manuel", seleccion: false },
  { nombre: "Factura", seleccion: false },
  { nombre: "Juan", seleccion: false },
  { nombre: "Recibo", seleccion: false },
  { nombre: "Carlos", seleccion: false },
  { nombre: "Comprobante Contable", seleccion: false },
  { nombre: "Juanita", seleccion: false },
  { nombre: "Usuario", seleccion: false },
  { nombre: "Antonio", seleccion: false },
  { nombre: "Contabilidad", seleccion: false },
  { nombre: "Carolina", seleccion: false },
  { nombre: "404", seleccion: false },
  { nombre: "Pedro", seleccion: false },
  { nombre: "Starck Overflow", seleccion: false },
  { nombre: "memory Out Of Range", seleccion: false },
  { nombre: "Null pointer", seleccion: false },
  { nombre: "Syntax error", seleccion: false },
  { nombre: "encoding error", seleccion: false }

);

var intentos = 0;
var jugada1 = "";
var jugada2 = "";
var identificadorJ1 = "";
var identificadorJ2 = "";

function iniciarJuego() {
  var dato = document.getElementById("juego");
  dato.style.opacity = 1;

  cartas.sort(function () {
    return Math.random() - 0.5;
  });
  for (var i = 0; i < 19; i++) {
    var carta = cartas[i].nombre;
    var dato = document.getElementById(i.toString());
    dato.dataset.valor = carta;
  }
}

function resetearJuego() {
  cartas.sort(function () {
    return Math.random() - 0.5;
  });
  for (var i = 0; i < 19; i++) {
    var carta = cartas[i].nombre;
    var dato = document.getElementById(i.toString());
    dato.dataset.valor = carta;
    colorCambio(i, "black", "?");
  }
}

function girarCarta() {
  var evento = window.event;

  jugada2 = evento.target.dataset.valor;
  identificadorJ2 = evento.target.id;

  if (jugada1 !== "") {
    if (
      jugada1 === jugada2 &&
      identificadorJ1 !== identificadorJ2 &&
      cartas[parseInt(identificadorJ2)].seleccion != true &&
      cartas[parseInt(identificadorJ1)].seleccion != true
    ) {
      cartas[parseInt(identificadorJ1)].seleccion = true;
      cartas[parseInt(identificadorJ2)].seleccion = true;

      colorCambio(identificadorJ2, "blue", jugada2);
      vaciar();
      comprobar();
    } else if (identificadorJ1 !== identificadorJ2) {
      var self = this;
      setTimeout(function () {
        colorCambio(self.identificadorJ1, "black", "?");
        colorCambio(self.identificadorJ2, "black", "?");
        vaciar();
      }, 200);

      colorCambio(identificadorJ2, "blue", jugada2);
    }
  } else if (jugada2 !== "valor") {
    colorCambio(identificadorJ2, "blue", jugada2);

    jugada1 = jugada2;
    identificadorJ1 = identificadorJ2;
  }
}

function vaciar() {
  jugada1 = "";
  jugada2 = "";

  identificadorJ1 = "";
  identificadorJ2 = "";
}

function colorCambio(posicion, color, contenido) {
  document.getElementById(posicion.toString()).style.backgroundColor = color;
  document.getElementById(posicion.toString()).innerHTML = contenido;
}

function comprobar() {
  var aciertos = 0;
  for (var i = 0; i < 19; i++) {
    if (cartas[i].seleccion == true) {
      aciertos++;
    }
  }

  if (aciertos == 2) {
    document.getElementById("juego").innerHTML = "GANASTE";
  }
}

function resetearJuego() {
  cartas.sort(function () {
    return Math.random() - 0.5;
  });
  for (var i = 0; i < 19; i++) {
    var carta = cartas[i].nombre;
    var dato = document.getElementById(i.toString());
    dato.dataset.valor = carta;
    colorCambio(i, "black", "?");
  }
}
