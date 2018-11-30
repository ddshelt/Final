<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Reaction;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "show me a index";

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //

        $item = \App\Item::find($id);
        return view('items.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $reaction = new \App\Reaction;
        $reaction->comment = $request->input('itemcomment');
        $reaction->item_id = $request->input('itemlist');
        $reaction->user_id = \Auth::id();
        $reaction->save();

        $request->session()->flash('status', "A new comment was added");

        return redirect('/items/'. $reaction->item_id);
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
        $item = \App\Item::find($id);
        return view('items.show', compact('item'));

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
        return "show me a edit page";
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
        return "update page";
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
        return "delete page";
    }

    public function isLikedByMe($id)
    {
      $item = Item::findorFail($id)->first();
      if (Reaction::whereUserId(Auth::id())->whereItemId($item->id)->exists()){
        return 'true';
      }
      return 'false';
    }

    public function like($id)
    {
        $reaction = new \App\Reaction;
        $reaction->reaction = true;
        $reaction->item_id = $id;
        $reaction->user_id = \Auth::id();
        $reaction->save();

        return redirect('/contents/home');

    }
}
