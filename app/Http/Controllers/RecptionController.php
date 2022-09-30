<?php

namespace App\Http\Controllers;

use App\Models\Recption;
use App\Models\Table;
use Illuminate\Http\Request;

class RecptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recptions = Table::latest()->paginate(5);
    
        return view('recptions.index',compact('recptions'))
            ->with('i', (request()->input('page', 1) - 1) * 5)
            ->with('welcom','wel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recptions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nicno' => 'required',
            'address' => 'required',
            'email' => 'required',
            'dsdivsion' => 'required',
            'branch' => 'required',
         ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Recption::create($input);
     
        return redirect()->route('recptions.index')
                        ->with('success','Recption created successfully.');
    }
     

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recption  $recption
     * @return \Illuminate\Http\Response
     */
    public function show(Table $recption)
    {
        return view('recptions.show',compact('recption'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recption  $recption
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $recption)
    {
        return view('recptions.edit',compact('recption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recption  $recption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recption $recption)
    {
        $request->validate([
            'name' => 'required',
            'nicno' => 'required',
            'address' => 'required',
            'email' => 'required',
            'dsdivsion' => 'required',
            'branch' => 'required',
        ]);
  
         
          
        $Recption->update($input);
    
        return redirect()->route('recptions.index')
                        ->with('success','Recption updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recption  $recption
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recption $recption)
    {
        $Recption->delete();
     
        return redirect()->route('recptions.index')
                        ->with('success','Recption deleted successfully');
    }
}
