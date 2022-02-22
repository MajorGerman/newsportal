<!DOCTYPE html>

<html>
    <head>
        <title> NEWSPORTAL </title>
        <link rel = "stylesheet" href = "">
        <link ref = "stylesheet" type = "text/css" href = "style.css">
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Noto+Serif">
        <meta charset="utf-8">
    </head>

    <body>

        <nav class = "one">
            <ul class = "topmenu">
                <li> 
                    <a href = "#"> Categories <i class = "fa fa-angle-down"></i> </a> 
                    <ul class = "submenu">
                        <?php
                            Controller::AllCategory();
                        ?>
                    </ul>
                </li>
                <li> <a href = "testError">Info</a></li>
                <li> <a href = "./">Main</a></li>
            </ul>
        </nav>

        <section>
            <div class = 'divBox'>
                <?php
                if (isset($content)) {
                    echo $content;
                } else {
                    echo '<h1>Content is gone!</h1>';
                }
                ?>
            </div>
        </section>

        <hr>
        <p style = "display: block; text-align: center;"> SPTVR19 (2022) &copy</p>
    
    </body>
</html>