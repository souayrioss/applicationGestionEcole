<?php
    class User
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getStudent()
        {
            $this->db->query("SELECT * , count(student_id) as count_std FROM student INNER JOIN parent ON student.id_parent = parent.parent_id ");
            return $this->db->resultSet();
        }
        public function getStd()
        {
            $this->db->query("SELECT count(student_id) as count_std FROM student ");
            return $this->db->single();
        }
        public function getTeacher(){
            $this->db->query( "SELECT * , count(teacher_id) as count_tch  FROM teacher ");
            return $this->db->resultSet();
        }
        public function getTch(){
            $this->db->query( "SELECT count(teacher_id) as count_tch  FROM teacher ");
            return $this->db->single();
        }
        public function getParent(){
            $this->db->query("SELECT * FROM parent ");
            return $this->db->resultSet();
        }
        public function getAdmin(){
            $this->db->query("SELECT * FROM admin ");
            return $this->db->resultSet();
        }
        public function getCls(){
            $this->db->query("SELECT count(id_class) as count_cls FROM class ");
            return $this->db->single();
        }
        public function getClass(){
            $this->db->query("SELECT name_class , COUNT(student_id) as cls_std_count FROM class INNER JOIN student ON student.student_class = class.name_class GROUP BY name_class; ");
            return $this->db->resultSet();
        }
        public function nameClass(){
            $this->db->query("SELECT name_class FROM class");
            return $this->db->resultSet();
        }



        public function addUser($data){
            $this->db->query('INSERT INTO posts (title, user_id, body) VALUES(:title, :user_id, :body)');
            // Bind values
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':body', $data['body']);
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function updatePost($data){
            $this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id )');
            // Bind values
            $this->db->bind(':id', $data['id']);
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':body', $data['body']);
        
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function getPostById($id){
            $this->db->query('SELECT * FROM posts WHERE id = :id');
            $this->db->bind(':id', $id);

            $row = $this->db->single();
            return $row;

        }

        public function deletePost($id){
            $this->db->query('DELETE * posts WHERE id = :id');
            // Bind values
            $this->db->bind(':id', $id);
        
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

    }