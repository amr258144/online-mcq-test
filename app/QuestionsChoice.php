<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionsChoice extends Model
{
    protected $table = 'questions_choices';

    protected $primaryKey = 'qc_id';

    public $timestamps = false;

    public function getTableName() {
        return $this->table;
    }
}
