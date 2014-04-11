<?php
    $text = $_POST['a'];
    $text = str_replace("<!--" , "&lt;!--", $text);
    $text = str_replace("<meta", "&lt;meta", $text);
    $text = str_replace("<html", "&lt;html", $text);
    $text = str_replace("<head", "&lt;head", $text);
    $text = str_replace("<body", "&lt;body", $text);
    $text = str_replace("<title", "&lt;title", $text);
    $text = str_replace("</title", "&lt;/title", $text);
    $text = str_replace("</body", "&lt;/body", $text);
    $text = str_replace("</html", "&lt;html", $text);
    $text = str_replace("</head", "&lt;head", $text);
    $text = str_replace("<!DOCTYPE", "&lt;!DOCTYPE", $text);
    $_POST['a'] = $text;
?>