<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("#div1").fadeToggle();
                $("#div2").fadeToggle("slow");
                $("#div3").fadeToggle(3000);
            });
        });
    </script>
</head>


    <body>
        <button>Click to fade in boxes</button><br><br>

        <div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
        <div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
        <div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>
    </body>
</html>