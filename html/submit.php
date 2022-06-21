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
            include("header.php")
        ?>
        <form action="POST">
                <label for="name">Name</label><br>
                <input type="text" placeholder="Name"><br>
                <div class="line"></div>
                <label for="categ">Category</label><br>
                <select name="categ">
                    <option value="dft"></option>
                    <option value="anm">Anime</option>
                    <option value="bok">Books</option>
                    <option value="flm">Films</option>
                    <option value="gms">Games</option>
                    <option value="mng">Manga</option>
                    <option value="ser">Series</option>
                </select>
                <div class="line"></div>
                <label for="genre">Genre</label><br>
                <input type="text" placeholder="Genre">
                <div class="line"></div>
                <label for="description">Description</label><br>
                <textarea name="description" id="desc" placeholder="Description" rows="3    "></textarea>
                <div class="line"></div>
                <label for="fwl">Fandom/Wiki link</label><br>
                <input type="text" placeholder="Fandom/Wiki link">
                <div class="line"></div>
        </form>
    </body>
</html>
