<?php

declare(strict_types=1);

namespace App\Domain\Group\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
