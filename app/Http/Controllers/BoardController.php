<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class BoardController extends Controller
{
 
    public function index(): \Illuminate\Http\Response
    {
        return Response(Board::all());
    }

   
    public function create(Request $request): \Illuminate\Http\Response
    {
        //todo валидация

        $board = new Board();
        $board->name = $request->name;
        $board->user_id = 1;

        try {
            $board->saveOrFail();
        } catch (QueryException $e) {
            return Response($e->getMessage(), 400);
        }
        return Response('ok');

    }

  
    public function update(Request $request, $id): \Illuminate\Http\Response
    {
        $board = Board::find($id);
        $board->name = $request->name;

        try {
            $board->saveOrFail();
        } catch (QueryException $e) {
            return Response($e->getMessage(), 400);
        }
        return Response('ok');
    }


    public function delete($id)
    {
        //
    }
}