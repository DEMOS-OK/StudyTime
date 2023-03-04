<?php

declare(strict_types=1);

namespace App\Domain\Specialization\Models;

use Database\Factories\Domain\Specialization\Models\SpecializationFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Domain\Specialization\Models\Specialization
 *
 * @property int $id
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static SpecializationFactory factory($count = null, $state = [])
 * @method static Builder|Specialization newModelQuery()
 * @method static Builder|Specialization newQuery()
 * @method static Builder|Specialization query()
 * @method static Builder|Specialization whereCreatedAt($value)
 * @method static Builder|Specialization whereId($value)
 * @method static Builder|Specialization whereTitle($value)
 * @method static Builder|Specialization whereUpdatedAt($value)
 * @mixin Eloquent
 */
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
