<?php

namespace League\Flysystem;

interface ChecksumProvider
{
    /**
     * @return string MD5 hash of the file contents
     *
     * @throws UnableToGetChecksum
     */
    public function checksum(string $path, Config $config): string;
}
