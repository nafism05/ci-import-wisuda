<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import_excel_model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
        parent::__construct();
		// $this->load->model('BeritaModel', 'news');

        		
		// $this->load->helper('captcha');

    }
    
	public function insert_haripertama($data)	{
		/*$data1 = array(
                'judul' => $data['judul'],
                'slug' => $data['slug'],
                'isi' => $data['isi'],
                'published_at' => $data['published_at'],
                'thumbnail' => $data['thumbnail'],
                'created' => $data['created'],
                'modified' => $data['modified']
            );

            $this->db->insert('konten', $data1);

            $konten_id = $this->db->insert_id();

            $konten_category = array(
                'konten_id' => $konten_id,
                'category_id' => $data['kategori']
            );
            $this->db->insert('konten_categories',$konten_category);

            $user = $this->ion_auth->user()->row();
            $data2 = array(
                'konten_id' => $konten_id,
                'user_id' => $user->id
            );
            $this->db->insert('user_konten',$data2);*/

        $data1 = array(
                'URUT' => $data['No_urt'],
                'NO' => $data['no'],
                'KURSI' => $data['kursi'],
                'NIM' => $data['nim_yud'],
                'NAMA' => $data['nam_yud'],
                'IPK' => $data['ipk_yud'],
                'WSD' => 59
            );
        // $this->db->insert('wisuda59', $data1);


        $query = $this->db->get_where('wisuda59', array(//making selection
            'URUT' => $data1['URUT']
        ));

        $count = $query->num_rows(); //counting result from query

        if ($count === 0) {
            
            $this->db->insert('wisuda59', $data1);
        }
	}

	public function insert_harikedua($data)	{
		/*$data1 = array(
                'judul' => $data['judul'],
                'slug' => $data['slug'],
                'isi' => $data['isi'],
                'published_at' => $data['published_at'],
                'thumbnail' => $data['thumbnail'],
                'created' => $data['created'],
                'modified' => $data['modified']
            );

            $this->db->insert('konten', $data1);

            $konten_id = $this->db->insert_id();

            $konten_category = array(
                'konten_id' => $konten_id,
                'category_id' => $data['kategori']
            );
            $this->db->insert('konten_categories',$konten_category);

            $user = $this->ion_auth->user()->row();
            $data2 = array(
                'konten_id' => $konten_id,
                'user_id' => $user->id
            );
            $this->db->insert('user_konten',$data2);*/

        $data1 = array(
                'URUT' => $data['No_urt'],
                'NO' => $data['no'],
                'KURSI' => $data['kursi'],
                'NIM' => $data['nim_yud'],
                'NAMA' => $data['nam_yud'],
                'IPK' => $data['ipk_yud'],
                'WSD' => 60
            );
        // $this->db->insert('wisuda59', $data1);


        $query = $this->db->get_where('wisuda59_27', array(//making selection
            'URUT' => $data1['URUT']
        ));

        $count = $query->num_rows(); //counting result from query

        if ($count === 0) {
            
            $this->db->insert('wisuda59_27', $data1);
        }
	}

    public function insert_wsd61($data) {
        /*$data1 = array(
                'judul' => $data['judul'],
                'slug' => $data['slug'],
                'isi' => $data['isi'],
                'published_at' => $data['published_at'],
                'thumbnail' => $data['thumbnail'],
                'created' => $data['created'],
                'modified' => $data['modified']
            );

            $this->db->insert('konten', $data1);

            $konten_id = $this->db->insert_id();

            $konten_category = array(
                'konten_id' => $konten_id,
                'category_id' => $data['kategori']
            );
            $this->db->insert('konten_categories',$konten_category);

            $user = $this->ion_auth->user()->row();
            $data2 = array(
                'konten_id' => $konten_id,
                'user_id' => $user->id
            );
            $this->db->insert('user_konten',$data2);*/

        $data1 = array(
                'URUT' => $data['urut_a'],
                'NO' => $data['no'],
                'KURSI' => $data['kursi'],
                'NIM' => $data['nim_yud'],
                'NAMA' => $data['nam_yud'],
                'IPK' => $data['ipk_yud'],
                'WSD' => 61
            );
        // $this->db->insert('wisuda59', $data1);


        $query = $this->db->get_where('wisuda61', array(//making selection
            'KURSI' => $data['kursi']
        ));

        $count = $query->num_rows(); //counting result from query

        if ($count === 0) {
            
            $this->db->insert('wisuda61', $data1);
        }
    }
}
