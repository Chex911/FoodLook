$('.checkbox').click(function(){
    console.log('Click count:');
//    alert("elo"+$(this).attr('class'))
    $(this).toggleClass('is-checked');
    var recipe_id = $(this).attr("id");
    var array = recipe_id.split("%");
    var id = array[0];
    var login = array[1];
    $.ajax({
        type : "POST",
        url : "scripts/favorite.script.php",
        data : {favorite_id: id,user_login: login},
        success : function(){
            //document.write('success');
          
        }
    });
}); 
