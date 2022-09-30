<?php
  
namespace App\Http\Controllers;
  
use App\Models\Table;
use Illuminate\Http\Request;
  
class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::latest()->paginate(5);
    
        return view('tables.index',compact('tables'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tables.create');
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
            'empno' => 'required',
            'nicno' => 'required|unique:products|min:10|max:12',
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'designation' => 'required',
            'branch' => 'required',
            'department' => 'required',
            'ministry' => 'required',
            'apdate' => 'required',
            'dob' => 'required',
            'phno' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Table::create($input);
     
        return redirect()->route('tables.index')
                        ->with('success','Table created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Table  $Table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $Table)
    {
        return view('tables.show',compact('Table'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Table  $Table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $Table)
    {
        return view('tables.edit',compact('Table'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Table  $Table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table $Table)
    {
        $request->validate([
            'empno' => 'required',
            'nicno' => 'required|min:10|max:12',
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'designation' => 'required',
            'branch' => 'required',
            'department' => 'required',
            'ministry' => 'required',
            'apdate' => 'required',
            'dob' => 'required',
            'phno' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $Table->update($input);
    
        return redirect()->route('tables.index')
                        ->with('success','Table updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Table  $Table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $Table)
    {
        $Table->delete();
     
        return redirect()->route('tables.index')
                        ->with('success','Table deleted successfully');
    }
}