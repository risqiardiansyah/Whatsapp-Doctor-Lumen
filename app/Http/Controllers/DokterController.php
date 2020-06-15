<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use Carbon\Carbon;

class DokterController extends Controller
{
    public function __construct()
    {
        //
    }

    public function all()
    {
        $get = Dokter::get();

        return json_encode($get);
    }

    public function get($mulai, $hari)
    {
        if ($mulai >= 8 && $mulai < 11) {
            $get = Dokter::where('mulai', 8)->where('hari', $hari)->get();
        }elseif ($mulai >= 11 && $mulai < 17) {
            $get = Dokter::where('mulai', 11)->where('hari', $hari)->get();
        }elseif ($mulai >= 17 && $mulai < 20) {
            $get = Dokter::where('mulai', 17)->where('hari', $hari)->get();
        }else{
            $get = [];
        }

        return $get;
    }
}
