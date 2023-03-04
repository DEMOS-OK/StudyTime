<?php

declare(strict_types=1);

namespace App\Domain\Specialization\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;

    /**
     * The model is linked to this table
     *
     * @var string
     */
    protected $table = 'specialization';

    /**
     * Fillable fields of the model
     *
     * @var string[]
     */
    protected $fillable = ['title'];
}
