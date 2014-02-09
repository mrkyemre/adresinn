


<script type="text/javascript">
    $(document).ready(function(){

        $('#ilan').click(function(){

            $.ajax({
                url:'/project/Profile/getAdverts',
                type:"GET",

                success: function(data) {
                    $('#useracc-content').html(data);
                }
            });

        })

    })

    $(document).ready(function(){

        $('#user-acc').click(function(){

            $.ajax({
                url:'/project/Profile/userAccount',
                type:"GET",

                success: function(data) {
                    $('#useracc-content').html(data);
                }
            });

        })

    })

    $(document).ready(function(){

        $('#ilanekle').click(function(){

            $.ajax({
                url:'/project/Propertys/add',
                type:"GET",

                success: function(data) {
                    $('#useracc-content').html(data);
                }
            });

        })

    })


</script>
