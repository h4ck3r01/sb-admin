<?php
/**
 * Created by PhpStorm.
 * User: h4ck3r01
 * Date: 22/06/2018
 * Time: 12:57
 */

namespace App;


use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{

    protected $fillable = [
        'name', 'display_name', 'description',
    ];

}