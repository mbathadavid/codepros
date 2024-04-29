<?php

namespace App\Modules\Writers\Models;

use CodeIgniter\Model;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use App\Models\SchoolsModel;

class Writers_m extends Model
{

    protected $DBGroup          = 'default';
    protected $table            = 'writers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['date', 'client', 'link', 'request', 'response','status', 'first_name', 'last_name', 'username', 'phone', 'profile_pic', 'country', 'language', 'spec', 'lang', 'framework', 'about', 'portifolio', 'linkedin', 'github', 't&c', 'created_on','created_by', 'modified_on', 'modified_by'];

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

    function insert_data($table, $data)
    {
        $sql = $this->db->table($table); // Replace 'your_table' with your actual table name
        $sql->insert($data);

        return $this->db->insertID();
    }

    //Populate
   function populate($table, $id, $text)
   {
       $pp = $this->db->table($table)->orderBy($text, 'ASC')->get()->getResult();
       $out = [];

       foreach ($pp as $p) {
           $out[$p->$id] = $p->$text;
       }


       return $out;
   }

   //Function  to get Admin Users
   function get_admin_users() {
    $admins = $this->db
                    ->table('users')
                    ->select('users.*, auth_identities.secret,auth_groups_users.group')
                    ->join('auth_identities', 'auth_identities.user_id = users.id', 'left')
                    ->join('auth_groups_users', 'auth_groups_users.user_id = users.id', 'left')
                    ->where('users.id !=',auth()->user()->id)
                    ->orderBy('users.id', 'DESC')
                    ->get()
                    ->getResult();

    return $admins;
}

//Function to retrieve all modules
function get_modules() {
    $modules = $this->db->table('modules')->orderBy('id','DESC')->get()->getResult();

    return $modules;
}

    function get_specializations()
    {
        $specs = $this->db->table('specializations')->orderBy('id', 'ASC')->get()->getResult();
        return $specs;
    }
    function get_languages()
    {
        $lang = $this->db->table('languages')->orderBy('id', 'ASC')->get()->getResult();
        return $lang;
    }
    function get_frameworks()
    {
        $frm = $this->db->table('frameworks')->orderBy('id', 'ASC')->get()->getResult();
        return $frm;
    }

    public function updateprofile($userId, $data)
    {
       
        $this->set($data)->where('user_id', $userId)->update();

        return $this->db->affectedRows();
    }
    function writer_details($userId)
    {
        $writer = $this->db->table('writers')->where('user_id', $userId)->get()->getRow();
        return $writer;
    }


}