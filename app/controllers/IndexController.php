<?php
/**
 * Created by PhpStorm.
 * User: TienDinh
 * Date: 9/1/2016
 * Time: 10:36 AM
 */

namespace MyApp\Controllers;

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    function indexAction() {
        echo 1;
//        $this->view->disable();
    }
}