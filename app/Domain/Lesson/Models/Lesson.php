<?php

declare(strict_types=1);

namespace App\Domain\Lesson\Models;

use Database\Factories\Domain\Lesson\Models\LessonFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Domain\Lesson\Models\Lesson
 *
 * @property int $id
 * @property int $subject_id
 * @property int $group_id
 * @property int $teacher_id
 * @property int $auditorium_id
 * @property string $datetime
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static LessonFactory factory($count = null, $state = [])
 * @method static Builder|Lesson newModelQuery()
 * @method static Builder|Lesson newQuery()
 * @method static Builder|Lesson query()
 * @method static Builder|Lesson whereAuditoriumId($value)
 * @method static Builder|Lesson whereCreatedAt($value)
 * @method static Builder|Lesson whereDatetime($value)
 * @method static Builder|Lesson whereGroupId($value)
 * @method static Builder|Lesson whereId($value)
 * @method static Builder|Lesson whereSubjectId($value)
 * @method static Builder|Lesson whereTeacherId($value)
 * @method static Builder|Lesson whereUpdatedAt($value)
 * @mixin Eloquent
 */
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
