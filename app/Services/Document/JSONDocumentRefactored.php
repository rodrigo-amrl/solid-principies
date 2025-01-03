<?php

namespace App\Services\Document;

class JSONDocumentRefactored extends Document
{
    public function getContent(): string
    {
        return json_encode(['content' => 'JSON Document Content']);
    }
}
