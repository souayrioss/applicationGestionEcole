<?php 
class Pages extends Controller {
    public function __construct()
    {
        $this->UserModel = $this->model('User');
    }
    public function index()
    {
        $Student =$this->UserModel->getStd();
        $Teacher =$this->UserModel->getTch();
        $Cls =$this->UserModel->getCls();
        $Class =$this->UserModel->getClass();
        $data = [
            'Students' => $Student,
            'Cls' => $Cls,
            'Class' => $Class,
            'Teachers' => $Teacher
            ];
        $this->view('admin/index',$data);
    }
    public function addUserPages()
    {
        $Class =$this->UserModel->nameClass();
        $data = [
            'Class' => $Class
            ];
        $this->view('admin/addUser',$data);
    }
    public function listUser()
    {
        $Student =$this->UserModel->getStudent();
        $Parent =$this->UserModel->getParent();
        $Teacher =$this->UserModel->getTeacher();
        $Admin =$this->UserModel->getAdmin();
        $data = [
            'Students' => $Student,
            'Parents' => $Parent,
            'Teachers' => $Teacher,
            'Admins' => $Admin
        ];
        $this->view('admin/listUser',$data);
    }
    public function addUser(){
        
    }
}