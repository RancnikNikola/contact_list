<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;
use App\Models\Phone;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function phones() {

        return $this->belongsToMany(Phone::class);
    }

    public function scopeFilter($query, $filters) {
        if ($filters['search'] ?? false) {
            $query
                ->where('firstname', 'like', '%' . request('search') . '%')
                ->orWhere('lastname', 'like', '%' . request('search') . '%')
                ->orWhere('email', 'like', '%' . request('search') . '%');
        }
    }

}
