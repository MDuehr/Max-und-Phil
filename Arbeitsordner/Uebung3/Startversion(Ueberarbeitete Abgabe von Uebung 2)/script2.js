$(document).ready(function(){
    $('.hideSize').click(function(){
    	$('#tableHidden tr td:nth-of-type(2), #tableHidden th:nth-child(2)').toggle();
    })
    $('.hideType').click(function(){
    	$('#tableHidden tr td:nth-of-type(3), #tableHidden th:nth-child(3)').toggle();
    })
    $('.hideCreation').click(function(){
    	$('#tableHidden tr td:nth-of-type(4), #tableHidden th:nth-child(4)').toggle();
    })
});