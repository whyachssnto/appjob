<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'logo',
        'slug',
        'employer_id',
        'about',
 ];

 public function employer() {
    return $this->belongsTo(User::class, 'employer_id');
 }

 public function jobs() {
    return $this->hasMany(CompanyJob::class);
 }

}
