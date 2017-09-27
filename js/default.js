function _(caminho) {
  return document.getElementById(caminho);
}

document.addEventListener("load", function(){
  _("Esporte").addEventListener("click", function(){
    console.log("teste");
  });
});