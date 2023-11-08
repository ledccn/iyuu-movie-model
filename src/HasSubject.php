<?php

namespace Iyuu\MovieModel;

use think\model\relation\HasOne;

/**
 * 影视条目一对一关联
 */
trait HasSubject
{
    /**
     * 影视条目【一对一关联】
     * @return HasOne
     */
    public function subject(): HasOne
    {
        return $this->hasOne(MetaSubject::class, 'id', 'subject_id')
            ->field(MetaSubject::ApiListsFiled)
            ->bind(MetaSubject::ApiListsFiled);
    }
}
