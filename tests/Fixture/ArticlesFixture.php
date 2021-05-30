<?php
declare(strict_types=1);

namespace RoMa\Excel\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Class ArticlesFixture
 *
 * @package RoMa\Excel\Test\Fixture
 */
class ArticlesFixture extends TestFixture
{
    public $fields = [
        'id' => ['type' => 'integer'],
        'title' => ['type' => 'string', 'length' => 255, 'null' => false],
        'body' => 'text',
        'published' => ['type' => 'integer', 'default' => '0', 'null' => false],
        'created' => 'datetime',
        'modified' => 'datetime',
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id']]
        ]
    ];
    public $records = [
        [
            'title' => 'First Article',
            'body' => 'First Article Body',
            'published' => '1',
            'created' => '2007-03-18 10:39:23',
            'modified' => '2007-03-18 10:41:31',
            'user_id' => '00000000-0000-0000-0000-000000000001',
        ],
        [
            'title' => 'Second Article',
            'body' => 'Second Article Body',
            'published' => '1',
            'created' => '2007-03-18 10:41:23',
            'modified' => '2007-03-18 10:43:31',
            'user_id' => '00000000-0000-0000-0000-000000000003',
        ],
        [
            'title' => 'Third Article',
            'body' => 'Third Article Body',
            'published' => '1',
            'created' => '2007-03-18 10:43:23',
            'modified' => '2007-03-18 10:45:31',
            'user_id' => '00000000-0000-0000-0000-000000000001',
        ]
    ];
}