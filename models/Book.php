<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * @property int    $id
 * @property string $name
 */

class Book extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'book';
    }

    public function rules(): array
    {
        return [
            ['name', 'required'],
        ];
    }

    public function extraFields(): array
    {
        return ['authors'];
    }

    public function getAuthors(): ActiveQuery
    {
        return $this->hasMany(Author::class, ['id' => 'id_author'])
            ->viaTable('book_author', ['id_book' => 'id']);
    }
}