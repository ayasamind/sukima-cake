<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity
 *
 * @property int $id
 * @property string $name
 * @property bool $sex
 * @property string $university
 * @property string $department
 * @property string $prefecture
 * @property string $skill
 * @property string $introduce
 * @property string $photo
 * @property string $photo_url
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 */
class Profile extends Entity
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
        'name' => true,
        'sex' => true,
        'university' => true,
        'department' => true,
        'prefecture' => true,
        'skill' => true,
        'introduce' => true,
        'photo' => true,
        'photo_url' => true,
        'user_id' => true,
        'user' => true
    ];
}
