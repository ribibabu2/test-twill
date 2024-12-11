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

class Property extends Model implements Sortable
{
    use HasTranslation, HasSlug, HasMedias, HasFiles, HasRevisions, HasPosition, HasFactory;

    protected $fillable = [
        'name',           // Name of the property
        'location_id',    // Foreign key to the Location model (if a property belongs to a location)
        'description',    // Property's description
        'price',          // Price of the property
        'slug',           // Slug for the property URL
        'published',      // Status indicating if the property is published
        'created_at',     // Timestamps (if needed)
        'updated_at',     // Timestamps (if needed)
        'position',       // If you're sorting properties (this field can be removed if not used)
        // Add any additional fields specific to the Property model
    ];
    
    public $translatedAttributes = [
        'title',
        'description',
    ];
    
    public $slugAttributes = [
        'title',
    ];

    public function location()
{
    return $this->belongsTo(Location::class);
}

public function rooms()
{
    return $this->hasMany(Room::class);
}
    
}
