<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Redberry\PageBuilderPlugin\Traits\HasPageBuilder;

class Page extends Model
{
    protected $guarded = [];

    use HasPageBuilder;
}
