<?php

declare(strict_types=1);

namespace App\Domain\Subject\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    /**
     * The model is linked to this table
     *
     * @var string
     */
    protected $table = 'subject';

    /**
     * Fillable fields of the model
     *
     * @var string[]
     */
    protected $fillable = ['title'];
}
