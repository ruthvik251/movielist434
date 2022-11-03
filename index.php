<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Movies | Watchlist Creator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
</head>
<body>
    
   
    
    <?php if (isset($user)): ?>
        <header>
        <div class="header-contents">
            <h1>Enter movie name</h1>
            <a href="watchlist.html" class="header-link">My Watchlist</a>

        </div>
        <a class="header-link1" href="logout.php">Log out</a>
    </header>
    <main>
        <div class="main-search-field">
            <label aria-label="Search for a movie" class="hide">Search for a
                movie</label>
            <input type="text" for="submit" id="searchInput" placeholder="Search for a movie">
            <button type="submit" value="Submit" id="searchBtn">Search</button>
        </div>

        <div class="main-contents" id="moviesList">
            <div id="movielist-default-container">
                <img src="images/movie-icon.svg" alt="Search movie list to start exploring movies."
                    class="movie-icon movie-list-default-display">
                <p class="text-grey-light fs-18 bold movie-list-default-display">Start exploring</p>
            </div>
        </div>
    </main>
    <script src="index.js"></script>
</body>
    
    <?php else: ?>
        
     <div class="hea">   <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
    </div>
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    