<?php

namespace Iyuu\MovieModel;

use InvalidArgumentException;

/**
 * 支持站点
 */
enum SiteEnum: int
{
    /**
     * 豆瓣
     */
    case douban = 1;

    /**
     * IMDb
     */
    case imdb = 2;

    /**
     * 获取站点
     * @param string $name
     * @return self
     */
    public static function create(string $name): self
    {
        return self::from(self::getValue($name));
    }

    /**
     * 检查name
     * @param string $name
     * @return int
     */
    public static function getValue(string $name): int
    {
        $list = self::toArray();
        if (!array_key_exists($name, $list)) {
            throw new InvalidArgumentException('不支持的站点');
        }

        return $list[$name];
    }

    /**
     * 枚举条目转为数组
     * - 名 => 值
     * @return array
     */
    public static function toArray(): array
    {
        return array_column(self::cases(), 'value', 'name');
    }
}
