<?php
    // Session
    session_start();
?>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <head>
        <title>W3-A1 - Calculate Electricity Bill</title>
    </head>

    <body>
        <center>
            <div id="page-wrap" >
                <h1>W3-A1 - Calculate Electricity Bill</h1>

                <form action="calculateBusiness.php" method="post" id="quiz-form">
                    <div class="d-flex justify-content-center">
                        <input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
                    </div>
                    
                    <div class="d-flex justify-content-center btn-lg">
                        <button type="submit" name="unit-submit" id="unit-submit" class="btn btn-primary">Calculate</button>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                        if($_SESSION["result_str"] != null){
                            echo "<div class='alert alert-success' role='alert'>";
                            echo '<br />' . $_SESSION["result_str"];
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
        </center>
    </body>
</html>