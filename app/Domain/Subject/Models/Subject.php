<?php

declare(strict_types=1);

namespace App\Domain\Subject\Models;

use Database\Factories\Domain\Subject\Models\SubjectFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Domain\Subject\Models\Subject
 *
 * @property int $id
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static SubjectFactory factory($count = null, $state = [])
 * @method static Builder|Subject newModelQuery()
 * @method static Builder|Subject newQuery()
 * @method static Builder|Subject query()
 * @method static Builder|Subject whereCreatedAt($value)
 * @method static Builder|Subject whereId($value)
 * @method static Builder|Subject whereTitle($value)
 * @method static Builder|Subject whereUpdatedAt($value)
 * @mixin Eloquent
 */
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
