<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\DemoModel;
  
class Register extends BaseController
{
    public function index()
    {
        $data['page_title'] = "Homepage";
        $data['load_page'] = "site/register";
            echo view('site/kernal', $data);
            
 
    }

    

    public function registerInsert()
    {
        
        //include helper form
        helper(['form', 'url']);
        $data = [];
        
       // echo view('register', $data);
       $val = $this->validate([
        'name' => 'required',
        'email' => 'required',
        'password'  => 'required',
        'confirmpassword'  => 'required',
        'DOB'  => 'required',
        'phone'  => 'required',
        'gender'  => 'required',
        
    ]);
    
    
    $model = new DemoModel();
    // print_r("hellooo");exit;

    if (!$val)
        {
 
            echo 'all fileds are required';
 
        }
        else
        { 
            
            $model->save([
                'user_name' => $this->request->getVar('name'),
                'user_email'  => $this->request->getVar('email'),
                'user_password'  => md5($this->request->getVar('password')),
                 'phone'  => $this->request->getVar('phone'),
                 'DOB'  => $this->request->getVar('DOB'),
                 'gender'  => $this->request->getVar('gender'),
               
                ]);
 
            echo 1;
        }
          
    }
}

// {
//     // show users list
//     public function index(){
//         $demoModel = new DemoModel();
//         $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
//         return view('user_view', $data);
//     }
//     // add user form
//     public function create(){
//         return view('add_user');
//     }
 
//     // insert data
//     public function store() {
//         $demoModel = new DemoModel();
//         $data = [
//             'name' => $this->request->getVar('name'),
//             'email'  => $this->request->getVar('email'),
//         ];
//         $demoModel->insert($data);
//         return $this->response->redirect(site_url('/users-list'));
//     }
//     // show single user
//     public function singleUser($id = null){
//         $dserModel = new DemoModel();
//         $data['user_obj'] = $userModel->where('id', $id)->first();
//         return view('edit_view', $data);
//     }
//     // update user data
//     public function update(){
//         $demoModel = new DemoModel();
//         $id = $this->request->getVar('id');
//         $data = [
//             'name' => $this->request->getVar('name'),
//             'email'  => $this->request->getVar('email'),
//         ];
//         $demoModel->update($id, $data);
//         return $this->response->redirect(site_url('/users-list'));
//     }
 
//     // delete user
//     public function delete($id = null){
//         $demoModel = new DemoModel();
//         $data['user'] = $demoModel->where('id', $id)->delete($id);
//         return $this->response->redirect(site_url('/users-list'));
//     }    
// }
?>
//     }
    

    
  
