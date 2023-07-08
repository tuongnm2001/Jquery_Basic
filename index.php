<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery Basic</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<style type="text/css">
    .box{
        border:1px solid #000 ;
        padding :10px;
        background-color:bisque;
        width: 30%;
        height:auto ;
    }
</style>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").hide();
        });
        
        $(".hideynwa").click(function(){
            $("a").hide();
        })
        
        $(".showynwa").click(function(){
            $("a").show();
        })

    });
</script>

    <body>
        <h2>This is a heading</h2>

        <p>This is a paragraph.</p>
        <p>This is another paragraph.</p>

        <a>You'll Nerver Walk Alone </a>

        <button class="hideynwa">Hide YNWA</button>
        <button class="showynwa">Show YNWA</button>

        <button>Click me to hide paragraphs</button>
    </body>
</html>