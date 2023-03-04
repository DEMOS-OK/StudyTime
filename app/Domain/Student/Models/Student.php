<?php

declare(strict_types=1);

namespace App\Domain\Student\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The model is linked to this table
     *
     * @var string
     */
    protected $table = 'student';

    /**
     * Fillable fields of the model
     *
     * @var string[]
     */
    protected $fillable = ['firstname', 'lastname', 'patronymic', 'group_id'];
}
