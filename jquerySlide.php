<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".click").click(function(){
                $(".ynwa").slideToggle("slow");
            });
        });
    </script>
</head>

<style>
    .click, .ynwa {
        padding: 5px;
        text-align: center;
        background-color: #e5eecc;
        border: solid 1px #c3c3c3;
        cursor: pointer;
    }

    .ynwa {
        padding: 50px;
        display: none;
    }
</style>

    <body>
        <div class="click">Click</div>
        <div class="ynwa">You'll Nerver Walk Alone</div>
    </body>
</html>