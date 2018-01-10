<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property int $client_transaction_id
 * @property float $payment_amount
 * @property \Cake\I18n\FrozenTime $payment_date
 *
 * @property \App\Model\Entity\ClientTransaction $client_transaction
 */
class Payment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'client_transaction_id' => true,
        'payment_amount' => true,
        'payment_date' => true,
        'client_transaction' => true
    ];
}
