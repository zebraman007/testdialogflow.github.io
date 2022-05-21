<?php
print_r($_POST);
file_put_contents("post.log", print_r($_POST, true));

?>