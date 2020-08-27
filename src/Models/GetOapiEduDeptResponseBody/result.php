<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduDeptResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduDeptResponseBody\result\detail;

class result extends Model {
    protected $_name = [
        'detail' => 'detail',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['detail'])){
            $model->detail = detail::fromMap($map['detail']);
        }
        return $model;
    }
    /**
     * @description 部门详情
     * @var detail
     */
    public $detail;

}
