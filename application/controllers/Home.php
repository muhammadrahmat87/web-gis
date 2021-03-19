<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct(){
    parent::__construct(); 
    $this->load->model('m_tps');
}
    


	public function index()
	{
		$data = array(
            'title' => 'View Map',
            'isi' => 'v_home'
        );
        $this->load->view('template/v_wrapper',$data,FALSE);
	}

    public function tps()
	{
		$data = array(
            'title' =>'Pemetaan',
            'tps' => $this->m_tps->get_all_data(),
            'isi' => 'tiang/v_pemetaan_tps'
        );
        $this->load->view('template/v_wrapper',$data,FALSE);
	}


    public function riau()
	{
		$data = array(
            'title' =>'Pemetaan',
            'tps' => $this->m_tps->get_data_riau(),
            'isi' => 'tiang/v_pemetaan_riau'
        );
        $this->load->view('template/v_wrapper',$data,FALSE);
	}
	
	function tambah()
		{
		
			$data = array(
            'title' =>'Tambah',
            'tps' => $this->m_tps->get_data_riau(),
            'isi' => 'tiang/riau/add'
        );
		$this->load->view('template/v_wrapper',$data,FALSE);
       }
	 

  // public function tambah_riau()
  // {
  // $x = array( 'judul'       => 'Tambah Data Tiang' ,
  //             'aksi'        => 'tambah',
  //             'npwpd'       => "",
  //             'ktiang'      => "",
  //             'nama_usaha'  => "",
  //             'produk'      => "",
  //             'lokasi'      => "",
  //             'foto'        => "",
  //             'ukuran'      => "",
  //             'mpajaka'     => "",
  //             'mpajakb'     => "",
  //             'latitude'    => "",  
  //             'longitude'   => ""); 
  //   if(isset($_POST['kirim'])){
  //     $inputData=array(
  //       'npwpd'       =>$this->input->post('npwpd'),
  //       'ktiang'      =>$this->input->post('ktiang'),
  //       'nama_usaha'  =>$this->input->post('nama_usaha'),
  //       'produk'      =>$this->input->post('produk'),
  //       'lokasi'      =>$this->input->post('lokasi'),
  //       'foto'        =>$this->input->post('foto'),
  //       'ukuran'      =>$this->input->post('ukuran'),
  //       'mpajaka'     =>$this->input->post('mpajaka'),
  //       'mpajakb'     =>$this->input->post('mpajakb'),
  //       'latitude'    =>$this->input->post('latitude'),
  //       'longitude'   =>$this->input->post('longitude'));
  //     $cek=$this->db->insert('tbl_riau',$inputData);
  //     if($cek){
  //       $pesan='<div class="alert alert-success alert-dismissible">
  //               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  //               <h4><i class="icon fa fa-check"></i> Success!</h4>
  //              Data Berhasil Di Ditambahkan.
  //             </div>';
  //   $this->session->set_flashdata('pesan',$pesan);
  //   redirect(base_url('tiang/v_pemetaan_riau'));
  //     }else{
  //      echo "ERROR input Data";
  //     }
  //   }else{
  //    tpl('crud/riau_form',$x);
  //   }
  // }

  //       public function jabatan_edit($id='')
  // {
  // $sql=$this->db->get_where('jabatan',array('id_jabatan'=>$id))->row_array(); 
  // $x = array('judul'        =>'Tambah Data Jabatan' ,
  //             'aksi'        =>'tambah',
  //       'nama_jabatan'=>$sql['nama_jabatan'],
  //       'golongan'    =>$sql['golongan'],
  //       'tunjangan'         =>$sql['tunjangan']); 
  //   if(isset($_POST['kirim'])){
  //     $inputData=array(
  //       'nama_jabatan'=>$this->input->post('nama_jabatan'),
  //       'golongan'    =>$this->input->post('golongan'),
  //       'tunjangan'         =>$this->input->post('tunjangan'));
  //     $cek=$this->db->update('jabatan',$inputData,array('id_jabatan'=>$id));
  //     if($cek){
  //       $pesan='<div class="alert alert-success alert-dismissible">
  //               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  //               <h4><i class="icon fa fa-check"></i> Success!</h4>
  //              Data Berhasil Di Diedit.
  //             </div>';
  //   $this->session->set_flashdata('pesan',$pesan);
  //   redirect(base_url('admin/jabatan'));
  //     }else{
  //      echo "ERROR input Data";
  //     }
  //   }else{
  //    tpl('admin/jabatan_form',$x);
  //   }
  // }

  
  // public function jabatan_hapus($id='')
  // {
  //  $cek=$this->db->delete('jabatan',array('id_jabatan'=>$id));
  //  if ($cek) {
  //   $pesan='<div class="alert alert-success alert-dismissible">
  //               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  //               <h4><i class="icon fa fa-check"></i> Success!</h4>
  //              Data Berhasil Di Hapus.
  //             </div>';
  //   $this->session->set_flashdata('pesan',$pesan);
  //   redirect(base_url('admin/jabatan'));
  //  }
  // }



}



