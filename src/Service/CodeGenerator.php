<?php

namespace App\Service;

class CodeGenerator
{
    public function generateUniqueCode(): string
    {
        return strtoupper(bin2hex(random_bytes(4))); // Exemple : "A1B2C3D4"
    }
}
