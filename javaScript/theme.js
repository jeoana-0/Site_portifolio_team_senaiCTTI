function change_theme(){
let checkbox = document.getElementById('theme');
let el = document.getElementById('body');
if(checkbox.checked) {
    el.style.backgroundColor = "white"
}else{
    el.style.backgroundColor ="var(--CorPrincipal)"
}
}
