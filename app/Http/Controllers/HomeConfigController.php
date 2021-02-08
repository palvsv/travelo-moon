<?php

namespace App\Http\Controllers;
use App\AboutHome;
use App\WhyChoose;

use Illuminate\Http\Request;

class HomeConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $abouthome = AboutHome::find(1);
        // dd($abouthome);
        if(!empty($abouthome)) {
        $data = [
            'id'=> $abouthome->id,
            'title'=>$abouthome->title,
            'subtitle'=>$abouthome->subtitle,
            'description'=>$abouthome->description,
            'button_url'=>$abouthome->button_url,
            'button_text'=>$abouthome->button_text,
            'button_text'=>$abouthome->button_text
        ];

        // dd();
        return view('admin\Dashboard\about_home', compact('data'));
        }
        return view('admin\Dashboard\about_home');

    }

    public function getWhy(){
        $datawhy = WhyChoose::find(1);
        if(!empty($datawhy)) {
        $data = [
            'id'=> $datawhy->id,
            'title'=>$datawhy->title,
            'subtitle'=>$datawhy->subtitle,
            'item_one'=>$datawhy->item_one,
            'content_one'=>$datawhy->content_one,
            'item_two'=>$datawhy->item_two,
            'content_two'=>$datawhy->content_two,
            'item_three'=>$datawhy->item_three,
            'content_three'=>$datawhy->content_three,
            'item_four'=>$datawhy->item_four,
            'content_four'=>$datawhy->content_four,

        ];
        return view('admin\Dashboard\why_home', compact('data'));
    }
        return view('admin\Dashboard\why_home');

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeWhy(Request $request)
    {
        //
        // dd($request);
        if(empty($request->id))
        {

        $datawhy = new WhyChoose;
        $datawhy->title = $request->title;
        $datawhy->subtitle = $request->subtitle;

        $datawhy->item_one = $request->item_one;
        $datawhy->content_one = $request->content_one;

        $datawhy->item_two = $request->item_two;
        $datawhy->content_two = $request->content_two;

        $datawhy->item_three = $request->item_three;
        $datawhy->content_three = $request->content_three;

        $datawhy->item_four = $request->item_four;
        $datawhy->content_four = $request->content_four;
        $datawhy->save();
        }
        else{
            $this->editWhy($request , $request->id);
        }

        return redirect()->back()->with('success','Data Successfully Modified');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->id))
        {

        //
        // dd($request);
        $abouthome = new AboutHome;
        $abouthome->title = $request->title;
        $abouthome->subtitle = $request->subtitle;
        $abouthome->description = $request->content;
        $abouthome->button_url = $request->btnlink;
        $abouthome->button_text = $request->btnname;
        $abouthome->save();
        }
        else{
            $this->edit($request , $request->id);
        }

        return redirect()->back()->with('success','Data Successfully Modified');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($request, $id)
    {
        //
        // dd($id);
        $abouthome = AboutHome::find($id);
        $abouthome->title = $request->title;
        $abouthome->subtitle = $request->subtitle;
        $abouthome->description = $request->content;
        $abouthome->button_url = $request->btnlink;
        $abouthome->button_text = $request->btnname;
        $abouthome->update();
    }

    public function editWhy($request, $id)
    {
        //
        // dd($id);
        $abouthome = AboutHome::find($id);
        $abouthome->title = $request->title;
        $abouthome->subtitle = $request->subtitle;
        $abouthome->description = $request->content;
        $abouthome->button_url = $request->btnlink;
        $abouthome->button_text = $request->btnname;
        $abouthome->update();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
