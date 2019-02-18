
<html>
<head>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#startBut").click(function () {
                $.ajax({
                    url: "Include/startGame.php",
                    success: function (result) {
                        $("#result").html(result);
                    }
                });
            });
        });
    </script>
</head>
<body>
<div class="container">
    <div class="text-center mt-5 pb-3">
        <h1 class="text-center pb-3">Paper-scissor-rock</h1>
        <button id="startBut" type="button" class="btn btn-primary">Start</button>
    </div>
    <div class="div-centered" >
        <p id="result"></p>
    </div>
</div>
</body>
</html>

