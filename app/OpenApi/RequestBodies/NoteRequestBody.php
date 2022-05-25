<?php

namespace App\OpenApi\RequestBodies;

use App\OpenApi\Schemas\NoteSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\RequestBody;
use Vyuldashev\LaravelOpenApi\Factories\RequestBodyFactory;

class NoteRequestBody extends RequestBodyFactory
{
    public function build(): RequestBody
    {
        return RequestBody::create()
            ->description('A note object')
            ->content(
                MediaType::json()->schema(NoteSchema::ref())
            );
    }
}
