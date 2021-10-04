<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('/landingpage/style.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arvo&display=swap">
</head>

<body>
    <header>
        <!-- navigasi -->
        <nav class="nav" id="navbar">
            <div class="logo">
                <a href="#">MakSeBa</a>
            </div>
            <div class="navbar">
                <a href="{{route ('cuisines.index')}}" class="Home">Home</a>
            </div>
        </nav>
        <!-- jumbotron -->
        <img src="{{asset ('/landingpage/landingpage.jpg')}}" alt="jumbotron">
        <div class="jumbotron">
            <h2>Resep Masakan Sejuta Rasa</h2>
        </div>
    </header>
</body>

</html>