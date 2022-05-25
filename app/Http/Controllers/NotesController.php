<?php

namespace App\Http\Controllers;

use App\OpenApi\RequestBodies\NoteRequestBody;
use App\OpenApi\Responses\NoteResponse;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

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
    #[OpenApi\Response(factory: NoteResponse::class, statusCode: 200)]
    public function index(Request $request): string
    {
        return response()->json([
            "message" => "OK"
        ]);
    }
}
