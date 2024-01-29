<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Major extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeActive(Builder $query): void{
        $query->where('status', 1);
    }
}
