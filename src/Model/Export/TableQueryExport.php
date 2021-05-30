<?php


namespace RoMa\Excel\Model\Export;

/**
 * Class TableQueryExport
 * @package RoMa\Excel\Model\Export
 */
class TableQueryExport implements ExportInterface
{
    /**
     * @var string|null
     */
    protected $modelClass = null;

    /**
     * @var \Cake\ORM\Query|null
     */
    protected $query;

    /**
     * @var string
     */
    protected $finder = 'all';

    /**
     * @inheritDoc
     */
    public function getData(): iterable
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getHeader(): array
    {
        return [];
    }
}