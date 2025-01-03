<?php

namespace Tests\Feature;

use App\Services\Document\Document;
use App\Services\Document\JSONDocument;
use App\Services\Document\JSONDocumentRefactored;
use Tests\TestCase;

class LinkovSubstitutionTest extends TestCase
{
    public function test_get_content_document(): void
    {
        $document = new JSONDocument;
        $this->assertIsArray($document->getContent());
    }
    public function test_get_content_document_refactored(): void
    {
        $document = new JSONDocumentRefactored;
        $this->assertIsString($document->getContent());
    }
}
