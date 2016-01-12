<?php
namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: mithun.alinkil
 * Date: 01-12-2015
 * Time: 19:14
 */
class firstcontroller extends Controller
{
    public function index()
    {
        return View('product.about');
    }
}
?>