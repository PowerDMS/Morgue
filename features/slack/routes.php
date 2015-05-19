<?php
/**
 * Routes for slack
 */
$app->get('/slack', function () use ($app) {

    $content = "slack/views/slack";
    $page_title = "slack";
    $show_sidebar = false;

    include "views/page.php";
});
