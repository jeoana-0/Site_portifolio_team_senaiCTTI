function change_theme(){
let checkbox = document.getElementById('theme');
let el = document.getElementById('body');
if(checkbox.checked) {
    el.style.background = "var(--gradiente-roxo)"
}else{
    el.style.background ="var(--gradiente-roxo-aqua)"
}
}


// function corBody() {
//     let body = document.getElementById("body");
//     body.style.background = "var(--gradiente-roxo)";
// }

// function voltaCorBody() {
//     let body = document.getElementById("body");
//     body.style.background = "var(--gradiente-roxo-aqua)";
// }