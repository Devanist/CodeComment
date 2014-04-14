<?php
    if(isset($_POST['a'])){
        $text = $_POST['a'];
        $text = str_replace("<stdlib.h", "&lt;stdlib.h", $text);
        $text = str_replace("<stdio.h", "&lt;stdio.h", $text);
        $text = str_replace("<!--" , "&lt;!--", $text);
        $text = str_replace("<url", "&lt;url", $text);
        $text = str_replace("</url", "&lt;/url", $text);
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
        $text = str_replace("<?php", "&lt;?php", $text);
        $text = str_replace("?>", "?&gt;", $text);
        $text = str_replace("<article", "&lt;article", $text);
        $text = str_replace("<aside", "&lt;aside", $text);
        $text = str_replace("<details", "&lt;details", $text);
        $text = str_replace("<figcaption", "&lt;figcaption", $text);
        $text = str_replace("<figure", "&lt;figure", $text);
        $text = str_replace("<footer", "&lt;footer", $text);
        $text = str_replace("<main", "&lt;main", $text);
        $text = str_replace("<nav", "&lt;nav", $text);
        $text = str_replace("<section", "&lt;section", $text);
        $text = str_replace("<summary", "&lt;summary", $text);
        $text = str_replace("<div", "&lt;div", $text);
        $_POST['a'] = $text;
    }
?>