<?php

class Review extends Base
{

    public $productId;

    public $stars;

    public $comment;

    public $userId;

    public static function getTableName()
    {
        return 'reviews';
    }
}