//Login Box
var modal = document.getElementById('LoginBox');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//Login Box
var modal = document.getElementById('AccountBox');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//Account Box
function AccountBoxOpen() {
    document.getElementById("AccountBox").style.display = "block";
}
  
function AccountBoxClose() {
    document.getElementById("AccountBox").style.display = "none";
}

//Sidenav

var content = docuement.getElementById("content");
var clickOn = document.getElementById("join");

clickOn.onclick = function() {
    if(content.className == "open") {
        content.setAttribute("style", "width: 250px;");
    } else {
        content.setAttribute("style", "width: 0;");
    }
}


function OpenSideNav() {
    document.getElementById("Sidenav").style.width = "250px";
}

function CloseSideNav() {
    document.getElementById("Sidenav").style.width = "0";
}