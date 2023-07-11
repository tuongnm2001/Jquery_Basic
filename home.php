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
    
    .last_p{
        color:red;
    }

    .last_pa{
        color:blue;
    }

    img{
        height:140px;
        width:280px;
    }
</style>

    <body>

        <div id="box0" class="box" >
            <p>
                <b>Lorem 1</b> ipsum dolor sit amet consectetur adipisicing elit. 
                Rerum, minima deserunt? Dicta natus mollitia veniam perspiciatis 
                inventore ea possimus dolor rem culpa obcaecati architecto, eaque 
                delectus cupiditate? Rem, reiciendis vero.
            </p>

            <p>
                <b>Lorem 2</b> ipsum dolor sit amet consectetur adipisicing elit. 
                Rerum, minima deserunt? Dicta natus mollitia veniam perspiciatis 
                inventore ea possimus dolor rem culpa obcaecati architecto, eaque 
                delectus cupiditate? Rem, reiciendis vero.
            </p class="class1">

                        <p>
                <b>Lorem 1</b> ipsum dolor sit amet consectetur adipisicing elit. 
                Rerum, minima deserunt? Dicta natus mollitia veniam perspiciatis 
                inventore ea possimus dolor rem culpa obcaecati architecto, eaque 
                delectus cupiditate? Rem, reiciendis vero.
            </p>

            <p class="class2">
                <b>Lorem 2</b> ipsum dolor sit amet consectetur adipisicing elit. 
                Rerum, minima deserunt? Dicta natus mollitia veniam perspiciatis 
                inventore ea possimus dolor rem culpa obcaecati architecto, eaque 
                delectus cupiditate? Rem, reiciendis vero.
            </p>

            <img src="img/vn.jpg" alt="" styte="height:140px ; width:280px"/>

        </div>

        <div id="box1" class="box">
            <h2>Box1</h2>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Cumque recusandae incidunt expedita laboriosam ex corrupti vero architecto alias facere! 
            Enim distinctio obcaecati minima nobis aspernatur aperiam placeat, voluptatem nulla consequatur!
        </div>

        <div id="box2" class="box">
            <h2>Box2</h2>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Cumque recusandae incidunt expedita laboriosam ex corrupti vero architecto alias facere! 
            Enim distinctio obcaecati minima nobis aspernatur aperiam placeat, voluptatem nulla consequatur!
        </div>

        <div id="box3" class="box">
            <h2>Box3</h2>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Cumque recusandae incidunt expedita laboriosam ex corrupti vero architecto alias facere! 
            Enim distinctio obcaecati minima nobis aspernatur aperiam placeat, voluptatem nulla consequatur!
            <ul>
                <li>List 1</li>
                <li>List 2</li>
                <li>List 3</li>
                <li>List 4</li>
                <li>List 5</li>
                <li>List 6</li>
                
            </ul>
        </div>

        <div id="box4" class="box">
            <ul>
                <li>List 1</li>
                <li>List 2</li>
                <li>List 3</li>
                <li>List 4</li>
                <li>List 5</li>
                <li>List 6</li>
                
            </ul>
        </div>

        <h1></h1>

        <button class="clickClass up" id="idClick">Click me Up</button>
        <button class="clickClass down" id="idClick">Click me Down</button>
    </body>

    <script>
        $(document).ready(function(){
            $('#box0').hover(
                // function(){
                //     $('div').css("background-color","aqua")
                // },

                // function(){
                //     $('div').css("background-color","pink")
                // }

                // function(){
                //     $('img').show()
                // },

                // function(){
                //     $('img').hide()
                // }

                // function(){
                //     $('.class1').show()
                // },

                // function(){
                //     $('.class2').hide()
                // }
            )

            

            $(".clickClass up").click(function(){

                $('#box0').slideUp();
                // $('#box0').slideDown();


                // $('#box4 li').each(function(){
                //     $(this).html('<li>Hi bro </li>')
                // })
                
                // $('#box0 img').mouseover(function(){
                //     $('#box0').append('<p>Hey , washup bro !</p>')
                // })
            // $('#box0 p:has(b)').replaceWith('<p>YNWA</p>')

            // $('#box0 img').attr('src', 'img/vn.jpg').css({
            //     "height":"140", "width":"280"
            // })

            //     $('#box0').before(`<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            // Cumque recusandae incidunt expedita laboriosam ex corrupti vero architecto alias facere! 
            // Enim distinctio obcaecati minima nobis aspernatur aperiam placeat, voluptatem nulla consequatur!</p>`)
               
            // $('#box0').after(`<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            // Cumque recusandae incidunt expedita laboriosam ex corrupti vero architecto alias facere! 
            // Enim distinctio obcaecati minima nobis aspernatur aperiam placeat, voluptatem nulla consequatur!</p>`)
            // $('#box0').fadeOut(5000).fadeIn(5000);
                //$('#box0').fadeOut(5000);
                //$('#box0 p:first').hide();
                //$('#box3').css('color', 'blue');
                //$('h1').text("you'll never walk alone")
                //$('#box0').css('color','green').css('border', '1px solid red').fadeOut(5000);
                // $('div p:last').toggleClass('last_p');
                // $('div p:first').toggleClass('last_pa');
            });
        });
    </script>
</html>
