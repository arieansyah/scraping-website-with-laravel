<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use KubAT\PhpSimple\HtmlDomParser;
use App\Product;

class ProductScarppController extends Controller
{
    public function product(Request $request)
    {
        $cek_url = parse_url($request->url, PHP_URL_HOST);
        if ($cek_url == 'fabelio.com') {
            $slice = Str::after($request->url, $cek_url);
            $cp = explode('/', $slice);
            if ($cp[1] == 'cp') {
                return $this->process($request->url);
            }else {
                return back()->with('error','URL Invalid!!!');
            }
        }else {
            return back()->with('error','URL Invalid!!!');
        }
    }

    public function scrapping($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        $dom = HtmlDomParser::str_get_html($response);
        return $dom;
    }

    public function process($url)
    {
        $dom = $this->scrapping($url);
        $data_length = count($dom->find('li.item.product.product-item'));
        $price_current = $dom->find('span[@data-price-type="finalPrice"]');
        $link = $dom->find('a.product-item-link');
        $title = $dom->find('div.product.name');
        $image = $dom->find('img.product-image-photo');
        $data = [];
        for ($i = 0; $i < $data_length; $i++) {

            ($i > 0) ? $data[$i]['image'] = $image[$i]->attr['data-src'] : $data[$i]['image'] = $image[$i]->attr['src'];
            $data[$i]['title'] = $title[$i]->attr['title'];
            $data[$i]['url_product'] = $link[$i]->attr['href'];
            $data[$i]['price_current'] = $price_current[$i]->attr['data-price-amount'];
            $detail_product = $this->scrapping($link[$i]->attr['href']);
            $data[$i]['description'] = $detail_product->find('div#description')[0]->innertext;
        }

        $this->store($data, $url);
        return view('detail')->with('data', $data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($data, $url)
    {
        $product = Product::where('url', $url)->count();
        if (!$product) {
            foreach ($data as $value) {
                $store = new Product;
                $store->title = $value['title'];
                $store->image = $value['image'];
                $store->url_product = $value['url_product'];
                $store->url = $url;
                $store->price = $value['price_current'];
                $store->description = $value['description'];
                $store->save();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
}
