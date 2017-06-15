$('.checkbox').click(function(){
   // console.log($(this).attr('class'));
    $(this).toggleClass('is-checked');
    var recipe_id = $(this).attr("id");
    var array = recipe_id.split("%");
    var id = array[0];
    var login = array[1];
    var check_flag=$(this).attr('class')
    
    $.ajax({
        type : "POST",
        url : "scripts/favorite.script.php",
        data : {favorite_id: id,user_login: login,check_flag: check_flag},
        success : function(){
            //document.write('success');
          
        }
    });
    
}); 
