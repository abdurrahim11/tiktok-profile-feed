<?php
/**
 * @package  tiktokProfileFeed
 */
namespace Inc\Base;
use Inc\Base\MigrateDB;

class Activate
{
    public static function activate() {
        flush_rewrite_rules();
        MigrateDB::db_create();
    }
}