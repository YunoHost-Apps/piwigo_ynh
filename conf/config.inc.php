<?php

// Use HTTP authentication
$conf['apache_authentication'] = false;

// Use external authentication
$conf['external_authentification'] = true;

// how often should we check for new versions of Piwigo on piwigo.org? In
// seconds. The check is made only if there are visits on Piwigo.
// 0 to disable.
$conf['update_notify_check_period'] = 0;

// the local data directory is used to store data such as compiled templates,
// plugin variables, combined css/javascript or resized images. Beware of
// mandatory trailing slash.
$conf['data_location'] = '__DATA_DIR__/_data/';

// where should the API/UploadForm add photos? This path must be relative to
// the Piwigo installation directory (but can be outside, as long as it's
// reachable from your webserver).
$conf['upload_dir'] = '__DATA_DIR__/upload';

?>
