<?php namespace App\Controllers;
  
use CodeIgniter\Controller;

use App\Models\DemoModel;
  
class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        echo "Welcome back, ".$session->get('user_name');
        echo view('userDashboard/dashboard');
    
            session_start();

            session_destroy();
            header('location:login.php');

    
        $demoModel = new DemoModel();
        $query = $demoModel->getUsers();
        $data['products'] = $query;
        // echo '<pre>';print_r($data);exit;
        return view('userDashboard/dashboard', $data);
    }
}


