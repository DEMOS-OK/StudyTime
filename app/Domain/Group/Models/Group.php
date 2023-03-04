<?php

declare(strict_types=1);

namespace App\Domain\Group\Models;

use Database\Factories\Domain\Group\Models\GroupFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Domain\Group\Models\Group
 *
 * @property int $id
 * @property int $specialization_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static GroupFactory factory($count = null, $state = [])
 * @method static Builder|Group newModelQuery()
 * @method static Builder|Group newQuery()
 * @method static Builder|Group query()
 * @method static Builder|Group whereCreatedAt($value)
 * @method static Builder|Group whereId($value)
 * @method static Builder|Group whereSpecializationId($value)
 * @method static Builder|Group whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Group extends Model
{
    use HasFactory;

    /**
     * The model is linked to this table
     *
     * @var string
     */
    protected $table = 'group';

    /**
     * Fillable fields of the model
     *
     * @var string[]
     */
    protected $fillable = ['specialization_id'];

}
