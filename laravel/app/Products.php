<?php namespace App;
use Illuminate\Database\Eloquent\Model;


/**
 * Created by PhpStorm.
 * User: mithun.alinkil
 * Date: 22-11-2015
 * Time: 15:53
 */
    class Products extends Model{

        protected $fillable=[
            'product_name',
            'product_price',
            'product_qty'
        ];

    }

