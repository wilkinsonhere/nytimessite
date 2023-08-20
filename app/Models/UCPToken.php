<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UCPToken extends Model
{
    use HasFactory;

    public $timestamps = [];

    protected $table = 'ucp_auth_tokens';
    protected $hidden = [];
    protected $fillable = [];
    protected $guarded = [];
}
