function sortSizes(){
            json.sort(function(a,b) { return parseFloat(b.size) - parseFloat(a.size) } );

                while (document.getElementById("parseData").rows.length > 0) {
                    document.getElementById("parseData").deleteRow(0);
            }

            for (var i = 0; i < json.length; i++) {
            tr = $('<tr/>');
            tr.append("<td>" + json[i].filename + "</td>");
            tr.append("<td>" + json[i].size + "</td>");
            tr.append("<td>" + json[i].type + "</td>");
            tr.append("<td>" + json[i].creation + "</td>");
            tr.append("<td>" + json[i].action + "</td>");
            $('#parseData').append(tr);
        }
    }

        function sortNames(){
            //json.sort(function(a,b) { return parseFloat(b.size) - parseFloat(a.size) } );

            json.sort(function(a, b){
                if(a.filename < b.filename) return -1;
                if(a.filename > b.filename) return 1;
                return 0;
            });

                while (document.getElementById("parseData").rows.length > 0) {
                    document.getElementById("parseData").deleteRow(0);
            } 

            for (var i = 0; i < json.length; i++) {
            tr = $('<tr/>');
            tr.append("<td>" + json[i].filename + "</td>");
            tr.append("<td>" + json[i].size + "</td>");
            tr.append("<td>" + json[i].type + "</td>");
            tr.append("<td>" + json[i].creation + "</td>");
            tr.append("<td class='symboltd'>" + json[i].action + "</td>");
            $('#parseData').append(tr);
        }
    }