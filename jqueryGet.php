<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                alert("Text: " + $("#test").text());
            });
            $("#btn2").click(function(){
                alert("HTML: " + $("#test").html());
            });
        });

        $(document).ready(function(){
            $(".show-value").click(function(){
                alert("Value: " + $("#testValue").val());
            });
        });
    </script>
</head>

    <body>
        <p id="test">This is some <b>bold</b> text in a paragraph.</p>

        <button id="btn1">Show Text</button>

        <button id="btn2">Show HTML</button>

        <p>Name: <input type="text" id="testValue" value="Mickey Mouse"></p>

        <button class="show-value">Show Value</button>

    </body>
</html>