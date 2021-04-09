<?php


class HmifModel extends CI_Model{


    public function get_hmif(){
        if(!empty($this->input->get("search"))){
          $this->db->like('nama', $this->input->get("search"));
          $this->db->or_like('nim', $this->input->get("search"));
          $this->db->or_like('kelas', $this->input->get("search"));
        }
        $query = $this->db->get("data_aspirasi");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'kelas' => $this->input->post('kelas'),
            'keluhan' => $this->input->post('keluhan'),
            'saran' => $this->input->post('saran'),
            'kritik' => $this->input->post('kritik')
        );
        return $this->db->insert('data_aspirasi', $data);
    }


    public function update_item($id) 
    {
        $data=array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'kelas' => $this->input->post('kelas'),
            'keluhan' => $this->input->post('keluhan'),
            'saran' => $this->input->post('saran'),
            'kritik' => $this->input->post('kritik')
        );
        if($id==0){
            return $this->db->insert('data_aspirasi',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('data_aspirasi',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('data_aspirasi', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('data_aspirasi', array('id' => $id));
    }
}
?>