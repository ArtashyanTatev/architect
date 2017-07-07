<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\models\Section_2;
use App\models\Section_3;
use App\models\Section_4;
use App\models\Section_5;
use App\models\Section_6;
use App\models\Section_7;
use App\models\Category;
use App\models\AboutUs;
use App\models\OurMission;
use App\models\MissionList;
use App\models\Unpublish;
use App\models\UpcomingTitle;
use App\models\NewestRelease;
use App\models\News;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Section_1;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\models\ContactTitle;
use App\User;


class AdminController extends Controller
{
    public function index()
    {
        $section_2 = Section_2::where('id', 1)->first();
        $section_3 = Section_3::where('id', 1)->first();
        $section_5 = Section_5::where('id', 1)->first();
        $section_6 = Section_6::where('id', 1)->first();
        $products = Product::orderBy('id', 'desc')->take(8)->get();

        return view('admin/home', [
            'section_2' => $section_2,
            'section_3' => $section_3,
            'section_5' => $section_5,
            'section_6' => $section_6,
            'products' => $products,
        ]);
    }


    public function contacts_title(Request $request)
    {

        $res = ContactTitle::find(1);

        if ($request->key && $request->key == 'one') {

            return View::make('admin.update.contacts_title', ['res' => $res]);
        } else {
            $title = ContactTitle::where('id', 1)->update([
                'title_hy' => $request->title_hy,
                'title_ru' => $request->title_ru,
                'title_en' => $request->title_en,
                'fs' => $request->fs,
            ]);
            return back();
        }
    }


    public function contactus()
    {
        $contact_title = ContactTitle::where('id', 1)->first();
        return view('admin/contactus', ['contact_title' => $contact_title]);
    }


    public function update_6(Request $request)
    {
        $res = Section_6::find(1);

        if ($request->key && $request->key == 'one') {
            return View::make('admin.update.updateSection_6', ['res' => $res]);
        }

        if ($request->image) {
            $data = $request->image;
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $imageName = time() . '.jpg';
            file_put_contents('img/' . $imageName, $data);
        }else {
            $imageName = $res->image;
        }

        $title = Section_6::where('id', 1)->update([
            'title_hy' => $request->title_hy,
            'title_en' => $request->title_en,
            'title_ru' => $request->title_ru,
            'li1_hy' => $request->l1_hy,
            'li1_en' => $request->l1_en,
            'li1_ru' => $request->l1_ru,
            'li2_hy' => $request->l2_hy,
            'li2_ru' => $request->l2_ru,
            'li2_en' => $request->l2_en,
            'li3_hy' => $request->l3_hy,
            'li3_ru' => $request->l3_ru,
            'li3_en' => $request->l3_en,
            'li4_hy' => $request->l4_hy,
            'li4_ru' => $request->l4_ru,
            'li4_en' => $request->l4_en,
            'li5_hy' => $request->l5_hy,
            'li5_ru' => $request->l5_ru,
            'li5_en' => $request->l5_en,
            'fs' => $request->fs,
            'image' => $imageName,
        ]);

        return back();
    }

    public function update_category(Request $request)
    {
        $id = $request->id;
        $res = Category::find($id);

        if ($request->key && $request->key == 'one') {
            return View::make('admin.update.update_category', ['res' => $res]);
        }


        if ($request->image) {
            $data = $request->image;
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $imageName = time() . '.jpg';
            file_put_contents('img/prod/' . $imageName, $data);
        }else {
            $imageName = $res->image;
        }

        $new_link = str_replace(' ', '-', mb_strtolower($request->name_en));

        $category = Category::where('id', $id)->update([
            'name_en' => $request->name_en,
            'name_ru' => $request->name_ru,
            'name_hy' => $request->name_hy,
            'image' => $imageName,
            'link' => $new_link
        ]);

        return back();
    }

    public function aboutus_1(Request $request)
    {
        $res = AboutUs::find(1);

        if ($request->key && $request->key == 'one') {
            return View::make('admin.update.aboutus_update_1', ['res' => $res]);
        }

        if ($request->image) {
            $data = $request->image;
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $imageName = time() . '.jpg';
            file_put_contents('img/' . $imageName, $data);
        }else {
            $imageName = $res->image;
        }

        $tmp = AboutUs::where('id', 1)->update([
            'title_hy' => $request->title_hy,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'header_hy' => $request->header_hy,
            'header_ru' => $request->header_ru,
            'header_en' => $request->header_en,
            'decsription_hy' => $request->decsription_hy,
            'decsription_ru' => $request->decsription_ru,
            'decsription_en' => $request->decsription_en,
            'l1_hy' => $request->l1_hy,
            'l1_ru' => $request->l1_ru,
            'l1_en' => $request->l1_en,
            'l2_hy' => $request->l2_hy,
            'l2_ru' => $request->l2_ru,
            'l2_en' => $request->l2_en,
            'l3_hy' => $request->l3_hy,
            'l3_ru' => $request->l3_ru,
            'l3_en' => $request->l3_en,
            'l4_hy' => $request->l4_hy,
            'l4_ru' => $request->l4_ru,
            'l4_en' => $request->l4_en,
            'l5_hy' => $request->l5_hy,
            'l5_ru' => $request->l5_ru,
            'l5_en' => $request->l5_en,
            'l6_hy' => $request->l6_hy,
            'l6_ru' => $request->l6_ru,
            'l6_en' => $request->l6_en,
            'l7_hy' => $request->l7_hy,
            'l7_ru' => $request->l7_ru,
            'l7_en' => $request->l7_en,
            'fs' => $request->fs,
            'image' => $imageName
        ]);

        return back();
    }


