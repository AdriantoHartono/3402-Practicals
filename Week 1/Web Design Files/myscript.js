// This script was typed by Adrianto Hartono

// Validating Form Function in Home Page

function validateForm1() {
    var comment= document.forms["myForm"]["comment"].value;
    if (comment == "") {
        alert("Comment must be filled out before submit");
        return false;
    }
}

// Validating Form Function in About Us Page

function validateForm2() {
    var yesno= document.forms["yesnoForm"]["yesno"].value;
    var correct1 = "Yes";
    var correct2 = "No";
    if (yesno == "") {
        alert("Form must be filled before submit")
        return false;
    }

    else if(yesno != correct1 && yesno != correct2) {
        alert("Your answer is not valid, you need to fill Yes or No")
        return false;
    }
}

// Hamburger menu function

function hamburger() {
    var menu = document.getElementById("menu-links");   
    var logo = document.getElementById("ffc-logo");
    if (menu.style.display === "block" && logo.style.display === "none") {
        menu.style.display = "none";
        logo.style.display = "block";        
    } 
    else {
        menu.style.display = "block";
        logo.style.display = "none";
    }
}