<?php

declare(strict_types=1);

namespace App\Domain\Teacher\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    /**
     * The model is linked to this table
     *
     * @var string
     */
    protected $table = 'teacher';

    /**
     * Fillable fields of the model
     *
     * @var string[]
     */
    protected $fillable = ['firstname', 'lastname', 'patronymic'];
}
