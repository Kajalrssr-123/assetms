<?php 
    class Queries extends CI_Model{
        public function getclass(){
            $c = $this->db->get('tbl_dept');
            if($c->num_rows()>0){
                return $c->result();
        }
        }
        public function getdept(){
            $d = $this->db->get('tbl_dept');
            if($d->num_rows()>0){
                return $d->result();
        }
        } 
        public function registerAdmin($data){
            return $this->db->insert('tbl_users',$data);
        }
        public function chkAdminExist(){
            $chkAdmin = $this->db->get('tbl_users');
            if($chkAdmin->num_rows()>0){
                return $chkAdmin->num_rows();
            }
        }
        public function adminExist($email,$password){
            $chkAdmin = $this->db->where(['email'=>$email,'password'=>$password])->get('tbl_users');
            if ($chkAdmin->num_rows()>0){
                return $chkAdmin->row();
            }
            else{
                return false;
            }
        }
        public function makedept($data){
            return $this->db->insert('tbl_dept',$data);
        }
        public function makeasset($data){
            return $this->db->insert('tbl_asset',$data);
        }
        public function viewalldept(){
            $this->db->select(['tbl_dept.dept_id','tbl_dept.deptname','tbl_dept.classname']);
            $this->db->from('tbl_dept');
            $admin = $this->db->get();
            return $admin->result();
          }
    }
?>