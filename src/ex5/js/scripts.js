let xhr = new XMLHttpRequest();
let div_verbes = document.getElementById("liste_verbes");
let div_input = document.getElementById("input");

// la ligne suivante est à décommenter après écriture de creer_interface
// document.body.onload = creer_interface;

function creer_interface() {
  // à faire
}

function callback_basique() {
  let xhrJSON = JSON.parse(xhr.responseText);
  console.log(xhrJSON);
}

function callback() {
  // à faire
}

function charger_verbes(lettre,type) {
  // à faire
}
