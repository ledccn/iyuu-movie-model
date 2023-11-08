<?php

namespace Iyuu\MovieModel;

/**
 * 条目分类
 */
enum SubTypeEnum: string
{
    /**
     * 电影
     */
    case movie = 'movie';
    /**
     * 剧集
     */
    case tvseries = 'tvseries';

    /**
     * 枚举条目转为数组
     * - 名 => 值
     * @return array
     */
    public static function toArray(): array
    {
        return array_column(self::cases(), 'value', 'name');
    }

    /**
     * @param self $enum
     * @return string
     */
    public static function text(self $enum): string
    {
        return match ($enum) {
            self::movie => '电影',
            self::tvseries => '剧集',
        };
    }

    /**
     * @return array
     */
    public static function select(): array
    {
        $rs = [];
        foreach (self::cases() as $enum) {
            $rs[self::text($enum)] = $enum->value;
        }
        return $rs;
    }
}