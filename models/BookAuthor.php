<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property int $id_book
 * @property int $id_author
 */

class BookAuthor extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'book_author';
    }

    public function rules(): array
    {
        return [
            ['id_book', 'required'],
            ['id_author', 'required'],
        ];
    }
}