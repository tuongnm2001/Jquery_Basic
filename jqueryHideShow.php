<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
           $(".hide").click(function(){
                $("h1").hide();
           })

           $(".show").click(function(){
                $("h1").show();
           })
        });
    </script>
</head>


<body>
    <h1>You'll Nerver Walk Alone </h1>
    <button class="show">Show</button>
    <button class="hide">Hide</button>
</body>
</html>