<?php

namespace Henrik\Contracts\Filesystem;

interface FilesystemInterface
{
    /**
     * @param string $path
     * @param int    $mode
     *
     * @throws FileSystemExceptionInterface
     *
     * @return void
     */
    public function mkdir(string $path, int $mode = 0o775): void;

    /**
     * @param string      $directory
     * @param string|null $fileExtension
     * @param ?string[]   $excludedPaths
     *
     * @return string[]
     */
    public function getFilesFromDirectory(string $directory, ?string $fileExtension, ?array $excludedPaths = []): array;

    public function getPhpClassesFromDirectory(string $directory, string $namespace, ?array $excludedPaths = []): array;

    public function createFile(string $path, int $mode = 0o664): void;
}