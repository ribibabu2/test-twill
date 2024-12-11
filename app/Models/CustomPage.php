<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomPage extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasPosition, HasFactory;

    public $slugAttributes = [
        'title',
    ];
    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'subtitle',
        'post_id',
        'images',
    ];

}
