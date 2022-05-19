<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phone;
use App\Models\Contact;

class Phone extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contact() {
        return $this->belongsToMany(Contact::class);
    }

    public function scopeFilter($query, $filters) {
        if ($filters['search'] ?? false) {
            $query
                ->where('phonenumber', 'like', '%' . request('search') . '%')
                ->orWhere('label', 'like', '%' . request('search') . '%');
        }
    }
}


