<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;


class FrontController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $scripts = $this->extract->getBlock('scripts');
        view()->share([
            'scripts' => $scripts,
        ]);
    }


    public function getIndex(){
        return view('front.index.index', [
        ]);
    }

    public function getServices(){
        return view('front.services.services', [
        ]);
    }

    public function getGuarantee(){
        return view('front.guarantee.guarantee', [
        ]);
    }

    public function getSale(){
        return view('front.sale.sale', [
        ]);
    }

    public function getPrices(){
        return view('front.prices.prices', [
        ]);
    }

    public function getContacts(){
        return view('front.contacts.contacts', [
        ]);
    }
}