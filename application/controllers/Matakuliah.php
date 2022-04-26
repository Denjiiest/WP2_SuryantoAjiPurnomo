<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[4]|max_length[8]',  ['required' => '*Kode Matakuliah Harus diisi', 'min_length' => '*Kode Terlalu Pendek', 'max_length' => '*Kode Terlalu panjang' ]) ;

        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[4]', ['required' => '*Nama Matakuliah Harus diisi', 'min_length' => '*Nama terlalu Pendek'])  ;

        $this->form_validation->set_rules('sks', 'sks Matakuliah', 'required', ['required' => '*sks matakuliah harus diisi'])  ;

        if ($this->form_validation->run() !=true){
            $this->load->view('view-form-matakuliah');
        }else {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];
        $this->load->view('view-data-matakuliah', $data);
    }
    }
}