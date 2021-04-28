<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use DB;

class MessageController extends Controller
{
    public function index(Request $resquest){

        $userId = auth()->id();
        $contactoId = $resquest->contact_id;
        return Message::select(
        'id',
        DB::raw("IF(`from_id`=$userId, TRUE, FALSE) as written_by_me"),
        'created_at',
        'content')->where(function ($query) use($userId, $contactoId){
            $query->where('from_id', $userId)->where('to_id', $contactoId);
        })->orWhere(function ($query) use($userId, $contactoId){
            $query->where('from_id', $contactoId)->where('to_id', $userId);
        })->get();
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
