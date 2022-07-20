<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/animation.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</head>
<body >
    <div id="animation">
        <canvas id="confeti" width="300" height="300" class="active"></canvas>

        <!-- card -->
            
            <div class="card">
                <div class="card-body text-center text-success fw-bold display-4">
                    <h1 id="yayText" class="display-1 text-warning">Yay!</h1>
                    <span id="name" class="display-2 text-warning" >Chris</span> has placed a new Order.
                </div>
            </div>

            {{-- sounds --}}
            <audio id="celebration">
                <source src="assets/sounds/celebration.mp3" type="audio/mpeg">
            </audio>
    </div>

    <script src="js/animations.js"></script>
    <script>
        $("#animation").show();
        $('audio#celebration')[0].play()

        setTimeout(function() {
            $("#animation").hide();
            $('audio#celebration')[0].pause()
            $('audio#celebration')[0].currentTime = 0
        }, 5000);
    </script>
</body>
</html>