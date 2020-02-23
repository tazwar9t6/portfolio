<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $validatedData = $request->validate([
        'name' => 'required|max:100|min:3',
        'email' => 'required|unique:contacts|max:100|min:5',
        'phone' => 'required|unique:contacts|max:100|min:5',
        'message' => 'max:10000|min:1',

    ]);

    $data=array();
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['phone']=$request->phone;
    $data['message']=$request->message;
    $data=DB::table('contacts')->insert($data);

    if($data){
        $notification = array(
            'message' => 'Thanks for contacting Us!', 
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);    }
        else
           return redirect()->back();
   }
        //


     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function table(){
        $data2 = DB::table('contacts')->get();
        return view ('cdata',compact('data2'));
    }
    public function show($id)
    {
        $data8=DB::table('contacts')->where('id',$id)->first();
        return view ('view' , compact('data8'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
        $data3=DB::table('contacts')->where('id',$id)->first();
        return view('edit',compact('data3'));
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
        $data4=array();
        $data4['name']=$request->name;
        $data4['email']=$request->email;
        $data4['phone']=$request->phone;
        $data4['message']=$request->message;

        $upd=DB::table('contacts')->where('id',$id)->update($data4);
        if($upd){
            $notification = array(
                'message' => 'this information has been updated!', 
                'alert-type' => 'success'
            );

            return Redirect()->route('table')->with($notification);    }
            else{
               return redirect()->back();
           }
       }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $data9=DB::table('contacts')->where('id',$id)->delete();
        if($data9){
            $notification = array(
                'message' => 'this information has been deleted!', 
                'alert-type' => 'success'
            );

            return Redirect()->route('table')->with($notification);    }
            else{
               return redirect()->back();
           }    
       }
       public function image(){
        $data=DB::table('contacts')->get();
        return view ('image',compact('data'));
    }
    public function imagestore (Request $request){
        $validatedData = $request->validate([
            //'reg_id'=>'required',
            'image' => 'required|mimes:jpeg,jpg,png |max:2000',
            

        ]);

        $data=array();
        $data['reg_id']=$request->reg_id;
        $image=$request->file('image');
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $new_image=$image_name.'.'.$ext;
        $path='public/image/';
        $image_url=$path.$new_image;
        $success=$image->move($path,$new_image);
        $data['image']=$image_url;

        $imgup=DB::table('registrations')->insert($data);

        if($imgup){
            $notification = array(
                'message' => 'photo uploaded successfully!', 
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);    }
            else{
               return redirect()->back();
           }
       }

        public function imageAll(){
        $data=DB::table('registrations')->join('contacts','registrations.reg_id','contacts.id')->select('registrations.*','contacts.name')->get();
        return view ('idata',compact('data'));
     }
   }
