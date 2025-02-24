<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TaxCategory extends Model
{
    //

    function childs(): HasMany
    {
        return $this->hasMany(TaxCategory::class, 'parent_id');
    }

    function taxObjects(): HasMany
    {
        return $this->hasMany(TaxObjectCode::class, 'tax_category_id');
    }
}
