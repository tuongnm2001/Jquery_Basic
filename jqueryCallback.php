<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
       $(document).ready(function(){
            $(".hide1").click(function(){
                $("p").hide("slow",function(){
                    alert('This is Anfield')
                })
            })

            $(".hide2").click(function(){
                $("p").hide(1000);
                
                alert('This is Anfield')
            })
       })
    </script>
</head>

    <body>
        <button class="hide1">Hide 1</button>
        <button class="hide2">Hide 2</button>

        <p>You'll Nerver Walk Alone</p>
    </body>
</html>