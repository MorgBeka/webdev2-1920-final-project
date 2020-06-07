<?php

namespace App\Http\Controllers;

use App\About as AppAbout;
use Illuminate\Http\Request;
use App\About; //ophalen model (model bevat de data)
use App\News;
use App\Privacy;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    // about
    public function about(){
        $about = About::all(); //data in een variabele steken
        return view('admin.adminAbout')->with(compact('about')); //with compact = meegeven naar view
    }

    public function aboutCreate(){
        return view('admin.creates.createAbout');
    }

    public function aboutSave(Request $request){

        $rules= [
            'file'=>'required',
            'file.*'=> 'image|mimes:jpeg,png,gif,svg,jpg|',
        ];



        \request()->validate([
            'content' => 'required',
            'summary' => 'required',
        ]);



        $validator=Validator::make($request->all(), $rules);


        if($validator->fails()) {
            return Redirect::back()
            ->withInput()
            ->withErrors($validator)
            ->with(
                [
                    'notification'=>'succes',
                    'message'=>'Er ging iets mis'
                ]
            );
        }

        if($request->hasFile('file')) {
            // folder van de afbeeldingen

            $directory = '/images';

            foreach($request->file('file') as $image) {
                $name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $filename = pathinfo($name, PATHINFO_FILENAME).'-'.uniqid(5).'.'.$extension;
                $image->storeAs($directory, $filename, 'public');

                $this->storeImageToDatabase($request->title, $request->content, $request->summary, $filename, 'storage'.$directory);


                $about = About::all();
                return view('admin.adminAbout')->with(compact('about'));
            }

            return back()->with([
                'notification' => 'succes',
                'message'=>"het uploaden is succesvolgeladen"
            ]);


        }
    }

    private function storeImageToDatabase($title, $content, $summary, $filename, $filepath) {
        $image = new About();
        $image->imageTitle = $filename;
        $image->imagePath = $filepath;

        $image->title= $title;
        $image->content= $content;
        $image->summary= $summary;

        $image->save();


    }


    public function aboutEdit($about_id){
        $about = About::where('id', $about_id)->first();

        return view('admin.edits.editAbout')->with(compact('about'));



    }

    public function aboutUpdate($about_id, Request $request){


        $about = About::where('id', $about_id)->first();

        $rules= [
            'file.*'=> 'image|mimes:jpeg,png,gif,svg,jpg|',
        ];

        $data = [
            'title' => request('title'),
            'content' => request('content'),
            'summary' => request('summary'),
        ];

        $validator=Validator::make($request->all(), $rules);



        if($validator->fails()) {
            return Redirect::back()
            ->withInput()
            ->withErrors($validator)
            ->with(
                [
                    'notification'=>'succes',
                    'message'=>'Er ging iets mis'
                ]
            );
        }



        if($request->hasFile('file')) {
            // folder van de afbeeldingen

            $directory = '/images';

            foreach($request->file('file') as $image) {
                $name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $filename = pathinfo($name, PATHINFO_FILENAME).'-'.uniqid(5).'.'.$extension;
                $image->storeAs($directory, $filename, 'public');

                $this->updateImageToDatabase($about, $request->title, $request->content, $request->summary, $filename, 'storage'.$directory);

                $about = About::all();
                return view('admin.adminAbout')->with(compact('about'));
            }
        }

        $about = About::all();

        return view('admin.adminAbout')->with(compact('about'));

    }

    private function updateImageToDatabase($about, $title, $content, $summary, $filename, $filepath) {


        $about->imageTitle = $filename;
        $about->imagePath = $filepath;

        $about->title= $title;
        $about->content= $content;
        $about->summary= $summary;

        $about->update();


    }


    public function aboutDelete($about_id){
        $about =About::where('id', $about_id)->delete();
        $about = About::all();
        return view('admin.adminAbout')->with(compact('about'));

    }


    // news

    public function news(){
        $news = News::all(); //data in een variabele steken
        return view('admin.adminNews')->with(compact('news')); //with compact = meegeven naar view
    }

    public function newsCreate(){
        return view('admin.creates.createNews');
    }

    public function newsSave(Request $request){

        \request()->validate([
            'content' => 'required',
            'summary' => 'required',
        ]);

        $data = [
            'title' => request('title'),
            'content' => request('content'),
            'summary' => request('summary'),
        ];

        News::create($data);

        $news = News::all();
        return view('pages.news')->with(compact('news'));
    }

    public function newsEdit($news_id){
        $news = News::where('id', $news_id)->first();

        return view('admin.edits.editNews')->with(compact('news'));
    }


    public function newsUpdate($news_id){
        $news = News::where('id', $news_id)->first();

        $data = [
            'title' => request('title'),
            'content' => request('content'),
            'summary' => request('summary'),
        ];

        $news->update($data);
        $news = News::all();

        return view('admin.adminNews')->with(compact('news'));
    }

    public function newsDelete($news_id){
        $news =News::where('id', $news_id)->delete();
        $news = News::all();
        return view('admin.adminNews')->with(compact('news'));
    }



     // privacy
     public function privacy(){
        $privacy = Privacy::all(); //data in een variabele steken
        return view('admin.adminPrivacy')->with(compact('privacy')); //with compact = meegeven naar view
    }

    public function privacyCreate(){
        return view('admin.creates.createPrivacy');
    }

    public function privacySave(Request $request){
        \request()->validate([
            'content' => 'required',
            'summary' => 'required',
        ]);

        $data = [
            'title' => request('title'),
            'content' => request('content'),
            'summary' => request('summary'),
        ];


        Privacy::create($data);

        $privacy = Privacy::all();
        return view('pages.privacy')->with(compact('privacy'));

    }

    public function privacyEdit($privacy_id){
        $privacy = Privacy::where('id', $privacy_id)->first();


        return view('admin.edits.editPrivacy')->with(compact('privacy'));

    }

    public function privacyUpdate($privacy_id){
        $privacy = Privacy::where('id', $privacy_id)->first();

        $data = [
            'title' => request('title'),
            'content' => request('content'),
            'summary' => request('summary'),
        ];

        $privacy->update($data);
        $privacy = Privacy::all();

        return view('admin.adminPrivacy')->with(compact('privacy'));

    }

    public function privacyDelete($privacy_id){
        $privacy =Privacy::where('id', $privacy_id)->delete();
        $privacy = Privacy::all();
        return view('admin.adminPrivacy')->with(compact('privacy'));

    }


}