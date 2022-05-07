<?php

require 'core/router.php';
require 'core/Request.php';
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';
$config = require 'config.php';

return new QueryBuilder (Connection::make($config['database']));