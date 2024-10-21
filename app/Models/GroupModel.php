<?php

namespace  App\Models;

use CodeIgniter\Model;

class GroupModel extends Model
{
    protected $table      = 'groups';
    protected $primaryKey = 'id_groups'; // Perbaikan typo
    protected $returnType = 'object';
    protected $allowedFields = ['nama_groups', 'info_groups']; // ganti allowFields dengan allowedFields
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
}
