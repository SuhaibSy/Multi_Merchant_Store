<?php

namespace App\Http\Controllers;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section=Section::Latest()->paginate(10);
        return view('section.index',compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('section.Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        // $request->validate([
        //     'Name'=>'required'
        // ]);
        // if($request->hasFile('file'))
        // {
        //     $request->validate([
        //         'Image' =>'mimes:png,jpg,jepg,gif'
        //     ]);
        //     $request->file->store('public/section');
        //     $section=new Sections([
        //         "Name" =>$request->get('Name'),
        //         "Image" =>$request->file->hashName()
        //     ]);
        //     $section->save();
        // }
        // return  redirect()->route('section.index')->with('success','section added successfully');

        $request->validate([
            'Name'=>'required',
            'Image'=>'required|image|mimes:png,jpg,jpeg,gif,svg',
        ]);
        $path= $request->file('Image')->store('public/section');
        $section=new Section;
        $section->Name=$request->Name;
        $section->Image=$path;
        $section->save();
        return  redirect()->route('section.index')->with('success','section added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        return view('section.edit',compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        $request->validate([
            'Name' => 'required',
        ]);

        $section = Section::find($section->id);
        if($request->hasFile('Image')){
            $request->validate([
              'Image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            ]);

        }
        $path = $request->file('Image')->store('public/section');
        $section->Image = $path;
        $section->Name = $request->Name;
        $section->save();

        return redirect()->route('section.index')
                        ->with('success','section updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        $section->delete();
        return redirect()->route('section.index')->with('Success','sections delete successfully');
    }
}
