<?php

namespace App\Models;

use WizwebBe\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends OrmApiBaseModel
{
    protected $table = 'tasks';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'to_do_list' => [],
            'status' => []
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
            
        ];
    }

    public function rules()
    {
        return [
            'to_do_list_id' => 'sometimes:required',
            'status_id' => 'sometimes:required',
            'name' => 'sometimes:required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'to_do_list_id',
        'status_id',
        'name',
        'created_at',
        'updated_at'
    ];

        public function to_do_list(): BelongsTo
    {
        return $this->belongsTo(TodoList::class, 'to_do_list_id');
    }

        public function status(): BelongsTo
    {
        return $this->belongsTo(Taskstatus::class, 'status_id');
    }

    

    
}