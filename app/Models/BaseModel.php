<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    //
	protected $guarded=['id'];
	protected $dateFormat='Y-m-d H:i:s';

}