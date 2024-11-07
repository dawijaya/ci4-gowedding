<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table      = 'contacts';
    protected $primaryKey = 'id_contact'; // Perbaikan typo
    protected $returnType = 'object';
    protected $allowedFields = ['nama_contact', 'info_alias', 'phone', 'email', 'address', 'info_contact', 'id_group']; // ganti allowFields dengan allowedFields
    protected $useTimestamps = true;
    protected $useSoftDeletes = false;


    function getAll()
    {
        $builder = $this->db->table('contacts');
        $builder->join('groups', 'groups.id_groups = contacts.id_group');
        $query   = $builder->get();
        return $query->getResult();
    }
}
