<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFAQRequest;
use App\Http\Requests\UpdateFAQRequest;
use App\Models\FAQ;
use Illuminate\Http\Request;
use App\Models\FaqCategory;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected  $except = [ '/upload' ];

    public function index()
    {
// $tickets = Ticket::where('user_id', Auth::user()->id)->take(7)->get();
  //      $klant = Klant::where('user_id', Auth::user()->id)->first();
        $faqs = FAQ::all();
        $faqCategories = FaqCategory::all();
        return view('faq.index', ['faqs'=>$faqs, 'faqCategorys' => $faqCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faqCategories = FaqCategory::all();
        return view('faq.create', ['faqCategorys' => $faqCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFAQRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFAQRequest $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $description = $request->description;

        $dom = new \DomDocument();

        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= "/upload/" . time().$k.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();
        $fileUpload = new FAQ;
        $fileUpload->faq_category_id = $request->category;
        $fileUpload->moeilijke = 5;
        $fileUpload->title = $request->title;
        $fileUpload->description = $content;
        $fileUpload->save();
        return redirect()->route('faq.show', $fileUpload->id );
    //    dd($content);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show($id,FAQ $fAQ)
    {
        $faq = FAQ::where('id', $id)->first();
        $faqCategories = FaqCategory::all();
        return view('faq.show', ['faq'=>$faq, 'faqCategorys' => $faqCategories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit($id,FAQ $fAQ)
    {
        $faq = FAQ::where('id', $id)->first();
        $faqCategories = FaqCategory::all();
        return view('faq.edit', ['faq'=>$faq, 'faqCategorys' => $faqCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFAQRequest  $request
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateFAQRequest $request, FAQ $fAQ)
    {
        //dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $description = $request->description;

        $dom = new \DomDocument();

        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= "/upload/" . time().$k.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();
        $fileUpload = FAQ:whare('id' -> $id);
        $fileUpload->faq_category_id = $request->category;
        $fileUpload->moeilijke = 5;
        $fileUpload->title = $request->title;
        $fileUpload->description = $content;
        $fileUpload->save();
        return redirect()->route('faq.show', $fileUpload->id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQ $fAQ)
    {
        //
    }
}
