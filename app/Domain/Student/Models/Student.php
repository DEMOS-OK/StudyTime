<?php

declare(strict_types=1);

namespace App\Domain\Student\Models;

use Database\Factories\Domain\Student\Models\StudentFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Domain\Student\Models\Student
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $patronymic
 * @property int $group_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static StudentFactory factory($count = null, $state = [])
 * @method static Builder|Student newModelQuery()
 * @method static Builder|Student newQuery()
 * @method static Builder|Student query()
 * @method static Builder|Student whereCreatedAt($value)
 * @method static Builder|Student whereFirstname($value)
 * @method static Builder|Student whereGroupId($value)
 * @method static Builder|Student whereId($value)
 * @method static Builder|Student whereLastname($value)
 * @method static Builder|Student wherePatronymic($value)
 * @method static Builder|Student whereUpdatedAt($value)
 * @mixin Eloquent
 */
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
