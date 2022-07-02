<!DOCTYPE html>
<html>
    <head>
        <base href="/lajmi_new/">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/submit.css">
        <link rel="stylesheet" href="css/header.css">
        <title>Submit new entry</title>
    </head>
    <body>
        <?php
            include("header.php");
        ?>

        <form action="html/db_conn.php" method="POST">
                <label for="nam">Name*</label><br>
                <input type="text" name="nam" placeholder="Name" required required><br>
                <div class="line"></div>

                <label for="cat">Category*</label><br>
                <select name="cat" required>
                    <option value="anime">Anime</option>
                    <option value="books">Books</option>
                    <option value="films">Films</option>
                    <option value="games">Games</option>
                    <option value="manga">Manga</option>
                    <option value="series">Series</option>
                </select>
                <div class="line"></div>

                <label for="dat">Release / Publish Date*</label><br>
                <input type="date" name="dat" placeholder="yyyy-mm-dd" required><br>
                <div class="line"></div>

                <label for="gen">Genre*</label><br>
                <input type="text" name="gen" placeholder="Genre" required>
                <div class="line"></div>
                
                <label for="des">Description*</label><br>
                <textarea name="des" id="desc" placeholder="Description" rows="3" required></textarea>
                <div class="line"></div>

                <label for="sit">Official website / Source Code repo*</label><br>
                <input type="text" name="sit" placeholder="Official website / Source Code repo" required>
                <div class="line"></div>

                <label for="fwl">Fandom/Wiki link</label><br>
                <input type="text" name="fwl" placeholder="Fandom/Wiki link">
                <div class="line"></div>
                
                <input  class="btns" type="submit" name="Submit"> <input class="btns" type="reset">
        </form>
    </body>
</html>
