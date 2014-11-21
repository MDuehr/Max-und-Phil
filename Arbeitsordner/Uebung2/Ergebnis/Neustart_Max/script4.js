function validateLogin() {
    
    var a = document.forms["input"]["loginusername"].value;
    var b = document.forms["input"]["loginpassword"].value;
    var c = document.getElementById("useralert");
    
    if (a != "admin" || b != "12345") {
        c.style.display = "inherit";
    }
    else {
        c.style.display = "none";
    }
}

//AJAX hier vielleicht damit buttons nicht ganze seite refreshen?!

function validateRegister() {
    var a = document.forms["register"]["firstname"].value;
    var b = document.forms["register"]["lastname"].value;
    var c = document.forms["register"]["birthday"].value;
    var d = document.forms["register"]["yourusername"].value;
    var e = document.forms["register"]["yourpassword"].value;
    var f = document.getElementById("registeralert");
    
    if(a == null || b == null || d == null || e == null) {
        f.style.display = "inherit";
    }
    if(c == null || c != "") {
        f.style.display = "inherit";
    }
}