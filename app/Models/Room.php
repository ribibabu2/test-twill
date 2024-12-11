<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use A17\Twill\Models\Model;

class Room extends Model implements Sortable
{
    use HasTranslation, HasSlug, HasMedias, HasFiles, HasRevisions, HasPosition, HasFactory;

    protected $fillable = [
        'name',           // Name of the room
        'property_id',    // Foreign key to the Property model (if a room belongs to a property)
        'description',    // Room's description
        'slug',           // If you're using slugs for the room's URL
        'published',      // If room is published or not
        'created_at',     // Timestamps (if needed)
        'updated_at',     // Timestamps (if needed)
        // Add any additional fields for the Room model
    ];
    
    public $translatedAttributes = [
        'title',
        'description',
    ];
    
    public $slugAttributes = [
        'title',
    ];

    public function property()
{
    return $this->belongsTo(Property::class);
}

    
}
