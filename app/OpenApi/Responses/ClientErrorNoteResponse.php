<?php

namespace App\OpenApi\Responses;

use App\OpenApi\Schemas\NoteSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ClientErrorNoteResponse extends ResponseFactory implements Reusable
{
    public function build(): Response
    {
        $response = Schema::object()->properties(
            Schema::string('message')->example('Required field "id" was missing'),
        );

        return Response::create()
            ->description('The request was not complete')
            ->content(
                MediaType::json()->schema($response)
            );
    }
}
