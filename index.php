<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>php-badwords</title>
</head>
<body>
    <div class="wrapper">
        <div class="container mt-4">
            <form action="files.php" method="POST">
                <div class="input-group">
                    <label for="text1" class="form-label">Paragrafo</label>
                    <input type="text" id="text1" placeholder="inserisci testo" name="textValue" class="form-control">
                </div>
                <div class="input-group">
                    <label for="text2" class="form-label">Parola censurare</label>
                    <input type="text" id="text2" placeholder="inserisci il parola" name="wordValue" class="form-control">
                </div>
                <button type="submit" class=" btn btn-outline-info">invia</button>
            </form>

        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>