<?php
    // Session
    session_start();
?>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <head>
        <title>W3-A2 - Write a text a file</title>
    </head>

    <body>
        <center>
            <div id="page-wrap" >
                <h1>Write a text a file</h1>

                <form action="fileController.php" method="post" id="quiz-form">
                    <div class="d-flex justify-content-center">
                        <textarea name="textInput" id="textInput" rows="5" cols="50" maxlength="250"  onkeyup="countChar(this)"></textarea>
                    </div>
                    
                    <div class="d-flex justify-content-center btn-lg">
                        <button type="submit" name="write-submit" id="write-submit" class="btn btn-primary">Write File</button>
                    </div>
                </form>
                <div id="charNum"></div>
            </div>
        </center>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.5.js"></script>
    
    <script src="./source/functions.js"></script>

</html>