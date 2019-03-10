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
use App\rating;


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

    private function getRating( $entity_name, $entity_id ){
        $rating = new rating();
        $rating = $rating->where('entity_name','=',$entity_name)->where('entity_id','=',$entity_id)->get();

        //=Количество проголосовавших================
        $rating_front['count'] = $rating->count();
        //===========================================
        if($rating_front['count'] > 0){
            //=Средняя оценка============================
            $sum = 0;
            foreach($rating as $item){
                $sum += $item['value'];
            }

            $rating_front['middle'] = round( $sum / $rating_front['count'], 1 );

            //===========================================

            //=Процент для вывода рейтинга в верстке=====
            $rating_front['percent'] = ($sum * 100) / ($rating_front['count'] * 5);
            //===========================================
        }else{
            $rating_front['middle'] = 0;
            $rating_front['percent'] = 0;
        }

        return $rating_front;
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

        $rating = $this->getRating('index', 0);

        return response()->view('front.index.index', [
            'slider' => $slider,
            'facts' => $facts,
            'examples' => $examples,
            'advantages' => $advantages,
            'main_dop_text' => $main_dop_text,
            'main_windows_price' => $main_windows_price,
            'main_balcony_price' => $main_balcony_price,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $slider->last_modified?:time()));
    }


    public function getServices(){
        $this->extract->tuneSelection('services_list')->sortBy('sorter','ASC');

        $services = $this->extract->getBlock('services');

        $rating = $this->getRating('services', 0);

        return response()->view('front.services.services', [
            'services' => $services,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $services->last_modified?:time()));
    }


    public function getGuarantee(){
        $this->extract->tuneSelection('guarantee_facts_list')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('reviews_list')->sortBy('sorter','ASC');

        $guarantee = $this->extract->getBlock('guarantee');

        $rating = $this->getRating('guarantee', 0);

        return response()->view('front.guarantee.guarantee', [
            'guarantee' => $guarantee,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $guarantee->last_modified?:time()));
    }


    public function getSale(){
        $this->extract->tuneSelection('services_list')->sortBy('sorter','ASC');

        $sale = $this->extract->getBlock('sale');

        $rating = $this->getRating('sale', 0);

        return response()->view('front.sale.sale', [
            'sale' => $sale,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $sale->last_modified?:time()));
    }


    public function getWindowsPrices(){
        $this->extract->tuneSelection('windows_price_categories')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('windows_price_list')->sortBy('sorter','ASC');

        $prices = $this->extract->getBlock('windows_price');

        $rating = $this->getRating('windows_price', 0);

        return response()->view('front.prices.windows_prices', [
            'prices' => $prices,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $prices->last_modified?:time()));
    }


    public function getBalconiesPrices(){
        $this->extract->tuneSelection('balcony_price_categories')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('balcony_price_list')->sortBy('sorter','ASC');

        $prices = $this->extract->getBlock('balcony_price');

        $rating = $this->getRating('balcony_price', 0);

        return response()->view('front.prices.balconies_prices', [
            'prices' => $prices,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $prices->last_modified?:time()));
    }


    public function getAbout(){
        $about = $this->extract->getBlock('about');

        $rating = $this->getRating('about', 0);

        return response()->view('front.about.about', [
            'about' => $about,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $about->last_modified?:time()));
    }


    public function getPay(){
        $pay = $this->extract->getBlock('pay');

        $rating = $this->getRating('pay', 0);

        return response()->view('front.pay.pay', [
            'pay' => $pay,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $pay->last_modified?:time()));
    }


    public function getProducts(){
        $this->extract->tuneSelection('products_list_1')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('products_list_2')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('other_products_list')->like('show', true)->sortBy('sorter','ASC');

        $products = $this->extract->getBlock('products');

        $rating = $this->getRating('products', 0);

        return response()->view('front.products.products', [
            'products' => $products,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $products->last_modified?:time()));
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

        $rating = $this->getRating('products_item', $product->id);

        return response()->view('front.products.products_item', [
            'product' => $product,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $product->last_modified?:time()));
    }


    public function getComponents(){
        $this->extract->tuneSelection('components_categories')->like('show', true)->sortBy('sorter','ASC');

        $components = $this->extract->getBlock('components');

        $rating = $this->getRating('components', 0);

        return response()->view('front.components.components', [
            'components' => $components,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $components->last_modified?:time()));
    }


    public function getComponentsCategory( $slug ){
        $this->extract->tuneSelection('components_list')->like('show', true)->sortBy('sorter','ASC');

        $category = $this->extract->getBySlug('components_categories', $slug);
        if (is_null($category)) {
            return response(view('errors.404'), 404);
        }

        $rating = $this->getRating('components_category', $category->id);

        return response()->view('front.components.components_category', [
            'category' => $category,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $category->last_modified?:time()));
    }


    public function getComponentsItem( $other, $slug ){
        $component = $this->extract->getBySlug('components_list', $slug);
        if (is_null($component)) {
            return response(view('errors.404'), 404);
        }

        $rating = $this->getRating('components_item', $component->id);

        return response()->view('front.components.components_item', [
            'component' => $component,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $component->last_modified?:time()));
    }


    public function getContacts(){
        $this->extract->tuneSelection('contacts_list')->sortBy('sorter','ASC');

        $contacts = $this->extract->getBlock('contacts');

        $rating = $this->getRating('contacts', 0);

        return response()->view('front.contacts.contacts', [
            'contacts' => $contacts,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $contacts->last_modified?:time()));
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

        $rating = $this->getRating('calculator', 0);

        return response()->view('front.calculator.calculator', [
            'calculator' => $calculator,
            'calculator_components' => $calculator_components,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $calculator->last_modified?:time()));
    }


    public function getSitemap(){
        $this->extract->tuneSelection('products_list_1')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('products_list_2')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('other_products_list')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('components_categories')->like('show', true)->sortBy('sorter','ASC');

        $products = $this->extract->getBlock('products');
        $components = $this->extract->getBlock('components');

        $rating = $this->getRating('sitemap', 0);

        return response()->view('front.sitemap.sitemap', [
            'products' => $products,
            'components' => $components,
            'rating' => $rating,
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', time()));
    }


    public function getSitemapXml(){
        $this->extract->tuneSelection('products_list_1')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('products_list_2')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('other_products_list')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('components_categories')->like('show', true)->sortBy('sorter','ASC');

        $products = $this->extract->getBlock('products');
        $components = $this->extract->getBlock('components');
        return response()->view('front.sitemap.sitemap_xml', [
            'products' => $products,
            'components' => $components,
        ])->header('Content-Type', 'text/xml');
    }
}