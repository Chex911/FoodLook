$('.checkbox').click(function(){
    $(this).toggleClass('is-checked');
    var recipe_id = $(this).attr("id");
    //var object = del_id.split("%");
//    var id = object[0];
//    var name = object[1];
    $.ajax({
        type : "POST",
        url : "scripts/favorite.script.php",
        data : {favorite_id: recipe_id},
        success : function(){
            //document.write('success');
        }
    });
}); 
