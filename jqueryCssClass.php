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
                $("h1, h2, p").toggleClass("blue");
                $("div").toggleClass("important");
                $("p").css("background-color", "yellow");
           })
        });
    </script>

    <style>
        .important {
            font-weight: bold;
            font-size: xx-large;
            color:red ;
        }

        .blue {
            color: blue;
        }
    </style>

</head>

<body>
    <h1>Heading 1</h1>
    <h2>Heading 2</h2>

    <p>This is a paragraph.</p>
    <p>This is another paragraph.</p>

    <div>Alexis Mac Allister 10</div><br>

    <button>Add classes to elements</button>

    <p style="background-color:#ff0000">This is a paragraph.</p>
    <p style="background-color:#00ff00">This is a paragraph.</p>
    <p style="background-color:#0000ff">This is a paragraph.</p>

</body>
</html>