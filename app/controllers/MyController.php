<?php
/**
 * Created by PhpStorm.
 * User: elmarhepp
 * Date: 04/12/14
 * Time: 18:19
 */


class MyController extends BaseController
{

    public function index()
    {
        return View::make('index');
    }

    public function show()
    {
        return View::make('show');
    }

    public function edit()
    {
        return View::make('edit');
    }

} 