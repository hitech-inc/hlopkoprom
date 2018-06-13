<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;


class AboutController extends Controller
{

    public function about()
    {
        if ( view()->exists('backend.about') )
        {
            $aboutPage = About::all();

            $data = [
                'title' => 'Главная страница',
                'aboutPage' => $aboutPage
            ];


            return view('backend.about', $data);
        }

        abort(404);
    }

	public function aboutAdd() {
        $title = 'Главная страница';
        return view('backend.add-about')->with(['title'=>$title]);
    }

    public function aboutEdit($id) {

        $about = About::select(['id','short','text','images','year'])->where('id',$id)->first();
        $title = 'Главная страница';

        return view('backend.edit-about')->with([
            'title'=>$title,
            'about'=>$about
        ]);       

    }

    public function aboutUpdate(Request $request) {

        if(!$request->has('image')) {


            if(!empty($request->newImage)){
                $request->images = $request->newImage;
            }


            $this->validate($request, [
                'short' => 'required',
                'year' => 'required|max:50',
                'text' => 'required'
            ]);



            $short = $request->short;
            $text = $request->text;
            $year = $request->year;
            $images = $request->images;

            $id = $request->id;
            $about = About::find($id);

            $about->update([
                'short' => $short,
                'text' => $text,
                'year' => $year,
                'images' => $images
            ]);

            $about->save();

            return redirect('/admin/about');

        } else {
            request()->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);



            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);


            $short = $request->input('short'); 
            $year = $request->input('year'); 
            $text = $request->input('text');

            return back()
                ->with('success','Изображение удачно загружено на сервер')
                ->with('image',$imageName)
                ->with('short',$short)
                ->with('year',$year)
                ->with('text',$text);
        }

    }

    public function aboutSave(Request $request) {

        if(!$request->has('image')) {
            $this->validate($request, [
                'images' => 'required',
                'short' => 'required',
                'year' => 'required|max:50',
                'text' => 'required'
            ]);

            $data = $request->all();

            $about = new About;
            $about->fill($data);


            $about->save();

            return redirect('/admin/about');
        } else {
            request()->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);



            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);

            $short = $request->input('short'); 
            $year = $request->input('year'); 
            $text = $request->input('text');

            return back()
                ->with('success','Изображение удачно загружено на сервер')
                ->with('image',$imageName)
                ->with('short',$short)
                ->with('year',$year)
                ->with('text',$text);


        }


    }

    public function aboutDelete(Request $request) {
        //return $request->all();
            $id = $request->id;
            $about = About::find($id);
            $image_path = $about->images;
            $about->delete();
            unlink(public_path('images/' . $image_path));


    }

}