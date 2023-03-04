<?php

declare(strict_types=1);

namespace App\Domain\Teacher\Models;

use Database\Factories\Domain\Teacher\Models\TeacherFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Domain\Teacher\Models\Teacher
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $patronymic
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static TeacherFactory factory($count = null, $state = [])
 * @method static Builder|Teacher newModelQuery()
 * @method static Builder|Teacher newQuery()
 * @method static Builder|Teacher query()
 * @method static Builder|Teacher whereCreatedAt($value)
 * @method static Builder|Teacher whereFirstname($value)
 * @method static Builder|Teacher whereId($value)
 * @method static Builder|Teacher whereLastname($value)
 * @method static Builder|Teacher wherePatronymic($value)
 * @method static Builder|Teacher whereUpdatedAt($value)
 * @mixin Eloquent
 */
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
