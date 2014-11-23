var getName = $("#yourName");
var getMail = $("#yourEmail");
var getQuota = $("#yourQuota");

$.ajax( {
type:'Get',
url:'http://wme.lehre.imld.de:8080/wme14-15/api/users',
success:function(data) {
    var users = data.getElementsByTagName("user");
    var name = users[2].getElementsByTagName("display_name");
    var mail = users[2].getElementsByTagName("email_address");
    var quota = users[2].getElementsByTagName("quota");
    var quotaUsed = users[2].getElementsByTagName("quota_used");

    getName.append(""+name[0].innerHTML);
    getMail.append(""+mail[0].innerHTML);
    getQuota.append(""+quota[0].innerHTML + " / " + quotaUsed[0].innerHTML);
}

})