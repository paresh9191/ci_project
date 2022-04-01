<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class DemoModel extends Model{
    protected $table = 'demo';
    	protected $primaryKey = 'user_id';

	// protected $returnType = 'array';

    protected $allowedFields = ['user_name','user_email','user_password','user_created_at','phone','DOB','gender'];

    // public function $save(){

        public function getUsers() {
            return $this->findAll();            
          }
          
}

