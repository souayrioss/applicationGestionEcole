<?php 
class Pages extends Controller {
    public function __construct()
    {
        // $this->personModel = $this->model('Person');
    }
    public function index()
    {
        // $person =$this->personModel->getPerson();
        $data = [

            'title' => 'M',
            // 'persons'=> $person,
            '2'=>'me'
        ];
        $this->view('admin/index',$data);
    }
    public function about()
    {
        $data = [     
            'title' => 'about page',
        ];
        $this->view('admin/about',$data);
    }
    public function statistique()
    {
        $this->view('admin/statistique');
    }
}