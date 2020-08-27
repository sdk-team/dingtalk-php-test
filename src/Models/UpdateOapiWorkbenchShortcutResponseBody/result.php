<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkbenchShortcutResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'bizNo' => 'biz_no',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->bizNo) {
            $res['biz_no'] = $this->bizNo;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_no'])){
            $model->bizNo = $map['biz_no'];
        }
        return $model;
    }
    /**
     * @description 系统交互唯一流水号
     * @var string
     */
    public $bizNo;

}
