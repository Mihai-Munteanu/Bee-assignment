<?php

require_once "Router.php";

route('/', function () {
    require('view/index.view.php');
});

route('/fight', function () {
    require('view/fight.php');

});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);
