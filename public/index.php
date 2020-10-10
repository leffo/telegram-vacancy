<?php

require '../vendor/autoload.php';

use AYakovlev\Core\App;
use AYakovlev\Core\View;
use AYakovlev\Exception\DbException;
use AYakovlev\Exception\UnauthorizedException;

try {
    $app = new App();
    $app->run();
} catch (DbException $e) {
    View::render("500", $e, 500);
    return;
} catch (UnauthorizedException $e) {
    View::render('401', $e, 401);
    return;
} catch (Exception $e) {
    View::render('error', $e);
}
