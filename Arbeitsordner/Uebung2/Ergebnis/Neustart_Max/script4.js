function validateLogin()
{
    var a = document.loginVal.username.value;
    var b = document.loginVal.password.value;
    var c = document.getElementById("useralert");

    if(a != "admin" || b != "123")
    {
    c.style.display="block";
    }
    else{
        c.style.display="none";
    }
    return false;
}

function validateRegister()
{
    var a = document.registerVal.firstname.value;
    var b = document.registerVal.lastname.value;
    var c = document.registerVal.birthday.value;
    var d = document.registerVal.yourusername.value;
    var e = document.registerVal.yourpassword.value;
    var f = document.getElementById("registeralert");
    var g = document.getElementById("birthalert");

    if(a == "" || b == "" || d == "" || e == "")
    {
    f.style.display="block";


    }
    else{
        f.style.display="none";
    }


      var pdate = c.split('-');

      var yy = parseInt(pdate[0]);
      var mm = parseInt(pdate[1]);
      var dd = parseInt(pdate[2]);

    if((yy==1995 && mm>11 && dd>11) || yy>1995)
    {
      g.style.display = "block";
    }
    else{
      g.style.display="none";
    }

    return false;
}