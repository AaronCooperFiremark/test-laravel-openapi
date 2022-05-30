<?php

namespace App\OpenApi\Responses;

use App\OpenApi\Schemas\NoteSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class SuccessNoteResponse extends ResponseFactory implements Reusable
{
    public function build(): Response
    {
        return Response::create()
            ->description('A note object')
            ->content(
                MediaType::json()->schema(NoteSchema::ref())
            );
    }
}
