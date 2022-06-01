<?php

namespace App\Http\Controllers;

use App\OpenApi\RequestBodies\NoteRequestBody;
use App\OpenApi\Responses\SuccessNoteResponse;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

//use App\OpenApi\Responses\ClientErrorNoteResponse;
//use App\OpenApi\Responses\ServerErrorResponse;

#[OpenApi\PathItem]
class NotesController extends Controller
{
    /**
     * Fetch all notes
     *
     * @param Request $request
     * @return string
     */
    #[OpenApi\Operation]
    #[OpenApi\RequestBody(factory: NoteRequestBody::class)]
    #[OpenApi\Response(factory: SuccessNoteResponse::class, statusCode: 200)]
//    #[OpenApi\Response(factory: ClientErrorNoteResponse::class, statusCode: 400)]
//    #[OpenApi\Response(factory: ServerErrorResponse::class, statusCode: 500)]
    public function index(Request $request): string
    {
        return response()->json([
            "message" => "OK"
        ]);
    }
}
