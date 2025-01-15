<?php

namespace App\Models;

use WizwebBe\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TodoList extends OrmApiBaseModel
{
    protected $table = 'to_do_lists';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            
        ];
    }

    public function spouseRelationships()
    {
        return [
            
        ];
    }

    public function childRelationships()
    {
        return [
            'tasks' => []
        ];
    }

    public function rules()
    {
        return [
            'name' => 'sometimes:required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];

    

        public function tasks(): HasMany
    {
        return $this->hasMany(Task::class, 'to_do_list_id');
    }

    
}