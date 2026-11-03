<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fruits = array ("apple", "banana", "orange");
    echo "<ol>";
    foreach ($fruits as $fruit) {
        echo "<li>" . "$fruit" . "</li>";
    }
    echo "</ol>";
    ?>
    <form action="kkk" method="get" class="form-example">
        <div class="form-example">
            <label for="name">Ievadi vārdu: </label>
            <input type="text" name="name" id="name" required />
        </div>
        <div class="form-example">
            <label for="email">Ievadi epastu: </label>
            <input type="email" name="email" id="email" required />
        </div>

        <label for="story">Kapēc vēlies sekot?:</label>

        <textarea id="story" name="story" rows="5" cols="30">
        Es sekoju jo,
        </textarea>
        <div class="form-example">
            <input type="submit" value="Seko!" />
        </div>
    </form>
</body>
</html>