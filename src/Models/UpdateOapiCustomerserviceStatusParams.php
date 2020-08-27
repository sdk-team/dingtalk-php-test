<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCustomerserviceStatusParams\statusChange;

class UpdateOapiCustomerserviceStatusParams extends Model {
    protected $_name = [
        'statusChange' => 'status_change',
    ];
    public function validate() {
        Model::validateRequired('statusChange', $this->statusChange, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->statusChange) {
            $res['status_change'] = null !== $this->statusChange ? $this->statusChange->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiCustomerserviceStatusParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['status_change'])){
            $model->statusChange = statusChange::fromMap($map['status_change']);
        }
        return $model;
    }
    /**
     * @description 系统自动生成
     * @var statusChange
     */
    public $statusChange;

}
