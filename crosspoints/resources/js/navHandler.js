let btn = document.getElementById("menu-button")
let closeBtn = document.getElementById("close-btn")

//check if button exists
if (btn && closeBtn) {
    btn.addEventListener("click", openNav)
    closeBtn.addEventListener("click", closeNav)
}

let navOpen
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    if (navOpen === true) {
        closeNav()
    } else {
        navOpen = true

        if (window.innerWidth < 500) {
            document.getElementById("mySidenav").style.width = "100%";
        } else {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("menu-button").innerHTML = "Sluit Menu";
        }
    }

}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    navOpen = false

    if (window.innerWidth < 500) {
        document.getElementById("mySidenav").style.width = "0";
    } else {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.getElementById("menu-button").innerHTML = "Open Menu";
    }
}
