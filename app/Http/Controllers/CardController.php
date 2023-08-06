<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CardController extends Controller
{ //TODO Возвращаемые типы
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): \Illuminate\Http\Response
    {
        return Response(Card::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request): \Illuminate\Http\Response
    {
        //todo валидация

        $card = new Card();
        $card->name = $request->name;
        $card->detail_text = $request->detail_text;
        $card->board_id = $request->board_id;
        $card->sort = !empty($request->sort) ? 0 : $request->sort;
        $card->bg_color = $request->bg_color;

        try {
            $card->saveOrFail();
        } catch (QueryException $e) {
            return Response($e->getMessage(), 400);
        }
        return Response('ok');

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