


$(document).ready(function(){

    $('#ilan').click(function(){

        $.ajax({
            url:'/project/Profile/getAdverts',
            type:"GET",

            success: function(data) {
                $('#useracc-content').html(data);
            }
        });

    });

});