    public function update_1(Request $request)
    {

        $res = Section_1::find(1);
        if ($request->key && $request->key == 'one') {
            return View::make('admin.update.updateSection_1', ['res' => $res]);
        }

        if ($request->image) {
            $data = $request->image;
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $imageName = time() . '.jpg';
            file_put_contents('img/slider/' . $imageName, $data);
        }else {
            $imageName = $res->image;
        }

        $img = Section_1::where('id', 1)->update([
            'image' => $imageName
        ]);


        return back();
    }


    public function newest_releases(Request $request)
    {
        $res = NewestRelease::find(1);

        if ($request->key && $request->key == 'one') {

            return View::make('admin.update.newest_releases_update', ['res' => $res]);
        }

        if ($request->image) {
            $data = $request->image;
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $imageName = time() . '.jpg';
            file_put_contents('img/' . $imageName, $data);
        }else {
            $imageName = $res->image;
        }


        $tmp = NewestRelease::where('id', 1)->update([
            'title_hy' => $request->title_hy,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'header_hy' => $request->header_hy,
            'header_ru' => $request->header_ru,
            'header_en' => $request->header_en,
            'description_hy' => $request->description_hy,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'fs' => $request->fs,
            'image' => $imageName
        ]);

        return back();
    }


    public function ourmission_update(Request $request)
    {
        $res = OurMission::find(1);

        if ($request->key && $request->key == 'one') {
            return View::make('admin.update.ourmission_update', ['res' => $res]);
        }

        if ($request->image) {
            $data = $request->image;
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $imageName = time() . '.jpg';
            file_put_contents('img/' . $imageName, $data);
        }else {
            $imageName = $res->image;
        }

        $title = OurMission::where('id', 1)->update([
            'title_hy' => $request->title_hy,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'fs' => $request->fs,
            'image' => $imageName
        ]);

        return back();
    }


    public function update_3(Request $request) //edit title
    {
        $section_3 = Section_3::where('id', 1)->first();
        if ($request->key && $request->key == 'one') {
            $res = Section_3::find(1);
            return View::make('admin.update.updateSection_3', ['res' => $res, 'section_3' => $section_3]);
        } else {
            $title = Section_3::where('id', 1)->update([
                'title_hy' => $request->title_hy,
                'title_ru' => $request->title_ru,
                'title_en' => $request->title_en,
                'fs' => $request->fs,
            ]);

            return back();
        }
    }


    public function update_2(Request $request)
    {

        $section_2 = Section_2::where('id', 1)->first();
        $res = Section_2::find(1);
        if ($request->key && $request->key == 'one') {
            return View::make('admin.update.updateSection_2', ['res' => $res, 'section_2' => $section_2]);
        }


        if ($request->image) {
            $data = $request->image;
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $imageName = time() . '.jpg';
            file_put_contents('img/' . $imageName, $data);
        }else {
            $imageName = $res->image;
        }
           if ($request->image1) {
            $data1 = $request->image1;
            list($type, $data1) = explode(';', $data1);
            list(, $data1) = explode(',', $data1);

            $data1 = base64_decode($data1);
            $imageName1 = time() . '1.jpg';
            file_put_contents('img/' . $imageName1, $data1);
        }else {
            $imageName1 = $res->image1;
        }

        $data = Section_2::where('id', 1)->update([
            'image' => $imageName,
            'logo' => $imageName1,
            'title_hy' => $request->title_hy,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_hy' => $request->description_hy,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'fs' => $request->fs,
        ]);
        return back();
    }





    public function news_modal(Request $request) //update
    {
        $id = $request->id;
        $res = News::find($id);

        if ($request->key && $request->key == 'one') {
            return View::make('admin.update.news_update', ['res' => $res]);
        }

        if ($request->image) {
            $data = $request->image;
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $imageName = time() . '.jpg';
            file_put_contents('img/' . $imageName, $data);
        }else {
            $imageName = $res->image;
        }


        $title = News::where('id', $id)->update([
            'header_hy' => $request->header_hy,
            'header_en' => $request->header_en,
            'header_ru' => $request->header_ru,
            'image' => $imageName,
            'text_hy' => $request->text_hy,
            'text_en' => $request->text_en,
            'text_ru' => $request->text_ru
        ]);

        return back();
    }



