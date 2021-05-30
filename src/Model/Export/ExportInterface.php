<?php

namespace RoMa\Excel\Model\Export;

interface ExportInterface
{
    /**
     * Get the data to export.
     *
     * @return iterable
     */
    public function getData(): iterable;

    /**
     * Retrieve the optional header. Empty array means no header.
     *
     * @return string[]
     */
    public function getHeader(): array;
}