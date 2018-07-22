<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class AdminController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $this->extract->tuneSelection('top_phones')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('times_for_call')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('partners')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('slides')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('slider_facts')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('facts_list')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('examples_list')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('advantages_list')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('main_windows_price_list')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('main_balcony_list')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('contacts_list')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('services_list')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('sale_list')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('guarantee_facts_list')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('reviews_list')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('windows_price_list')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('balcony_price_list')->sortBy('sorter','DESC');
    }

    public function getIndex(){
        return view('back.layout');
    }


    public function getAll(){
        $block = $this->extract->getBlock('all_site');
        return view('back.blocks.all_site', [
            'block' => $block
        ]);
    }


    public function getSlider(){
        $block = $this->extract->getBlock('slider');
        return view('back.blocks.slider', [
            'block' => $block
        ]);
    }


    public function getFacts(){
        $block = $this->extract->getBlock('facts');
        return view('back.blocks.facts', [
            'block' => $block
        ]);
    }


    public function getExamples(){
        $block = $this->extract->getBlock('examples');
        return view('back.blocks.examples', [
            'block' => $block
        ]);
    }


    public function getHomeWindows(){
        $block = $this->extract->getBlock('main_windows_price');
        return view('back.blocks.main_windows_price', [
            'block' => $block
        ]);
    }


    public function getHomeWindowsItem( $id ){
        $item = $this->extract->getGroupItem('main_windows_types', $id);
        return view('back.groups.main_windows_types.main_windows_types', [
            'item' => $item
        ]);
    }


    public function getHomeBalconies(){
        $block = $this->extract->getBlock('main_balcony_price');
        return view('back.blocks.main_balcony_price', [
            'block' => $block
        ]);
    }


    public function getHomeBalconiesCategory( $id ){
        $item = $this->extract->getGroupItem('main_balcony_categories', $id);
        return view('back.groups.main_balcony_categories.main_balcony_categories', [
            'item' => $item
        ]);
    }


    public function getHomeBalconiesItem( $other, $id ){
        $item = $this->extract->getGroupItem('main_balcony_types', $id);
        return view('back.groups.main_balcony_types.main_balcony_types', [
            'item' => $item
        ]);
    }


    public function getAdvantages(){
        $block = $this->extract->getBlock('advantages');
        return view('back.blocks.advantages', [
            'block' => $block
        ]);
    }


    public function getHomeInfo(){
        $block = $this->extract->getBlock('main_dop_text');
        return view('back.blocks.main_dop_text', [
            'block' => $block
        ]);
    }


    public function getHomeMeta(){
        $block = $this->extract->getBlock('slider');
        return view('back.blocks.meta', [
            'block' => $block
        ]);
    }


    public function getProduction(){
        $block = $this->extract->getBlock('products');
        return view('back.blocks.products', [
            'block' => $block
        ]);
    }


    public function getGuarantee(){
        $block = $this->extract->getBlock('guarantee');
        return view('back.blocks.guarantee', [
            'block' => $block
        ]);
    }


    public function getWindows(){
        $block = $this->extract->getBlock('windows_price');
        return view('back.blocks.windows_price', [
            'block' => $block
        ]);
    }


    public function getBalconies(){
        $block = $this->extract->getBlock('balcony_price');
        return view('back.blocks.balcony_price', [
            'block' => $block
        ]);
    }


    public function getSale(){
        $block = $this->extract->getBlock('sale');
        return view('back.blocks.sale', [
            'block' => $block
        ]);
    }


    public function getComponents(){
        $block = $this->extract->getBlock('components');
        return view('back.blocks.components', [
            'block' => $block
        ]);
    }


    public function getServices(){
        $block = $this->extract->getBlock('services');
        return view('back.blocks.services', [
            'block' => $block
        ]);
    }


    public function getAbout(){
        $block = $this->extract->getBlock('about');
        return view('back.blocks.about', [
            'block' => $block
        ]);
    }


    public function getContacts(){
        $block = $this->extract->getBlock('contacts');
        return view('back.blocks.contacts', [
            'block' => $block
        ]);
    }


    public function getPost(){
        $block = $this->extract->getBlock('feedback');
        return view('back.blocks.mails', [
            'block' => $block
        ]);
    }


    public function getScripts(){
        $block = $this->extract->getBlock('scripts');
        return view('back.blocks.scripts', [
            'block' => $block
        ]);
    }
}
