<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $object = DB::select('SELECT "Course".id, "Course".title, "Course".category, "Course".description, "Course".price, "Course".start, "Course".finish, "Consultant".name, "Consultant".avatar, "Address".street, "Address"."number", "Address".neighborhood, "Address".city FROM "Course" 
            INNER JOIN "Consultant" on "Course".fk_id_Consultant = "Consultant".id
            INNER JOIN "Address" on "Course".fk_id_Address = "Address".id ');
        //dd($adress);
        return view('listCourse')->with('object' , $object);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $count=0;
        $list;
        $word = Request::input('word');
        $select = DB::select("SELECT * FROM keyword WHERE word = '".ucwords($word)."'");
        if(!$select)
        {
            
            return CourseController::index();
        }
        else
        {
            foreach ($select as $item) {
               
                switch ($item->type) 
                {
                    case 1:
                        $list=  DB::select('SELECT "Course".id, "Course".title, "Course".category, "Course".description, "Course".price, "Course".start, "Course".finish, "Consultant".name, "Consultant".avatar, "Address".street, "Address"."number", "Address".neighborhood, "Address".city FROM "Course" 
                            INNER JOIN "Consultant" on "Course".fk_id_Consultant = "Consultant".id
                            INNER JOIN "Address" on "Course".fk_id_Address = "Address".id 
                            WHERE "Address".city LIKE '. "'%".$item->word."%'" );   
                                                
                        break;
                    case 2:
                       $list= DB::select('SELECT "Course".id, "Course".title, "Course".category, "Course".description, "Course".price, "Course".start, "Course".finish, "Consultant".name, "Consultant".avatar, "Address".street, "Address"."number", "Address".neighborhood, "Address".city FROM "Course" 
                            INNER JOIN "Consultant" on "Course".fk_id_consultant = "Consultant".id
                            INNER JOIN "Address" on "Course".fk_id_Address = "Address".id 
                            WHERE "Course".title LIKE ' . "'%".$item->word."%'");
                        break;
                    case 3:
                         $list= DB::select('SELECT "Course".id, "Course".title, "Course".category, "Course".description, "Course".price, "Course".start, "Course".finish, "Consultant".name, "Consultant".avatar, "Address".street, "Address"."number", "Address".neighborhood, "Address".city FROM "Course" 
                            INNER JOIN "Consultant" on "Course".fk_id_consultant = "Consultant".id
                            INNER JOIN "Address" on "Course".fk_id_Address = "Address".id 
                            WHERE "Course".category LIKE' .  "'%".$item->word."%'");
                        break;    # code...
                }

                $count = $count+1; 
            }

        //return view('teste')->with('nome','TI');
            return view('listCourse')->with('object' , $list);
    }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id= Request::input('id');
        $course = DB::select('SELECT "Course".id, "Course".title, "Course".category, "Course".description, "Course".price, "Course".start, "Course".finish, "Consultant".name, "Consultant".avatar, "Address".street, "Address"."number", "Address".neighborhood, "Address".city FROM "Course"
            INNER JOIN "Consultant" on "Course".fk_id_Consultant = "Consultant".id  
            INNER JOIN "Address" on "Course".fk_id_Address = "Address".id 
            WHERE "Course".id = ?',[$id]);
        return view('courseDetails')->with('course' , $course[0]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
