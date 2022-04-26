<?php
class Biodata extends CI_Controller
{
    public function index(){
        $this->load->view('form-biodata');
    }
    public function keluaran_biodata1(){
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required|min_length[3]', ['required' => 'Nama Mahasiswa harus diisi', 'min_length' => 'Nama terlalu pendek']);
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric', ['required' => 'NIS harus diisi', 'numeric' => 'NIS harus mengandung angka']);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required',['required' => 'Kelas harus diisi']);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir','required',['required'=> 'Tanggal Lahir harus diisi']);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir','required',['required' => 'Tempat Lahir harus diisi']);
        $this->form_validation->set_rules('alamat', 'Alamat','required', ['required' => 'Alamat Harus diisi']);
        $this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required',['required' => 'Jenis Kelamin Harus diisi']);
        $this->form_validation->set_rules('agama', 'Agama', 'required',['required' => 'Agama harus diisi']);
        
        if($this->form_validation->run()==false){

            $this->load->view('form-biodata');
        }else{
        $isi_biodata =[
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'kelamin' => $this->input->post('kelamin'),
            'agama' => $this->input->post('agama'),
        ];
       $this->load->view('data-biodata', $isi_biodata);
    }
    }
}
