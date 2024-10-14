<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('sortable');
    }


    /*
        $orderlist = explode(',', $_POST['order']);
        foreach ($orderlist as $k=>$order) {
          echo 'Id for position ' . $k . ' = ' . $order . '<br>';
        }
    */
}
