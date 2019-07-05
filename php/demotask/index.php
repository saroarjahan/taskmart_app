<?php
$sessionId = "NA";
$userId = "NA";
$taskId = "-1";
$invited = "0";

if (isset($_GET['invited'])) {
    $invited = "0";
}

if (isset($_GET['session_id'])) {
    $sessionId = $_GET['session_id'];
} else {
    $sessionId = uniqid();
}

if (isset($_GET['user_id'])) {
    $userId = $_GET['user_id'];
}

if (isset($_GET['task_id'])) {
    $taskId = $_GET['task_id'];
}

if (isset($_GET['team_name'])) {
    $teamName = $_GET['team_name'];
}

include ("../Db.php");
$db = new Db();



?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />

        <title>Example Task</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Custom CSS -->
        <style>


        </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>

    <body>
        <!-- Page Content -->
        <div class="container">
            <div class="row mt-4">
                <div class="col-12 mb-4 text-center">
                    <h3>Demo Task for Saroar's Mighty Platform</h3>
                    <p>Just clicking the button will send one instance of this task to the database...</p>
                </div>

                
                <div class="col-sm-12 text-center mt-4">
                    <button id="submitData" class="btn btn-success btn-lg">Submit one!</button>
                </div>
                
 
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </body>

    </html>


    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script>
        var sessionId = "<?php echo $sessionId;?>";        
        var userId = "<?php echo $userId;?>";
        var taskId = "<?php echo $taskId;?>";
        //var invited = "<?php echo $invited;?>";
        
        var S1 = "NA";
        var S2 = "NA";
        var S3 = "NA";
        var S4 = "NA";            

        
        $("#submitData").on('click', function(e) {
            //console.log(surveysJSON());
            startSubmit();
            var callURL = "../putprogress.php";
            $.post(callURL, {
                session_id: sessionId,
                user_id: userId,
                task_id: taskId,
                S1: S1.toString(),
                S2: S2.toString(),
                S3: S3.toString(),
                S4: S4.toString()
            }).done(function(data) {
                alert(data);
                stopSubmit();
            });
        });


        
        function startSubmit() {
            $('#submitData').text("Please wait...");
            $('#submitData').prop('disabled', true);

        }

        function stopSubmit() {
            $('#submitData').prop('disabled', false);
            $('#submitData').text("Submit one!");
        }



        
    </script>
