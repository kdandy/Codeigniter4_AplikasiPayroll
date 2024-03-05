<?php
namespace App\Models;
use CodeIgniter\Model;

class MDatatables extends Model
{
    function get_datatables(){
        if($_POST['length']!=-1);
        $db = db_connect();
        $builder = $db->table('tb_user');
        $query = $builder->select('*')
                ->limit($_POST['length'], $_POST['start'])
                ->get();

        return $query->getResult(); 
    }
}