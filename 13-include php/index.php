<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Include php</title>
</head>
<body>
    <?php 
    $title = "Mon premier Poste";
    $author = "thomas";
    $wordcount = 400;
    include "article-header.php";

    include "useful-tools.php";
     ?>
</body>
</html>