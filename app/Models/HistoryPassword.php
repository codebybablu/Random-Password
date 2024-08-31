<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPassword extends Model
{
    use HasFactory;

    protected $fillable = [ 'password', 'generated_at'];
}
