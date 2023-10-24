<?php

namespace yiiunit\data\ar;

/**
 * Class Customer.
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $address
 * @property int $status
 *
 * @method CustomerQuery findBySql($sql, $params = []) static
 */
class CustomerWithAlias extends ActiveRecord
{
    final public const STATUS_ACTIVE = 1;
    final public const STATUS_INACTIVE = 2;

    public $status2;

    public $sumTotal;
    
    public static function tableName()
    {
        return 'customer';
    }
    
    /**
     * {@inheritdoc}
     * @return CustomerQuery
     */
    public static function find()
    {
        $activeQuery = new CustomerQuery(static::class);
        $activeQuery->alias('csr');
        return $activeQuery;
    }
}