    public function create_news(Request $request)
    {
        if ($request->key && $request->key == 'one') {
            return View::make('admin.create.create_news');
        }

        $this->validate($request, [

            'text_hy' => 'required',
            'text_ru' => 'required',
            'text_en' => 'required',
            'header_hy' => 'required',
            'header_ru' => 'required',
            'header_en' => 'required',
        ]);
        if ($request->image) {
            $data = $request->image;
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $imageName = time() . '.jpg';
            file_put_contents('img/' . $imageName, $data);
        }else {
            $imageName = $request->image;
        }


        $rec = News::create([
            'text_hy' => $request->text_hy,
            'text_en' => $request->text_en,
            'text_ru' => $request->text_ru,
            'header_hy' => $request->header_hy,
            'header_en' => $request->header_en,
            'header_ru' => $request->header_ru,
            'image' => $imageName,
        ]);
        if ($rec){
            return back();
        }


    }


    public function update_4(Request $request)
    {
    }


    public function update_5(Request $request)
    {
        if ($request->key && $request->key == 'one') {
            $res = Section_5::find(1);
            return View::make('admin.update.updateSection_5', ['res' => $res]);
        } else {
            $title = Section_5::where('id', 1)->update([
                'title_hy' => $request->title_hy,
                'title_en' => $request->title_en,
                'title_ru' => $request->title_ru,
                'fs' => $request->fs,
            ]);
            return back();
        }
    }



    public function update_7(Request $request)
    {
    }


    /* about us */


    public function aboutus(Request $request)
    {
        $about_us = AboutUs::where('id', 1)->first();
        $aboutus = MissionList::get();
        $our_mission = OurMission::where('id', 1)->first();
        $upcoming_works = UpcomingTitle::where('id', 1)->first();
        $newest_release = NewestRelease::where('id', 1)->first();

        return view('admin/aboutus', [
            'aboutus' => $aboutus,
            'about_us' => $about_us,
            'our_mission' => $our_mission,
            'upcoming_works' => $upcoming_works,
            'newest_release' => $newest_release
        ]);
    }



    public function missionlist_update(Request $request)
    {
        $id = $request->id;
        if ($request->key && $request->key == 'one') {
            $res = MissionList::find($id);
            return View::make('admin.update.missionlist_update', ['res' => $res]);
        } else {
            $title = MissionList::where('id', $id)->update([
                'title_hy' => $request->title_hy,
                'title_ru' => $request->title_ru,
                'title_en' => $request->title_en,
                'description_hy' => $request->description_hy,
                'description_ru' => $request->description_ru,
                'description_en' => $request->description_en
            ]);
            return back();
        }
    }


    public function upcoming_title(Request $request)
    {
        if ($request->key && $request->key == 'one') {
            $res = UpcomingTitle::find(1);
            return View::make('admin.update.upcoming_title', ['res' => $res]);
        } else {
            $title = UpcomingTitle::where('id', 1)->update([
                'title_hy' => $request->title_hy,
                'title_ru' => $request->title_ru,
                'title_en' => $request->title_en,
                'fs' => $request->fs,
            ]);
            return back();
        }

    }




    /* News */


    public function news(Request $request)
    {
        $news = News::orderBy('id', 'desc')->get();
        return view('admin/news', ['news' => $news]);
    }


    public function view_news(Request $request)
    {
        $news = News::where('id', $request->id)->first();

        return view('admin/view_news', ['news' => $news]);
    }


    public function delete_news(Request $request)
    {
        $id = $request->id;
        if ($request->key && $request->key == 'one') {
            $res = News::find($id);
            return View::make('admin.delete.delete_news', ['res' => $res]);
        } else {
            $new = News::where('id', $request->id)->first();
            $deletedRow = News::where('id', $request->id)->delete();
            $filename = public_path() . '/img/' . $new->image;
            File::delete($filename);
            if ($deletedRow) return 1;
        }
    }

    public function delete_logo(){

        $section_2 = Section_2::where('id', 1)->update([
            'logo' => ''
        ]);

        return back();
    }

    public function delete(Request $request){
        if ($request->pass == 108){
            return view('admin/unpublish/unpublish_all');
        }
         return back();

    }

    public function unpublish(){
        $tmp = Unpublish::where('id',1)->update([
            'flag'=>0
        ]);
    }

    public function publish(){
        $tmp = Unpublish::where('id',1)->update([
            'flag'=>1
        ]);
    }

    public function owner(Request $request)
    {
            return view('owner');
    }

    public function pay(Request $request)
    {
        return view('admin/unpublish/pay');
    }

    public function changeLogin(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|max:150',
            'password' => 'required|confirmed|min:6',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $result = User::where('id', 1)->update([
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        if ($result){
            return redirect()->back()->with('success', 'Login and password changes');
        }
    }


}