<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Section_2;
use App\models\Section_3;
use App\models\Section_5;
use App\models\Section_6;
use Illuminate\Support\Facades\Mail;
use App\models\Category;
use App\models\Comment;
use App\models\AboutUs;
use App\models\OurMission;
use App\models\MissionList;
use App\models\UpcomingTitle;
use App\models\NewestRelease;
use App\Models\Product;
use App\models\News;
use App\models\ContactTitle;
use App\models\Gallery;

class HomeController extends Controller
{

    public function index()
    {
        $section_2 = Section_2::where('id',1)->first();
        $section_3 = Section_3::where('id',1)->first();
        $section_5 = Section_5::where('id',1)->first();
        $section_6 = Section_6::where('id',1)->first();
        $products = Product::orderBy('id', 'desc')->take(8)->get();

        return view('home',[
            'section_2'=>$section_2,
            'section_3'=>$section_3,
            'section_6'=>$section_6,
            'section_5'=>$section_5,
            'products'=>$products

        ]);
    }

    public function aboutus()
    {
        $about_us = AboutUs::where('id',1)->first();
        $our_mission = OurMission::where('id',1)->first();
        $mission_list = MissionList::all();
        $upcoming_works = UpcomingTitle::where('id',1)->first();
        $newest_release = NewestRelease::where('id',1)->first();

        return view('aboutus',[
            'about_us' => $about_us,
            'our_mission' => $our_mission,
            'mission_list' => $mission_list,
            'upcoming_works' => $upcoming_works,
            'newest_release' => $newest_release
        ]);
    }


    public function contactus()
    {
        $contact_title = ContactTitle::where('id',1)->first();

        return view('contactus',[
            'contact_title' => $contact_title
        ]);
    }

    public function news()
    {
        $news = News::orderBy('id','desc')->get();

        return view('news', [
            'news' => $news,
        ]);
    }


    public function category($link)
    {
        $c = Category::where('link', $link)->firstOrFail();
        $products = $c->products;

        return view('gallery', ['products' => $products]);
    }


    public function send_email(Request $request){
        $name = $request->name;
        $email = $request->email;
        $number = $request->phone;
        $text = $request->text;

//        dd($request->text);

        try{

            Mail::send('admin.email', [
                'email'=>$email,
                'name'=>$name,
                'number'=>$number,
                'text' => $text
            ], function ($message) use ($email, $name, $number, $text) {
                $message->to(getenv('MAIL_USERNAME'));
                $message->from($email, $name);
            });

            return back()->with("success", "Your Email Was Sent Successfully");
        } catch (\Exception $e){
            return back()->with("error", "Your Email Was Not Sent");
        }
    }


    public  function view_product_user(Request $request){

        $product = Product::where('id', $request->id)->first();
        $rnd_products = Product::all()->random(4);
        $has_comments = Comment::where('product_id', $request->id)->orderBy('id','desc')->get();
        $images = Gallery::where('product_id', $request->id)->get();

        return view('single',[
            'product'=>$product,
            'rnd_products'=>$rnd_products,
            'has_comments'=>$has_comments,
            'images'=>$images
        ]);

    }

    public function user_comment(Request $request){

        if (!$request->comment || !$request->author) {
            $this->validate($request, [
                'comment' => 'required'
            ]);
        }

        $rec = Comment::create([
            'name' => $request->author,
            'email' => $request->email,
            'site' => $request->url,
            'comment' => $request->comment,
            'product_id' => $request->id,
        ]);

        if ($rec){
            return response()->json($rec);
        }

    }

    public function view_news(Request $request)
    {
        $news = News::where('id',$request->id)->first();

        return view('_view_news', ['news' => $news]);
    }






}
