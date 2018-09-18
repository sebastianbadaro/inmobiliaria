<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PropertyType;
use App\Client;
use App\Currency;
use App\Category;


class Property extends Model
{
    public function propertyType()
    {
      return $this->belongsTo(PropertyType::class,'property_type_id');
    }

    public function category()
    {
      return $this->belongsTo(Category::class,'category_id');
    }

    public function currency()
    {
      return $this->belongsTo(Currency::class,'currency_id');
    }
}
