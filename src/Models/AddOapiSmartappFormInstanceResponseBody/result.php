<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiSmartappFormInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'bizId' => 'biz_id',
        'errorMsg' => 'error_msg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        return $model;
    }
    /**
     * @description 发生错误的业务主键
     * @var string
     */
    public $bizId;

    /**
     * @description 该数据导入的错误信息
     * @var string
     */
    public $errorMsg;

}
