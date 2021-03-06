<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Fillale fields.
     *
     * @var array
     */
    protected $fillable = ['name', 'display_name', 'description'];

    /**
     * Specifies the belongs to many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
