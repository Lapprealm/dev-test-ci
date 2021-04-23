<?php


class HmifModel extends CI_Model{

    // Tampung Aspirasi

    public function get_ta(){
        if (!empty($this->input->get("search")))
        {
          $this->db->like('nama', $this->input->get("search"));
          $this->db->or_like('nim', $this->input->get("search"));
          $this->db->or_like('kelas', $this->input->get("search"));
        }
        $query = $this->db->get("data_aspirasi");
        return $query->result();
    }

    public function insert_ta()
    {    
        $data = array
        (
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'kelas' => $this->input->post('kelas'),
            'keluhan' => $this->input->post('keluhan'),
            'saran' => $this->input->post('saran'),
            'kritik' => $this->input->post('kritik')
        );
        return $this->db->insert('data_aspirasi', $data);
    }

    public function update_ta($id) 
    {
        $data=array
        (
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'kelas' => $this->input->post('kelas'),
            'keluhan' => $this->input->post('keluhan'),
            'saran' => $this->input->post('saran'),
            'kritik' => $this->input->post('kritik')
        );
        if ($id==0)
        {
            return $this->db->insert('data_aspirasi',$data);
        }
        else
        {
            $this->db->where('id',$id);
            return $this->db->update('data_aspirasi',$data);
        }        
    }

    public function find_ta($id)
    {
        return $this->db->get_where('data_aspirasi', array('id' => $id))->row();
    }

    public function delete_ta($id)
    {
        return $this->db->delete('data_aspirasi', array('id' => $id));
    }

    public function get_sa(){
        if (!empty($this->input->get("search")))
        {
          $this->db->like('nama', $this->input->get("search"));
          $this->db->or_like('nim', $this->input->get("search"));
          $this->db->or_like('posisi', $this->input->get("search"));
        }
        $query = $this->db->get("struktur_keanggotaan");
        return $query->result();
    }

    // Struktur Keanggotaan

    public function insert_sa()
    {    
        $data = array
        (
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim')
        );
        return $this->db->insert('struktur_keanggotaan', $data);
    }

    public function update_sa($id) 
    {
        $data=array
        (
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim')
        );
        if ($id==0)
        {
            return $this->db->insert('struktur_keanggotaan',$data);
        }
        else
        {
            $this->db->where('id',$id);
            return $this->db->update('struktur_keanggotaan',$data);
        }        
    }

    public function find_sa($id)
    {
        return $this->db->get_where('struktur_keanggotaan', array('id' => $id))->row();
    }

    public function delete_sa($id)
    {
        return $this->db->delete('struktur_keanggotaan', array('id' => $id));
    }
}


?>