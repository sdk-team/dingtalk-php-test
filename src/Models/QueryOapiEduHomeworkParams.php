<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiEduHomeworkParams extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'hwId' => 'hw_id',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('hwId', $this->hwId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->hwId) {
            $res['hw_id'] = $this->hwId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiEduHomeworkParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['hw_id'])){
            $model->hwId = $map['hw_id'];
        }
        return $model;
    }
    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

    /**
     * @description 作业ID
     * @var int
     */
    public $hwId;

}
