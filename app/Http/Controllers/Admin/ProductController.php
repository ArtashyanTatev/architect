<?php

namespace App\Http\Controllers\Admin;

use App\models\Comment;
use App\models\Gallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index($link)
    {
        $c = Category::where('link', $link)->firstOrFail();
        $products = $c->products;

        return view('admin.products', ['products' => $products]);
    }


    public function create_product(Request $request)
    {

        if ($request->key && $request->key == 'one') {
            return View::make('admin.create.create_product');
        }


        if (!$request->image || $request->file('image')) {
            $this->validate($request, [
                'image' => 'required',
                'image.*' => 'image|mimes:jpeg,JPEG,png,jpg,JPG,gif,svg'
            ]);
        }

            $cat = explode('/', URL::previous());
            $cat = end($cat);

            $catId = DB::table('categories')->where('link', $cat)->pluck('id')->first();
            $parentId = Product::insertGetId([
                'title_hy' => $request->title_hy,
                'title_en' => $request->title_en,
                'title_ru' => $request->title_ru,
                'description_hy' => $request->description_hy,
                'description_en' => $request->description_en,
                'description_ru' => $request->description_ru,
                'parent_id' => $catId,
            ]);
            $files = $request->file('image');
            $folderName = '/img/';
            $names = [];
            $count = count($files);

            for ($i = $count - 1; $i > -1; $i--) {
                $names[$i] = $files[$i]->getClientOriginalName();
                if (file_exists(public_path() . $folderName . '/' . $names[$i])) {
                    $names[$i] = rand(0, 9999) . $names[$i];
                }
                $files[$i]->move(public_path() . $folderName, $names[$i]);
                Gallery::create([
                    'image' => $names[$i],
                    'product_id' => $parentId]);
            }
            return back();

        }


    public function view_product(Request $request)
    {

        $product = Product::where('id', $request->id)->first();


//        $rnd_products = Product::all()->random(4);
        $rnd_products = Product::inRandomOrder()->where('id','!=', $request->id)->limit(4)->get();




        $has_comments = Comment::where('product_id', $request->id)->get();
        $images = Gallery::where('product_id', $request->id)->get();

        return view('admin/single', [
            'product' => $product,
            'rnd_products' => $rnd_products,
            'has_comments' => $has_comments,
            'images' => $images
        ]);

    }


    public function comment(Request $request)
    {

        if (!$request->comment) {
            $this->validate($request, [
                'comment' => 'required'
            ]);
        }

        $id = $request->id;

        $rec = Comment::create([
            'name' => 'ADMIN',
            'email' => 'ADMIN@GMAIL.COM',
            'site' => 'http://architect.dev',
            'comment' => $request->comment,
            'product_id' => $request->id,
        ]);

        if ($rec) {
            return response()->json($rec);
        }


    }


    public function delete_product(Request $request)
    {
        if ($request->key && $request->key == 'image'){
            $deletedImage = Gallery::where('id', $request->prod)->delete();
            return 1;
        }

        $id = $request->id;
        if ($request->key && $request->key == 'one') {
            $res = Product::find($id);
            return View::make('admin.delete.delete_product', ['res' => $res]);
        } else {
            $deletedRow = Product::where('id', $request->id)->delete();

            $img = Gallery::where('product_id', $request->id);
            foreach ($img as $i) {
                $filename = public_path() . '/img/' . $i->image;
                File::delete(public_path() . '/img/' . $filename);
            }

            $img->delete();
            if ($deletedRow) return 1;
        }
    }



    public function update_product(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        if ($request->key && $request->key == 'one') {

            return View::make('admin.update.update_product', [
                'product' => $product
            ]);
        }

        if ($request->image_name) {

            $image_name = $request->image_name;
            $images = Gallery::where('product_id', $product->id)->orderBy('id')->get();
            $i = 0;
            foreach ($images as $image) {
                $image->image = $image_name[$i];
                $image->save();
                $i++;
            }
        }
        if (!$request->image_name || $files = $request->file('image')) {
            $this->validate($request, [
                'image' => 'required',
                'image.*' => 'image|mimes:jpeg,JPEG,png,jpg,JPG,gif,svg'
            ]);
        }

        if ($request->file('image')) {
            $files = $request->file('image');
            $folderName = '/img';
            $names = [];
            $count = count($files);
            for ($i = $count - 1; $i > -1; $i--) {
                $names[$i] = $files[$i]->getClientOriginalName();
                if (file_exists(public_path() . $folderName . '/' . $names[$i])) {
                    $names[$i] = rand(0, 9999) . $names[$i];
                }
                $files[$i]->move(public_path() . $folderName, $names[$i]);
                Gallery::create([
                    'image' => $names[$i],
                    'product_id' => $product->id
                ]);
            }
        }
        $prodUpdate = Product::where('id', $request->id)->update([
            'title_hy' => $request->title_hy,
            'title_en' => $request->title_en,
            'title_ru' => $request->title_ru,
            'description_hy' => $request->description_hy,
            'description_en' => $request->description_en,
            'description_ru' => $request->description_ru,
        ]);
        return back();

    }

}
