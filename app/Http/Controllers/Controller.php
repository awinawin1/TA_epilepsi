<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\EpilepsiModel;

// class HomeController extends Controller
// {
//     public function __construct()
//     {
//         $this->EpilepsiModel = new EpilepsiModel();
//     }
    
//     public function index()
//     {
//         $data = [
//             'crud' => $this->EpilepsiModel->getData(),
//         ];
//         return view('home', $data);

//     }
// }
