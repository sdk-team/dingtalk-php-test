<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StartOapiEduCourseResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'targetType' => 'target_type',
        'targetId' => 'target_id',
        'isReuse' => 'is_reuse',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->targetType) {
            $res['target_type'] = $this->targetType;
        }
        if (null !== $this->targetId) {
            $res['target_id'] = $this->targetId;
        }
        if (null !== $this->isReuse) {
            $res['is_reuse'] = $this->isReuse;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['target_type'])){
            $model->targetType = $map['target_type'];
        }
        if(isset($map['target_id'])){
            $model->targetId = $map['target_id'];
        }
        if(isset($map['is_reuse'])){
            $model->isReuse = $map['is_reuse'];
        }
        return $model;
    }
    /**
     * @description 交互目标类型
     * @var int
     */
    public $targetType;

    /**
     * @description 交互内容id
     * @var string
     */
    public $targetId;

    /**
     * @description 交互是否重用
     * @var bool
     */
    public $isReuse;

}
