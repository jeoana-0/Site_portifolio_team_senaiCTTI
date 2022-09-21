function change_theme() {
    let checkbox = document.getElementById("theme");
    let el = document.getElementById("body");
    if (checkbox.checked) {
        el.style.backgroundColor = "#d3d3d3";
    } else {
        el.style.backgroundColor = "var(--CorPrincipal)";
    }
}
