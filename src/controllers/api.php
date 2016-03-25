<?php
namespace App\Controllers;


class Api extends BaseApi
{
    public function index() {
        $this->output(ALL_RIGHT, 'ok');
    }
}
