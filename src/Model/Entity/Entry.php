<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Entry Entity
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property int $industry_id
 * @property int $category_id
 * @property string $prefecture
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Industry $industry
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\User $user
 */
class Entry extends Entity
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
        'title' => true,
        'body' => true,
        'industry_id' => true,
        'category_id' => true,
        'prefecture' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'industry' => true,
        'category' => true,
        'user' => true
    ];
}
