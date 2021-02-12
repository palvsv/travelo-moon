<?php

namespace App\Http\Controllers;
use App\AboutHome;
use App\WhyChoose;
use App\HomeHoliday;
use App\PerfectHoliday;
use App\ClientTestimonial;

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
            'button_text'=>$abouthome->button_text,
            'image_id'=>$abouthome->image_id,

        ];

        // dd();
        return view('admin.Dashboard.about_home', compact('data'));
        }
        return view('admin.Dashboard.about_home');

    }



    public function getWhy(){
        $datawhy = WhyChoose::find(1);
        if(!empty($datawhy)) {
        $data = [
            'id'=> $datawhy->id,
            'title'=>$datawhy->title,
            'subtitle'=>$datawhy->subtitle,
            'featured_image'=> $datawhy->featured_image,
            'item_one'=>$datawhy->item_one,
            'content_one'=>$datawhy->content_one,
            'image_one'=>$datawhy->image_one,
            'item_two'=>$datawhy->item_two,
            'content_two'=>$datawhy->content_two,
            'image_two'=>$datawhy->image_two,
            'item_three'=>$datawhy->item_three,
            'content_three'=>$datawhy->content_three,
            'image_three'=>$datawhy->image_three,
            'item_four'=>$datawhy->item_four,
            'content_four'=>$datawhy->content_four,
            'image_four'=>$datawhy->image_four,

        ];
        return view('admin.Dashboard.why_home', compact('data'));
    }
        return view('admin.Dashboard.why_home');

    }


    public function getHoliday(){
        $hh = HomeHoliday::all();
        return view('admin.Dashboard.home_holiday',compact('hh'));
    }

    public function getPerfect(){

        $pp = PerfectHoliday::all();
        // dd($pp);
        return view('admin.Dashboard.perfect_place',compact('pp'));
    }

    public function getTestimonial(){

        $ct = ClientTestimonial::all();
        return view('admin.Dashboard.Testimonial',compact('ct'));
    }

    public function PerfectCreate(){

        return view('admin.Dashboard.PerfectPlace.create');

    }
    public function TestimonialCreate(){

        return view('admin.Dashboard.Testimonial.create');

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
        $datawhy->featured_image = $request->featured_image;

        $datawhy->item_one = $request->item_one;
        $datawhy->content_one = $request->content_one;
        $datawhy->image_one = $request->image_one;

        $datawhy->item_two = $request->item_two;
        $datawhy->content_two = $request->content_two;
        $datawhy->image_two = $request->image_two;

        $datawhy->item_three = $request->item_three;
        $datawhy->content_three = $request->content_three;
        $datawhy->image_three = $request->image_three;

        $datawhy->item_four = $request->item_four;
        $datawhy->content_four = $request->content_four;
        $datawhy->image_four = $request->image_four;

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

    public function Holidaystore(Request $request,$id)
    {

        $hh = HomeHoliday::find($id);
        $hh->image_id = $request->place_image;
        $hh->place_name = $request->place_name;
        $hh->image_pos = $request->position;
        $hh->url = $request->url;
        $hh->update();

        return redirect()->back()->with('success','Data Successfully Modified');
    }

    public function Perfectstore(Request $request)
    {
        $pp =  new PerfectHoliday;
        $pp->place_name = $request->place_name;
        $pp->image_id = $request->place_image;
        $pp->url = $request->url;
        $pp->save();

        return redirect()->back()->with('success','Place has been created Successfully.');
    }
    public function Testimonialstore(Request $request)
    {
        $ct =  new ClientTestimonial;
        $ct->name = $request->name;
        $ct->content = $request->content;
        $ct->image_id = $request->image_id;
        $ct->save();

        return redirect()->back()->with('success','Testimonial has been added Successfully.');
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
        $abouthome->image_id = $request->image_id;
        $abouthome->update();
    }

    public function editWhy($request, $id)
    {
        //
        // dd($id);
        $datawhy = WhyChoose::findOrFail($id);
        $datawhy->title = $request->title;
        $datawhy->subtitle = $request->subtitle;
        $datawhy->featured_image = $request->featured_image;
        $datawhy->item_one = $request->item_one;
        $datawhy->content_one = $request->content_one;
        $datawhy->image_one = $request->image_one;

        $datawhy->item_two = $request->item_two;
        $datawhy->content_two = $request->content_two;
        $datawhy->image_two = $request->image_two;

        $datawhy->item_three = $request->item_three;
        $datawhy->content_three = $request->content_three;
        $datawhy->image_three = $request->image_three;

        $datawhy->item_four = $request->item_four;
        $datawhy->content_four = $request->content_four;
        $datawhy->image_four = $request->image_four;

        $datawhy->update();
    }

    public function HolidayEdit($id){
        $hh = HomeHoliday::where('id',$id)->first();

        $data = [
            'id'=> $hh->id,
            'place_name'=> $hh->place_name,
            'image_id'=> $hh->image_id,
            'position'=> $hh->image_pos,
            'url'=> $hh->url,
        ];
        return view('admin.Dashboard.HomeHoliday.edit',compact('data'));
    }



    public function PerfectEdit($id){

        $pp = PerfectHoliday::where('id',$id)->first();

        $data = [
            'id'=> $pp->id,
            'place_name'=> $pp->place_name,
            'image_id'=> $pp->image_id,
            'url'=> $pp->url,
        ];
        return view('admin.Dashboard.PerfectPlace.edit',compact('data'));
    }

    public function TestimonialEdit($id){

        $ct = ClientTestimonial::where('id',$id)->first();

        $data = [
            'id'=> $ct->id,
            'name'=> $ct->name,
            'image_id'=> $ct->image_id,
            'content'=> $ct->content,
        ];
        return view('admin.Dashboard.Testimonial.edit',compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Perfectupdate(Request $request, $id)
    {
        //
        $pp = PerfectHoliday::find($id);
        $pp->image_id = $request->place_image;
        $pp->place_name = $request->place_name;
        $pp->url = $request->url;
        $pp->update();

        return redirect()->back()->with('success','Place has been modified Successfully.');

    }
    public function Testimonialupdate(Request $request, $id)
    {
        //
        $ct = ClientTestimonial::find($id);
        $ct->name = $request->name;
        $ct->content = $request->content;
        $ct->image_id = $request->image_id;
        $ct->update();

        return redirect()->back()->with('success','Testimonial has been modified Successfully.');

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
