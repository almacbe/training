<?php

namespace IdentityDocument;

class IdentityNumberValidator
{
    public function validate (IdentityDocument $document): bool
    {
        if ($document instanceof SpanishIdentityDocument) {
            if ($document->getNumber() === '12345678R') {
                return true;
            }

            return false;
        } elseif ($document instanceof FrenchIdentityDocument) {
            if ($document->getNumber() === '987654321N') {
                return true;
            }

            return false;
        } else {
            throw new InvalidDocumentTypeException();
        }
    }
}
