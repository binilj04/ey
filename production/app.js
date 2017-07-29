$(document).ready(function(){
    
    
    $('#datatable tr').click(function(e){
        var cell = $(e.target).get(0);
        var tr = $(this);
        $('#out').empty();
        alert($('td',tr).text());
        $('td', tr).each(function(i, td){
            if(i===0){
                        // alert($(td).text());
                        var r = confirm("Activate?");
                             if (r == true) {
                                 
                                    var http = new XMLHttpRequest();
                                    var url = "activate.php";
                                    var params = "act=1&form="+$(td).text();
                                    http.open("POST", url, true);
                                    
                                    //Send the proper header information along with the request
                                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                    
                                    http.onreadystatechange = function() {//Call a function when the state changes.
                                        if(http.readyState == 4 && http.status == 200) {
                                           location.reload(true);
                                        } else { alert("Error");}
                                    }
                                    http.send(params);
                                 
                                 
                                
                            txt = "You pressed OK!";
                         } else {
                             
                             var http = new XMLHttpRequest();
                                    var url = "activate.php";
                                    var params = "act=0&form="+$(td).text();
                                    http.open("POST", url, true);
                                    
                                    //Send the proper header information along with the request
                                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                    
                                    http.onreadystatechange = function() {//Call a function when the state changes.
                                        if(http.readyState == 4 && http.status == 200) {
                                           location.reload(true);
                                        }
                                    }
                                    http.send(params);
                             
                             
                             
                             txt = "You pressed Cancel!";
                             }
            }
            
        });
    });
    
    function f1(objButton){  
    alert(objButton.value);
}
    
});