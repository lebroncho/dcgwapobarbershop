<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientTransaction Entity
 *
 * @property int $id
 * @property int $client_id
 * @property \Cake\I18n\FrozenTime $transaction_date
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Payment[] $payment
 * @property \App\Model\Entity\ServiceDetail[] $service_detail
 */
class ClientTransaction extends Entity
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
        'client_id' => true,
        'transaction_date' => true,
        'client' => true,
        'payment' => true,
        'service_detail' => true
    ];
}
