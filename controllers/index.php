<?php
$names =  App::get('database')->selectAll('table_name');
require 'views/index.view.php';
