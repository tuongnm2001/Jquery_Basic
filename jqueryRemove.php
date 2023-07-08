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
                $("#div1").remove();
           })
        });
    </script>
</head>

    <body>
        <button>Remove</button>

        <div id="div1" style="height:100px;width:300px;border:1px solid black;background-color:yellow; margin-top:20px ;">
            This is some text in the div.
            <p>This is a paragraph in the div.</p>
            <p>This is another paragraph in the div.</p>
        </div>

    </body>
</html>