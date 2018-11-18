<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionsTable extends Model
{
    protected $table = 'questions';

    protected $primaryKey = 'q_id';

    public $timestamps = false;

    public function getTableName() {
        return $this->table;
    }
}
