<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use DB;

class MessageController extends Controller
{
    public function index(){

        $userId = auth()->id();
        return Message::select(
        'id',
        DB::raw("IF(`from_id`=$userId, TRUE, FALSE) as written_by_me"),
        'created_at',
        'content')->get();

    }
    public function store(Request $resquest){

        $message = new Message();
        $message->from_id = auth()->id();
        $message->to_id = $resquest->to_id;
        $message->content = $resquest->content;
        $saved = $message->save();

        $data = [];
        $data['success'] = $saved;
        return $data;

    }
}
