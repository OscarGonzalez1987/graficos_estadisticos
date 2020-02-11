
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".btn1").click(function () {
                    $(".box_1").animate({width: "200px"});
                });
                $(".btn2").click(function () {
                    $(".box_2").animate({width: "100px"});
                });
            });
        </script>
    </head>
    <body>
        <h3 style = "text-align:center;">Parallax Demo</h3>
        
        <div style="float:left; padding-right:30px; padding-bottom:40px; ">
        <?php
        include "graficos/barras.php";
        ?>
        </div>        
        <p>Parallax scrolling is a web site trend where the background content 
            is moved at a different speed than the foreground content while 
            scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis 
            nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit 
            pellentesque a, magna turpis est sapien duis blandit dignissim. 
            Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum 
            consequat morbi, curabitur aliquam pede, nullam vitae eu placerat 
            eget et vehicula.</p>

        <p>Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, 
            sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque 
            risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend,
            aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum
            sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas
            ante augue etiam maecenas, porta porttitor placerat leo.</p>
        
        <p>Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, 
            sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque 
            risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend,
            aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum
            sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas
            ante augue etiam maecenas, porta porttitor placerat leo.</p>
        <br>
    </body>
</html>