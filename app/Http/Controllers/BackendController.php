<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\Contact;
use App\TextBlock;

class BackendController extends Controller
{
    //
    public function home()
    {
    	if ( view()->exists('backend.main') )
	    {
	    	$homePage = Main::all();

	    	$data = [
	    		'title' => 'Главная страница',
	    		'homePage' => $homePage
	    	];
	    	//dd($data);

	    	return view('backend.main', $data);
	    }

	    abort(404);
    }

        //
    public function contacts()
    {
        if ( view()->exists('backend.contacts') )
        {
            $contactsPage = Contact::all();

            $data = [
                'title' => 'Главная страница',
                'contactsPage' => $contactsPage
            ];
            //dd($data);

            return view('backend.contacts', $data);
        }

        abort(404);
    }

    public function products()
    {
        if ( view()->exists('backend.products') )
        {
            $maintext = TextBlock::where('blockname','products.maintext')->first();

            $data = [
                'title' => 'Главная страница',
                'maintext' => $maintext
            ];
            //dd($data);

            return view('backend.products', $data);
        }

        abort(404);
    }

    public function contactEdit($id) {

        $contact = Contact::select(['id','email','address','phone'])->where('id',$id)->first();
        $title = 'Главная страница';

        return view('backend.edit-contact')->with([
            'title'=>$title,
            'contact'=>$contact
        ]);  


    }

    public function contactUpdate(Request $request) {

            $this->validate($request, [
                'email' => 'sometimes|required|email',
                'phone' => 'required',
                'address' => 'required'
            ]);

            $email = $request->email;
            $phone = $request->phone;
            $address = $request->address;

            $id = $request->id;
            $contact = Contact::find($id);
            
            $contact->update([
                'email' => $email,
                'phone' => $phone,
                'address' => $address
            ]);

            $contact->save();

            return redirect('/admin/contacts');

    }

    public function homeAdd(Request $request)
    {
    	//post
    	if ($request->isMethod('post'))
    	{
    		$input = $request->except('_token');
    		$userMessage = [
    			'required' => 'Поле :attribute обязательно к заполнению',
    			'max' => 'Поле :attribute не должно превышать 255 символов'
    		];

    		$this->validate($request, [
    			'text' => 'required | max:255',
    			'images' => 'required | max:255'
    		], $userMessage);

    		if($this->validate()->fails())
    		{
    			return redirect()->route('homeAdd')->withErrors($this->validate())->withInput();
    		}

    		if($request->hasFile('images'))
    		{
    			$file = $request->file('images');
    			$input['images'] = $file->getClientOriginalName();
    			$file->move(public_path().'/images', $input['images']);
    		}

    		$home = new Home;
    		$home->fill($input);
    		//dd($input);
    		if($home->save())
    		{
    			return redirect('backend.main')->with('status', 'Информация добавлена');
    		}

    	}

    	//get
    	if(view()->exists('backend.home_add'))
    	{
    		$data = ['title' => 'Добавление новой информации'];
    		return view('backend.home_add', $data);
    	}
    }

    public function homeEdit($id) {

        $home = Main::select(['id','text','images'])->where('id',$id)->first();
        $title = 'Главная страница';

        return view('backend.edit-home')->with([
            'title'=>$title,
            'home'=>$home
        ]);  


    }

    public function homeUpdate(Request $request) {

        if(!$request->has('image')) {


            if(!empty($request->newImage)){
                $request->images = $request->newImage;
            }


            $this->validate($request, [
                'text' => 'required'
            ]);



            $text = $request->text;
            $images = $request->images;

            $id = $request->id;
            $home = Main::find($id);

            $home->update([
                'text' => $text,
                'images' => $images
            ]);

            $home->save();

            return redirect('/admin/home');

        } else {
            request()->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);



            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);

            $text = $request->input('text');

            return back()
                ->with('success','Изображение удачно загружено на сервер')
                ->with('image',$imageName)
                ->with('text',$text);
        }

    }

    public function textBlockUpdate(Request $request) {


            $this->validate($request, [
                'text' => 'required',
            ]);

            $text = $request->text;
            $id = $request->id;
            $textBlock = TextBlock::find($id);
            
            $textBlock->update([
                'text' => $text,
            ]);

            $textBlock->save();

            return redirect('/admin/products');

    }

}
