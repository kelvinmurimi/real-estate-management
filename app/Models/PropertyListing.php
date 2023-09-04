<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'propertytype_id',
        'user_id',
        'amenities_id',
        'facility_id',
        'featuredimage',
        'multipleimages',
        'lowestprice',
        'maxprice',
        'bedrooms',
        'bathrooms',
        'garage',
        'garagesize',
        'address',
        'city',
        'state',
        'location',
        'postalcode',
        'size',
        'description',
        'content'


    ];
}