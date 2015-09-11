<?php
require '../vendor/autoload.php';

# include dependencies to override foundHandler
include '../app/dependencies.php';

$app = new \Slim\App($container);

# I group my larger project routes into folders
# here it handy to namespace the route
include '../app/routes/posts.php';

$app->run();