<?php

// how often should we check for new versions of Piwigo on piwigo.org? In
// seconds. The check is made only if there are visits on Piwigo.
// 0 to disable.
$conf['update_notify_check_period'] = 0;

// Use HTTP authentication
// +-----------------------------------------------------------------------+
// |                            authentication                             |
// +-----------------------------------------------------------------------+

// apache_authentication : use Apache authentication as reference instead of
// users table ?
$conf['apache_authentication'] = false;

// If you decide to use external authentication
// change conf below by $conf['external_authentification'] = true;
$conf['external_authentification'] = true;

// the local data directory is used to store data such as compiled templates,
// plugin variables, combined css/javascript or resized images. Beware of
// mandatory trailing slash.
$conf['data_location'] = '_data/';

// where should the API/UploadForm add photos? This path must be relative to
// the Piwigo installation directory (but can be outside, as long as it's
// reachable from your webserver).
$conf['upload_dir'] = './upload';

?>
