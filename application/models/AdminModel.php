<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class AdminModel extends CI_Model{

    public function save_catagory(){
        $data=array();
        $data['name']=$this->input->post('catagory_name',true);
        $data['description']=$this->input->post('catagory_description',true);
        $data['publish']=$this->input->post('publication_status',true);
        $this->db->insert('tbl_catagory',$data);


    }
    public function ShowCatagory(){
        $this->db->select("*");
        $this->db->from("tbl_catagory");
        $this->db->where("publish",1);
        $data=$this->db->get();
        $catagory=$data->result_array();
        
        return $catagory;

    }

    public function ShowAllCatagory(){
        $this->db->select("*");
        $this->db->from("tbl_catagory");
        $data=$this->db->get();
        $catagory=$data->result();
        
        return $catagory;

    }

    public function UnpublishCatagory($id){
        
        $this->db->set('publish',0);
        $this->db->where('id',$id);
        $this->db->update('tbl_catagory');

    }
    public function PublishCatagory($id){
        
        $this->db->set('publish',1);
        $this->db->where('id',$id);
        $this->db->update('tbl_catagory');

    }

    public function DeleteCatagory($id){
        
        $this->db->where('id',$id);
        $this->db->delete('tbl_catagory');

    }



}