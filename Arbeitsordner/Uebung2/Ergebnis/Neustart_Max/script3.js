var items = "";
var json = [];
var sizeButton = $("#HeaderSize");
var nameButton = $("HeaderName");


function clearTable() {
    while (document.getElementById("parseData").rows.length > 0) {
        document.getElementById("parseData").deleteRow(0);
    }
}

function drawTable(json) {    
    clearTable();
    
    for (var i = 0; i < json.length; i++) {
        var img = "";
        if(json[i].metadata.thumbnail_available == true) {
            img="<img src="+"'"+json[i].file_url+"'"+" />";
        }
        tr = $('<tr/>');
        tr.append("<td>"+img+" "+ json[i].filename + "</td>");
        tr.append("<td>" + json[i].metadata.size + "</td>");
        tr.append("<td>" + json[i].metadata.mimetype + "</td>");
        tr.append("<td>" + json[i].metadata.creation_date + "</td>");
        tr.append("<td class='symboltd'>"+"<a href='#Beispiel75'><i class='fa fa-eye'></i></a>" +
                                "<a href='#Beispiel76'><i class='fa fa-mail-forward'></i></a>&#124;" + 
                                "<a href='#Beispiel77'><i class='fa fa-pencil'></i></a>" +
                                "<a href='#Beispiel78'><i class='fa fa-lock'></i></a>" +
                                "<a href='#Beispiel79'><i class='fa fa-trash-o'></i></a>" +"</td>");
        $('#parseData').append(tr);
    }
}

function sortSize(a,b) {
    if((a.metadata.size-b.metadata.size)<0) return -1;
    if((a.metadata.size-b.metadata.size)>0) return 1;
    return 0;
}

function sortName(a, b){
    if(a.filename < b.filename) return -1;
    if(a.filename > b.filename) return 1;
    return 0;
}

function sortMe(p){
    
    alert("juhu");
    switch(p) {
            
            case 'size':
                json.sort(sortSize);
                drawTable(json);
                break;
            case 'name':
                json.sort(sortName);
                drawTable(json);
                break;
            default: 
                alert("nix gedrückt");
                break;
    }
}

function fillWithUserData(a)
{    
    $.ajax({
        type:"GET",
        dataType: "json",
        url:"http://wme.lehre.imld.de:8080/wme14-15/api/users/"+a+"/items",
        success: function(data) {
            json = data;
            drawTable(data);
        }
    });
}
window.onload = fillWithUserData(2);