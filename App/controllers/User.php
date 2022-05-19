<?php 
class User extends Controller {
    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'I',
            '1'=> 'love',
            '2'=>'you'
        ];
        $this->view('admin/index',$data);
    }
    public function about()
    {
        $data=[
            'title'=>'about user'
        ];
        $this->view('admin/about',$data);

    }
}