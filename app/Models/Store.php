<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'city', 'state', 'zip', 'phone'
    ];

    /**
     * Get the store's full address.
     *
     * @param  string  $value
     * @return string
     */
    public function getFullAddressAttribute()
    {
        return $this->name . "\n" . $this->address . "\n" . $this->city . ', ' . $this->state . ' ' . $this->zip;
    }

    /**
     * Get the store's title (all the store's info).
     *
     * @param  string  $value
     * @return string
     */
    public function getTitleAttribute()
    {
        return $this->getFullAddressAttribute() . "\n" . $this->phone;
    }
}
