<?php

namespace Survos\PixieBundle\Util;

final class ImportUtil
{
    public static function contentHash(array|object|string $data): string
    {
        // Normalize input to JSON string before hashing
        if (is_object($data) || is_array($data)) {
            $data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }

        return hash('xxh3', (string) $data);
    }
}
