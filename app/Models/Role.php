<?php
/**
 * Created by PhpStorm.
 * User: h4ck3r01
 * Date: 22/06/2018
 * Time: 12:56
 */

namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{

    protected $fillable = [
        'name', 'display_name', 'description',
    ];

}