<?php

namespace app\commands;

use app\models\Author;
use app\models\Book;
use app\models\Book_Author;
use app\models\BookAuthor;
use yii\console\Controller;
use yii\console\ExitCode;

class DataController extends Controller
{
    public const BOOKS = [
        'Война и мир',
        'Цикл денчика',
    ];

    public const AUTHORS = [
        'Толстой',
        'Денчик',
    ];

    public function actionImport(): void
    {
        foreach (self::BOOKS as $bookItem) {
            $book = new Book();
            $book->name = $bookItem;
            $book->save();
        }

        foreach (self::AUTHORS as $authorItem) {
            $author = new Author();
            $author->name = $authorItem;
            $author->save();
        }

        for ($i = 1; $i <= 2; $i++) {
            for ($j = 1; $j <= 2; $j++) {
                $bookAuthor = new BookAuthor();
                $bookAuthor->id_book = $i;
                $bookAuthor->id_author = $j;
                $bookAuthor->save();
            }
        }
    }
}