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
                $("#p1").css("color", "red").slideUp(2000).slideDown(2000);
            });
        });
    </script>
</head>

    <body>
        <p id="p1">jQuery is fun!!</p>
        <button>Click me</button>

    </body>
</html>