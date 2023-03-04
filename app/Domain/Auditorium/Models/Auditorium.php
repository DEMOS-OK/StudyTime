<?php

namespace App\Domain\Auditorium\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditorium extends Model
{
    use HasFactory;

    /**
     * The model is linked to this table
     *
     * @var string
     */
    protected $table = 'auditorium';

    /**
     * Fillable fields of the model
     *
     * @var string[]
     */
    protected $fillable = ['corpus', 'office'];
}
