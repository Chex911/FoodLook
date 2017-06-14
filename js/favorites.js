$('.checkbox').click(function(){
    $(this).toggleClass('is-checked');
    $.ajax({
        type : "POST",
        url : "scripts/favorite.script.php",
        data : {object_id: 2},
        success : function(){
            //document.write('success');
        }
    });
}); 
