<?php

require_once(dirname(__FILE__) . '/common/header.php');

$header = new Header();

?>

<html>

<head>
    <?php get_header(); ?>
</head>

<body>
    <div class="wrapper">
        <?php echo $header->generate(); ?>
    </div>
</body>

</html>
