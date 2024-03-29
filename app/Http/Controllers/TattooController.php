<?php

namespace App\Http\Controllers;

use App\Models\Tattoo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class TattooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd(phpinfo());

        $tattoo = new tattoo;
        $tattoo->name = $request->name;
        $tattoo->price = $request->price;
        $tattoo->hours = $request->hours;

        if ($request->file('image')) {
            $image = $request->file('image');
            $filename = $request->file('image')->getClientOriginalName();
//            Image::make($image)->resize(300, 300)->

            $image->move(base_path() . '/storage/app/public', $filename);

//            $image->save(storage_path('/uploads/' . $filename));
            $tattoo->image = $filename;
//            $tattoo->save();
        };

        $tattoo->save();

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tattoo $tattoo
     * @return \Illuminate\Http\Response
     */
    public function show(Tattoo $tattoo)
    {
        $tattoos = Tattoo::orderBy('id', 'DESC')->get();
        return json_encode($tattoos);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tattoo $tattoo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tattoo $tattoo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tattoo $tattoo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tattoo $tattoo, $id)
    {
//        dd($id);

        $tattoo = Tattoo::find($id);
//        dd();
        $tattoo->name = $request->name;
        $tattoo->price = $request->price;
        $tattoo->hours = $request->hours;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
//          Image::make($image)->resize(300, 300)->

            $image->move(base_path() . '/storage/app/public', $filename);
//          $image->save(storage_path('/uploads/' . $filename));
            $tattoo->image = $filename;
            $tattoo->update();
        };

        $tattoo->update();
        return Response::json(["hasFile" => $request->hasFile("image")]);
//
//
//
////        dd($id);
//
////      Tattoo::where('id', $request->id)
////      ->update(['name' => $request->name, 'hours' => $request->hours, 'price' => $request->price]);
//        $tattoo = Tattoo::where('id', $id)->get();
//
//        $tattoo->name = $request->name;
//        $tattoo->price = $request->price;
//        $tattoo->hours = $request->hours;
//
//        $image = $request->file('image');
//        $filename = time() . '.' . $image->getClientOriginalExtension();
////      Image::make($image)->resize(300, 300)->
//
//        $image->move(base_path() . '/storage/app/public', $filename);
//
////      $image->save(storage_path('/uploads/' . $filename));
//        $tattoo->image = $filename;
//        $tattoo->update();
//
//        return response()->json(['success' => 'Produit modifié avec succès']);
////        $tattoo->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tattoo $tattoo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tattoo $tattoo, $id)
    {
//        dd($id);
        Tattoo::find($id)->delete();
    }
}
