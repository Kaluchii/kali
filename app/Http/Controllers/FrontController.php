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
        $this->extract->tuneSelection('top_phones')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('times_for_call')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('partners')->sortBy('sorter','ASC');

        $all_site = $this->extract->getBlock('all_site');
        $scripts = $this->extract->getBlock('scripts');
        view()->share([
            'scripts' => $scripts,
            'all_site' => $all_site,
        ]);
    }


    public function getIndex(){
        $this->extract->tuneSelection('main_windows_types')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('main_balcony_categories')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('main_balcony_types')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('slides')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('slider_facts')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('facts_list')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('examples_list')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('advantages_list')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('main_windows_price_list')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('main_balcony_list')->sortBy('sorter','ASC');

        $slider = $this->extract->getBlock('slider');
        $facts = $this->extract->getBlock('facts');
        $examples = $this->extract->getBlock('examples');
        $advantages = $this->extract->getBlock('advantages');
        $main_dop_text = $this->extract->getBlock('main_dop_text');
        $main_windows_price = $this->extract->getBlock('main_windows_price');
        $main_balcony_price = $this->extract->getBlock('main_balcony_price');

        return view('front.index.index', [
            'slider' => $slider,
            'facts' => $facts,
            'examples' => $examples,
            'advantages' => $advantages,
            'main_dop_text' => $main_dop_text,
            'main_windows_price' => $main_windows_price,
            'main_balcony_price' => $main_balcony_price,
        ]);
    }


    public function getServices(){
        $this->extract->tuneSelection('services_list')->sortBy('sorter','ASC');

        $services = $this->extract->getBlock('services');
        return view('front.services.services', [
            'services' => $services
        ]);
    }


    public function getGuarantee(){
        $this->extract->tuneSelection('guarantee_facts_list')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('reviews_list')->sortBy('sorter','ASC');

        $guarantee = $this->extract->getBlock('guarantee');
        return view('front.guarantee.guarantee', [
            'guarantee' => $guarantee
        ]);
    }


    public function getSale(){
        $this->extract->tuneSelection('services_list')->sortBy('sorter','ASC');

        $sale = $this->extract->getBlock('sale');
        return view('front.sale.sale', [
            'sale' => $sale
        ]);
    }


    public function getWindowsPrices(){
        $this->extract->tuneSelection('windows_price_categories')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('windows_price_list')->sortBy('sorter','ASC');

        $prices = $this->extract->getBlock('windows_price');
        return view('front.prices.windows_prices', [
            'prices' => $prices
        ]);
    }


    public function getBalconiesPrices(){
        $this->extract->tuneSelection('balcony_price_categories')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('balcony_price_list')->sortBy('sorter','ASC');

        $prices = $this->extract->getBlock('balcony_price');
        return view('front.prices.balconies_prices', [
            'prices' => $prices
        ]);
    }


    public function getAbout(){
        $about = $this->extract->getBlock('about');
        return view('front.about.about', [
            'about' => $about
        ]);
    }


    public function getProducts(){
        $this->extract->tuneSelection('products_list_1')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('products_list_2')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('other_products_list')->like('show', true)->sortBy('sorter','ASC');

        $products = $this->extract->getBlock('products');
        return view('front.products.products', [
            'products' => $products
        ]);
    }


    public function getProductsItem( $slug ){
        $product = $this->extract->getBySlug('products_list_1', $slug);
        if (is_null($product)) {
            $product = $this->extract->getBySlug('products_list_2', $slug);
            if (is_null($product)) {
                $product = $this->extract->getBySlug('other_products_list', $slug);
                if (is_null($product)) {
                    return response(view('errors.404'), 404);
                }
            }
        }
        return view('front.products.products_item', [
            'product' => $product
        ]);
    }


    public function getComponents(){
        $this->extract->tuneSelection('components_categories')->like('show', true)->sortBy('sorter','ASC');

        $components = $this->extract->getBlock('components');
        return view('front.components.components', [
            'components' => $components
        ]);
    }


    public function getComponentsCategory( $slug ){
        $this->extract->tuneSelection('components_list')->like('show', true)->sortBy('sorter','ASC');

        $category = $this->extract->getBySlug('components_categories', $slug);
        if (is_null($category)) {
            return response(view('errors.404'), 404);
        }
        return view('front.components.components_category', [
            'category' => $category
        ]);
    }


    public function getComponentsItem( $other, $slug ){
        $component = $this->extract->getBySlug('components_list', $slug);
        if (is_null($component)) {
            return response(view('errors.404'), 404);
        }
        return view('front.components.components_item', [
            'component' => $component
        ]);
    }


    public function getContacts(){
        $this->extract->tuneSelection('contacts_list')->sortBy('sorter','ASC');

        $contacts = $this->extract->getBlock('contacts');
        return view('front.contacts.contacts', [
            'contacts' => $contacts
        ]);
    }


    public function getCalculator(){
        $this->extract->tuneSelection('product_categories')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('product_types')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('colors')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('profiles')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('double_glazed_windows')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('outflow')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('window_sill')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('slope')->sortBy('sorter','ASC');

        $calculator = $this->extract->getBlock('calculator');
        $calculator_components = $this->extract->getBlock('for_calculator');
        return view('front.calculator.calculator', [
            'calculator' => $calculator,
            'calculator_components' => $calculator_components,
        ]);
    }


    public function getSitemap(){
        $this->extract->tuneSelection('components_categories')->like('show', true)->sortBy('sorter','ASC');
        $components = $this->extract->getBlock('components');
        return view('front.sitemap.sitemap', [
            'components' => $components
        ]);
    }
}