<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dad Jokes are us!</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Tilt+Warp&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">    

</head>
<body>

    <div class="container">        
        <button id="tellMeADadJoke--btn">Tell me a Dad joke</button>
        <div class="dad__joke--container">
            <div id="dad__joke--setup"> 
                <div class="dad__joke--img">
                    <img src="http://via.placeholder.com/640x360" alt="#">
                </div>            
                <div class="dad__joke--setup">
                    <p>"Why do Java programmers wear glasses?"</p>
                </div>
                <button id="iDontKnow--btn">I don't Know!</button>
            </div>    
            <div id="dad__joke--punchline">
                <p>"Because they don't C#"</p>
            </div>
            <button id="reset--btn">Reset Joke!</button>
        </div>  
    </div>

    <script src="app.js"></script>

</body>
</html>