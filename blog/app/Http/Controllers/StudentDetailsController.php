<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StudentDetailsModel;

class StudentDetailsController extends Controller{

    //Insert Using Model
    function Insert(Request $request){ 
        $name= $request->input("name");
        $roll= $request->input("roll");
        $city= $request->input("city");
        $phone= $request->input("phone");
        $class= $request->input("class");
        $result = StudentDetailsModel::insert(['name'=>$name,'roll'=>$roll,'city'=>$city,'phone'=>$phone,'class'=>$class]);
        if($result == true){
            return "Data Insert Successfully.";
        }else{
            return "Data Insert Fail? Try Again.";
        }
    }

    //Delete Using Model
    function Delete(Request $request){ 
        $id = $request->input("id");
        $result = StudentDetailsModel::where('id',$id)->delete();
        if($result == true){
            return "Data Delete Successfully.";
        }else{
            return "Data Delete Fail? Try Again.";
        }
    }

    //Update Using Model
    function Update(Request $request){ 
        $id= $request->input("id");
        $name= $request->input("name");
        $roll= $request->input("roll");
        $city= $request->input("city");
        $phone= $request->input("phone");
        $class= $request->input("class");
        $result = StudentDetailsModel::where('id',$id)->update(['name'=>$name,'roll'=>$roll,'city'=>$city,'phone'=>$phone,'class'=>$class]);
        if($result == true){
            return "Data Update Successfully.";
        }else{
            return "Data Update Fail? Try Again.";
        }
    }

}
