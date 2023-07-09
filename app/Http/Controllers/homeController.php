<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //

    public function index(){
        $address = Home::all();
        $data = compact('address');

        return view('address.index')->with($data);
    }

    public function create(){
        return view('Address.create');
    }

    

    public function store(Request $request){
        $request->validate(
            [
                'Owner_Name'=>'required',           
                'Mobile_Number'=>'required',
                'Area_Name'=>'required',
                'Address'=>'required',
                'Pin_Code'=>'required',
                'Price'=>'required',
                'Status'=>'required'

            ]
            );
        $address = new Home();
        $address->Owner_Name=$request['Owner_Name'];
        $address->Mobile_Number=$request['Mobile_Number'];
        $address->Area_Name=$request['Area_Name'];
        $address->Address=$request['Address'];
        $address->Pin_Code=$request['Pin_Code'];
        $address->Price=$request['Price'];
        $address->Status=$request['Status'];
        $address->save();
        return redirect('/address/create');
        
    }

    public function edit($User_id){
        $address = Home::find($User_id);
        if($address){
            $url = url('/address/update')."/".$User_id;

            $data = compact('address',"url");
            return view('address.edit')->with($data);
        }else{
            echo"data not present";
        }
    }

    public function update(Request $request,$User_id){
        $address = Home::find($User_id);
        $address->Owner_Name=$request['Owner_Name'];
        $address->Mobile_Number=$request['Mobile_Number'];
        $address->Area_Name=$request['Area_Name'];
        $address->Address=$request['Address'];
        $address->Pin_Code=$request['Pin_Code'];
        $address->Price=$request['Price'];
        $address->Status=$request['Status'];


        $address->save();

        echo "successfully upadte";
        
        
    }
}