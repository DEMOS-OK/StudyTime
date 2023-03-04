<?php

declare(strict_types=1);

namespace App\Domain\Lesson\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    /**
     * The model is linked to this table
     *
     * @var string
     */
    protected $table = 'lesson';

    /**
     * Fillable fields of the model
     *
     * @var string[]
     */
    protected $fillable = ['subject_id', 'group_id', 'datetime', 'auditorium_id', 'teacher_id'];
}
