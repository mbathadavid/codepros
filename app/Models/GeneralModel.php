<?php

namespace App\Models;

use CodeIgniter\Model;

class GeneralModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'generals';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function populate($table, $id, $text)
    {
        $pp = $this->db->table($table)->orderBy($text, 'ASC')->get()->getResult();
        $out = [];

        foreach ($pp as $p) {
            $out[$p->$id] = $p->$text;
        }


        return $out;
    }


    function insert_data($table, $data)
    {
        $sql = $this->db->table($table);  
        $sql->insert($data);

        return $this->db->insertID();
    }

    function update_data($table, $data, $where)
    {
        $sql = $this->db->table($table);
        $sql->where($where);
        $sql->update($data);

        return $this->db->affectedRows(); 
    }

    function load_profile($client)
    {
        return $this->db->table('profiles')->where('client', $client)->get()->getRow();
    }

    //Function to pull trhe last user
    function last_users() {
        return $this->db
                    ->table('users')
                    ->orderBy('id', 'DESC')
                    ->limit(1)
                    ->get()
                    ->getRow();
    }
 
}
