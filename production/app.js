$(document).ready(function(){
    $('#datatable tr').click(function(e){
        var cell = $(e.target).get(0);
        var tr = $(this);
        $('#out').empty();
        $('td', tr).each(function(i, td){
            if(i===2){
                alert($(td).text());
            }
            
        });
    });
});