<?php

require_once('backend.php');

$render = render( $assemblervars);

// The idea is to invoke the Render method asynchronously so we can cherry pick out the image and be done with it!

echo $render
?>




