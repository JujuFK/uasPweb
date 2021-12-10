<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Jasa extends CI_Controller {
        
        function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('m_data');
        }

        public function index(){
            // $data['user'] = $this->m_data->ambil_data()->result();
            $data['judul'] = "Halaman depan";
            $this->load->view('index.php',$data);
        }

        public function harga(){
            // $data['judul'] = "List Harga";
            $data['lima'] = $this->m_data->ambil_data()->result();
            $data['tujuh'] = $this->m_data->ambil_data_dua()->result();
            $data['delapan'] = $this->m_data->ambil_data_tiga()->result();
            $data['sembilan'] = $this->m_data->ambil_data_empat()->result();
            $this->load->view('v_harga.php',$data);
        }

        public function kegiatan(){
            $data['judul'] = "List Jasa";
            $this->load->view('v_jasa.php',$data);
        }

        // CRUD

        public function crud(){
            $data['judul'] = "CRUD";
            $data['lima'] = $this->m_data->ambil_data()->result();
            $data['tujuh'] = $this->m_data->ambil_data_dua()->result();
            $data['delapan'] = $this->m_data->ambil_data_tiga()->result();
            $data['sembilan'] = $this->m_data->ambil_data_empat()->result();
            $this->load->view('v_crud.php',$data);
        }

        function tambah(){
            $this->load->view('v_input');
        }

        function tambah_aksi(){
            $alamat = $this->input->post('alamat');
            $harga = $this->input->post('harga');
            $dp = $this->input->post('dp');
            $cicilan = $this->input->post('cicilan');
    
            $data = array(
                'alamat' => $alamat,
                'harga' => $harga,
                'dp' => $dp,
                'cicilan' => $cicilan
                );
            $this->m_data->input_data($data,'lima');
            redirect('jasa/crud');
        }

        function hapus($id){
            $where = array('id' => $id);
            $this->m_data->hapus_data($where,'lima');
            redirect('jasa/crud');
        }

        function edit($id){
            $where = array('id' => $id);
            $data['lima'] = $this->m_data->edit_data($where,'lima')->result();
            $this->load->view('v_edit',$data);
        }

        function update(){
            $id = $this->input->post('id');
            $alamat = $this->input->post('alamat');
            $harga = $this->input->post('harga');
            $dp = $this->input->post('dp');
            $cicilan = $this->input->post('cicilan');
    
            $data = array(
            'alamat' => $alamat,
            'harga' => $harga,
            'dp' => $dp,
            'cicilan' => $cicilan,
            );
    
            $where = array(
                'id' => $id
            );
            
            $this->m_data->update_data($where,$data,'lima');
            redirect('jasa/crud');
        }

        // CRUD 70
        function tambah_tujuh(){
            $this->load->view('v_input_tujuh');
        }

        function tambah_aksi_tujuh(){
            $alamat = $this->input->post('alamat');
            $harga = $this->input->post('harga');
            $dp = $this->input->post('dp');
            $cicilan = $this->input->post('cicilan');
    
            $data = array(
                'alamat' => $alamat,
                'harga' => $harga,
                'dp' => $dp,
                'cicilan' => $cicilan
                );
            $this->m_data->input_data($data,'tujuh');
            redirect('jasa/crud');
        }

        function hapus_tujuh($id){
            $where = array('id' => $id);
            $this->m_data->hapus_data($where,'tujuh');
            redirect('jasa/crud');
        }

        function edit_tujuh($id){
            $where = array('id' => $id);
            $data['tujuh'] = $this->m_data->edit_data($where,'tujuh')->result();
            $this->load->view('v_edit_tujuh',$data);
        }

        function update_tujuh(){
            $id = $this->input->post('id');
            $alamat = $this->input->post('alamat');
            $harga = $this->input->post('harga');
            $dp = $this->input->post('dp');
            $cicilan = $this->input->post('cicilan');
    
            $data = array(
            'alamat' => $alamat,
            'harga' => $harga,
            'dp' => $dp,
            'cicilan' => $cicilan,
            );
    
            $where = array(
                'id' => $id
            );
            
            $this->m_data->update_data($where,$data,'tujuh');
            redirect('jasa/crud');
        }

        // CRUD 80
        function tambah_delapan(){
            $this->load->view('v_input_delapan');
        }

        function tambah_aksi_delapan(){
            $alamat = $this->input->post('alamat');
            $harga = $this->input->post('harga');
            $dp = $this->input->post('dp');
            $cicilan = $this->input->post('cicilan');
    
            $data = array(
                'alamat' => $alamat,
                'harga' => $harga,
                'dp' => $dp,
                'cicilan' => $cicilan
                );
            $this->m_data->input_data($data,'delapan');
            redirect('jasa/crud');
        }

        function hapus_delapan($id){
            $where = array('id' => $id);
            $this->m_data->hapus_data($where,'delapan');
            redirect('jasa/crud');
        }

        function edit_delapan($id){
            $where = array('id' => $id);
            $data['delapan'] = $this->m_data->edit_data($where,'delapan')->result();
            $this->load->view('v_edit_delapan',$data);
        }

        function update_delapan(){
            $id = $this->input->post('id');
            $alamat = $this->input->post('alamat');
            $harga = $this->input->post('harga');
            $dp = $this->input->post('dp');
            $cicilan = $this->input->post('cicilan');
    
            $data = array(
            'alamat' => $alamat,
            'harga' => $harga,
            'dp' => $dp,
            'cicilan' => $cicilan,
            );
    
            $where = array(
                'id' => $id
            );
            
            $this->m_data->update_data($where,$data,'delapan');
            redirect('jasa/crud');
        }

        // CRUD 90
        function tambah_sembilan(){
            $this->load->view('v_input_sembilan');
        }

        function tambah_aksi_sembilan(){
            $alamat = $this->input->post('alamat');
            $harga = $this->input->post('harga');
            $dp = $this->input->post('dp');
            $cicilan = $this->input->post('cicilan');
    
            $data = array(
                'alamat' => $alamat,
                'harga' => $harga,
                'dp' => $dp,
                'cicilan' => $cicilan
                );
            $this->m_data->input_data($data,'sembilan');
            redirect('jasa/crud');
        }

        function hapus_sembilan($id){
            $where = array('id' => $id);
            $this->m_data->hapus_data($where,'sembilan');
            redirect('jasa/crud');
        }

        function edit_sembilan($id){
            $where = array('id' => $id);
            $data['sembilan'] = $this->m_data->edit_data($where,'sembilan')->result();
            $this->load->view('v_edit_sembilan',$data);
        }

        function update_sembilan(){
            $id = $this->input->post('id');
            $alamat = $this->input->post('alamat');
            $harga = $this->input->post('harga');
            $dp = $this->input->post('dp');
            $cicilan = $this->input->post('cicilan');
    
            $data = array(
            'alamat' => $alamat,
            'harga' => $harga,
            'dp' => $dp,
            'cicilan' => $cicilan,
            );
    
            $where = array(
                'id' => $id
            );
            
            $this->m_data->update_data($where,$data,'sembilan');
            redirect('jasa/crud');
        }
    }
?>