<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateCorpCalendarParams\createVo;

class CreateCorpCalendarParams extends Model {
    protected $_name = [
        'createVo' => 'create_vo',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->createVo) {
            $res['create_vo'] = null !== $this->createVo ? $this->createVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateCorpCalendarParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['create_vo'])){
            $model->createVo = createVo::fromMap($map['create_vo']);
        }
        return $model;
    }
    /**
     * @description 创建日程实体
     * @var createVo
     */
    public $createVo;

}
