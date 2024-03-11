<?php

namespace Modules\Products\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Products\Database\factories\ProductTagFactory;

class ProductTag extends Model
{
    use HasFactory;

    protected $guarded = [];
}
