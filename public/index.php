<?php

require '../vendor/autoload.php';

use AYakovlev\Core\App;
use AYakovlev\Core\View;
use AYakovlev\Exception\DbException;
use AYakovlev\Exception\Forbidden;

try {
    $app = new App();
    $app->run();
} catch (DbException $e) {
    View::render("500", $e, 500);
    return;
} catch (InvalidArgumentException $e) {
    View::render('401', $e, 401);
    return;
} catch (Forbidden $e) {
    View::render("403", $e, 403);
    return;
} catch (Exception $e) {
    View::render('error', $e);
}
