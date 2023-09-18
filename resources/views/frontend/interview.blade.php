<html>
    <head>
        <title>Todo</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <style>
            body
            {
                background:#000;
            }
            .box
            {
                width: fit-content;
                margin: 7% auto;
                padding: 60px;
                border: 2px dashed #fff;
                border-radius: 10px;
            }
            .box h2
            {
                text-align: center;
                color: #FFF;
                font-size: 20PX;
            }
            .form
            {
                display: flex;
            }
            #add
            {
                margin-left: 10px;
            }
            .row
            {
                margin:0px;
            }

        </style>
    </head>
    <body>
        <div class="box">
            <h2>Todo</h2>
            <div class="form"><input type="text" class="form-control" placeholder="Todo" name="todo" id="todo" />
            <button id="add" class="btn btn-warning">Add</button>
             </div>
            <div class="data"></div>
        </div>
        <script>
// alert('hy');
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        }
    });

    $("#add").click(function(){
        var todo = $('#todo').val();
        if(todo != '')
        {
        $.ajax({
           type:'POST',
           url:"{{route('insert_data')}}",
           data:{todo:todo},
           success:function(data){
                
           }
        });
        }else
        {
            alert('Please Insert Data');
        }
    
        });

        setInterval(function()
        {
           $.ajax({
           type:'POST',
           url:"{{route('get_data')}}",
        //    data:{todo:todo},
           success:function(data){
                $('.data').html(data);
           }
        });
        }, 1000);
            // var i = 0;
            // $('#add').click(function()
            // {
            //     var todo = $('#todo').val();
            //     $('.data').append('<div class="block'+ i++ +' row"><div class="alert alert-success add col-md-9">' + todo + '</div><button id="delete" class="delete btn btn-warning col-md-3" onclick="delete_field()">Delete</button></div>');
            // });

            // function delete_field()
            // {
            //     $('.block'+ i-- +'').remove();
            // }
        </script>
    </body>
</html>