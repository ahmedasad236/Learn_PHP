<?php

App::get('database')->insert('table_name', [
    'name' => $_POST['name']
]);

header('location: /');