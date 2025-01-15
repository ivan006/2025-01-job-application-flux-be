<?php

namespace App\Models;

use WizwebBe\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Taskstatus extends OrmApiBaseModel
{
    protected $table = 'task_statuses';

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
            'description' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at'
    ];

    

        public function tasks(): HasMany
    {
        return $this->hasMany(Task::class, 'status_id');
    }

    
}