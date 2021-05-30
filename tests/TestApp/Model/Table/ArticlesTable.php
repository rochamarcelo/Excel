<?php


namespace RoMa\Excel\Test\TestApp\Model\Table;


use Cake\ORM\Table;

class ArticlesTable extends Table
{
    /**
     * @inheritDoc
     */
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
        $this->setTable('articles');
        $this->belongsTo('Users', [
            'className' => UsersTable::class
        ]);
    }
}