<?php

namespace App\Domain\Auditorium\Models;

use Database\Factories\Domain\Auditorium\Models\AuditoriumFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Domain\Auditorium\Models\Auditorium
 *
 * @property int $id
 * @property int $corpus
 * @property int $office
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static AuditoriumFactory factory($count = null, $state = [])
 * @method static Builder|Auditorium newModelQuery()
 * @method static Builder|Auditorium newQuery()
 * @method static Builder|Auditorium query()
 * @method static Builder|Auditorium whereCorpus($value)
 * @method static Builder|Auditorium whereCreatedAt($value)
 * @method static Builder|Auditorium whereId($value)
 * @method static Builder|Auditorium whereOffice($value)
 * @method static Builder|Auditorium whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Auditorium extends Model
{
    use HasFactory;

    /**
     * The model is linked to this table
     *
     * @var string
     */
    protected $table = 'auditorium';

    /**
     * Fillable fields of the model
     *
     * @var string[]
     */
    protected $fillable = ['corpus', 'office'];
}
