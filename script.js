// Light Mode or Dark Mode
function lightMode(){
    const isLight = document.body.classList.toggle("light-theme")
    let icon = document.getElementById("icon-mode");
    let mode = ""
    if (isLight){
        mode = "Light Mode"
        icon = "images/sun.png";
    } else {
        mode = "Dark Mode"
        icon = "images/moon.png";
    }

    // Manipulasi DOM 1
    document.getElementById("change-mode").innerHTML = mode
    document.getElementById("icon-mode").src = icon
}
