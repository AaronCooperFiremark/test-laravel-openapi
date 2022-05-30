<?php

namespace App\OpenApi\Responses;

use App\OpenApi\Schemas\NoteSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ServerErrorResponse extends ResponseFactory implements Reusable
{
    public function build(): Response
    {
        $response = Schema::object()->properties(
            Schema::string('message')->example('An unexpected server error occurred'),
        );

        return Response::create()
            ->description('A server error occurred')
            ->content(
                MediaType::json()->schema($response)
            );
    }
}
