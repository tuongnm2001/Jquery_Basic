<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery Basic</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.structure.css">
    <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.theme.css">
</head>

<style type="text/css">
    .box{
        border:1px solid #000 ;
        padding :10px;
        background-color:bisque;
        width: 30%;
        height:auto ;
    }
    
    .last_p{
        color:red;
    }

    .last_pa{
        color:blue;
    }

    img{
        height:140px;
        width:280px;
    }
</style>

    <body>

        <div id="left">
            <div id="panels">
                <div>Lorem 1 ipsum dolor sit amet consectetur adipisicing elit. </div>
                <div>Lorem 1 ipsum dolor sit amet consectetur adipisicing elit. </div>
                <div>Lorem 1 ipsum dolor sit amet consectetur adipisicing elit. </div>
            </div>
        </div>

        <div id="box0" class="box" >
            <p>
                <b>Lorem 1</b> ipsum dolor sit amet consectetur adipisicing elit. 
                Rerum, minima deserunt? Dicta natus mollitia veniam perspiciatis 
                inventore ea possimus dolor rem culpa obcaecati architecto, eaque 
                delectus cupiditate? Rem, reiciendis vero.
            </p>

            <p class="class2">
                <b>Lorem 2</b> ipsum dolor sit amet consectetur adipisicing elit. 
                Rerum, minima deserunt? Dicta natus mollitia veniam perspiciatis 
                inventore ea possimus dolor rem culpa obcaecati architecto, eaque 
                delectus cupiditate? Rem, reiciendis vero.
            </p>

            <img src="img/vn.jpg" alt="" styte="height:140px ; width:280px"/>

            <p>Chọn ngày <input type="text" id="datepicker"/></p>
        </div>
        <hr/>
        <button class="clickClass" id="idClick">Click me</button>
    </body>

    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>

    <script>
        $(document).ready(function(){
           $('#datepicker').datepicker({
                dateFormat: "dd/mm/yy",
                minDate: 0
           });
        });
    </script>
</html>
