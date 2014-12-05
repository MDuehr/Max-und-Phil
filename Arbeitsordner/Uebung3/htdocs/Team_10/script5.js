var getName = $("#yourName");
var getMail = $("#yourEmail");
var getQuota = $("#yourQuota");
var getUserName = $("#userName1");

$.ajax( {
    type:'Get',
    url:'http://wme.lehre.imld.de:8080/wme14-15/api/users',
    success:function(data) {
        var users = data.getElementsByTagName("user");
        var userName1 = users[3].getElementsByTagName("username");
        var name = users[3].getElementsByTagName("display_name");
        var mail = users[3].getElementsByTagName("email_address");
        var quota = users[3].getElementsByTagName("quota");
        var quotaUsed = users[3].getElementsByTagName("quota_used");
        getUserName.append(""+userName1[0].innerHTML);
        getName.append(""+name[0].innerHTML);
        getMail.append(""+mail[0].innerHTML);
        getQuota.append(""+quota[0].innerHTML + " / " + quotaUsed[0].innerHTML);
    }
})