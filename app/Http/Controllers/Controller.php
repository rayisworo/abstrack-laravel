<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\Http;
use Lang;
use App;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function setLang($lang){
        App::setlocale($lang);
    }

    public function goToWelcomePage($lang){
        $this->setLang($lang);
        return view('welcome');
    }
    public function test($lang, $id){
        $this->defineLang($lang);
        dd(app()->getlocale(), $id);
    }
}
