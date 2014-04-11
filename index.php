<?php
    include 'codeComment.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Test zamiany html na text</title>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="codeComment.js"></script>
    </head>
    <body>
        <form action="" method="POST">
            Put your comment with html or another code between &lt;code&gt; tags.
            <textarea id="t" name="a"></textarea>
            <input type="submit" name="g" value="Click"/>
        </form>
        <hr>
        <?php echo $text ?>
    </body>
</html>