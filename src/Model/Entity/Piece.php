<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Piece Entity
 *
 * @property int $id
 * @property string $nom
 * @property string $color
 * @property int $size
 * @property \Cake\I18n\FrozenTime|null $created
 * @property float $price
 * @property int $categories_id
 * @property string $picture
 *
 * @property \App\Model\Entity\Category $category
 */
class Piece extends Entity
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
        'nom' => true,
        'color' => true,
        'size' => true,
        'created' => true,
        'price' => true,
        'categories_id' => true,
        'picture' => true,
        'category' => true
    ];
}
