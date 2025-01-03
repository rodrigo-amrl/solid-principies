<?php

namespace App\Services\Document;

class JSONDocument extends Document
{
    public function getContent()
    {
        return ['content' => 'JSON Document Content'];
    }
}
