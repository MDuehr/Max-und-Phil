//DIeses Skript ist noch nicht eingebunden. wird es anstelle von Skript3.js verwendet wird der Inhalt der Tabelle Dynamisch geladen, wird jedoch noch nicht nach Name oder Größe sortiert

function clearTable() {
    while (document.getElementById("parseData").rows.length > 0) {
        document.getElementById("parseData").deleteRow(0);
    }
}

function drawTable(items) {
    for (var c=0; c<items.length; c++)
    {
        var src = ""
        children = $(items[c].childNodes);
        if(children[3].childNodes[3].innerHTML == "true")
        {
            src="<img src="+children[2].innerHTML+"/>"
        }
        tr = $('<tr id='+'"'+children[0].innerHTML+'"'+'/>');
        tr.append("<td>"+src + children[1].innerHTML+"</td>");
        tr.append("<td>"+ children[3].childNodes[0].innerHTML+"</td>");
        tr.append("<td>"+ children[3].childNodes[2].innerHTML+"</td>");
        tr.append("<td>"+children[3].childNodes[1].innerHTML+"</td>");
        $("#parseData").append(tr);
    }
}

function fillWithUserData(a)
{
    $.ajax({
        type:"GET",
        url:"http://wme.lehre.imld.de:8080/wme14-15/api/users/"+a+"/items",
        success:function(data) 
        {
            clearTable();
            items=data.getElementsByTagName("item");            
            drawTable(items);
        }  
        
    });
}





function sortMe(p)
{
    switch(p) {
        case 'name':
            alert(items[0].childNodes[1].[0]);
            clearTable();
            break;
        case 'size':
            clearTable();
            items.sort(function (a , b){
            return a.children[3].childNodes[0].innerHTML - b.children[3].childNodes[0].innerHTML;
            });
            drawTable(items);
            break;
        default:
            alert("was anderes");
            break;
    }
}
var items = "";

window.onload = fillWithUserData(3);