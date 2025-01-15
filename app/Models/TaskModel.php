<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'date', 'time', 'is_completed'];
    protected $useTimestamps = false; // Nonaktifkan fitur timestamps
}
