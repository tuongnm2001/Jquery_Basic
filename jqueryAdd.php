<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
           $(".addItem").click(function(){
                $("ol").append("<li>Item</li>")
           })
        });
    </script>
</head>

    <body>
        <button class="addItem">Add Item</button>

        <ol>
            <li>List Item1</li>
            <li>List Item2</li>
            <li>List Item3</li>
        </ol>

    </body>
</html>