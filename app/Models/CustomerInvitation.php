<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInvitation extends Model
{
    use HasFactory;

    protected $fillable = ['template_id', 'slug', 'custom_data'];

    protected $casts = [
        'custom_data' => 'array',
    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }}
