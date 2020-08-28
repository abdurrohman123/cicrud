<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modelmahasiswa;

class Mahasiswa extends BaseController
{
	public function index()
	{
        $mhs = new Modelmahasiswa();
        $data = [
            'tampildata' => $mhs->tampildata()
        ];
        echo View('viewtampilmahasiswa', $data);
    }
	//--------------------------------------------------------------------

}
