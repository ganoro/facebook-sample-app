<?php
/* The script post_stage.php allow users to "clean up" after a new version of the application
 * is activated, for example by removing a "Down for Maintenance" message
 * set in Pre-activate.
 */  
// get application location
$appLocation = getenv('ZS_APPLICATION_BASE_DIR');
file_put_contents($appLocation . '/config/app.ini', 'appid=' . getenv('ZS_APPID'));

