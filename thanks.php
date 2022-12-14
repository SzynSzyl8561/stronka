<?php
        $json = file_get_contents("cfg/config.json");
        $decoded = json_decode($json, JSON_OBJECT_AS_ARRAY);

        $lang = $decoded["lang"];
        $lang_file = file_get_contents("cfg/langs/".$lang);
        $declang = json_decode($lang_file, JSON_OBJECT_AS_ARRAY);
?>

<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $decoded["server_name"]?></title>
    <link rel="stylesheet" href="cfg/colors.css">
    <link rel="stylesheet" href="dashboard/nl.css">
    <title><?= $decoded["server_name"]." | ".$declang["thank_you"]?></title>
    <link rel="shortcut icon" <?= 'href="'.$decoded['server_icon'].'"'?> type="image/x-icon">
</head>
<body>
    <div class="box">
        <h1><?= $declang['thank_you']?></h1>
        <p><?= $declang['thank_p']?></p>
        <a href='home'><?= $declang['thank_a']?></a>
    </div>
</body>
</html>