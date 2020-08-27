<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiPbpInstanceGroupPositionParams\syncParam;

class UpdateOapiPbpInstanceGroupPositionParams extends Model {
    protected $_name = [
        'syncParam' => 'sync_param',
    ];
    public function validate() {
        Model::validateRequired('syncParam', $this->syncParam, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->syncParam) {
            $res['sync_param'] = null !== $this->syncParam ? $this->syncParam->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiPbpInstanceGroupPositionParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['sync_param'])){
            $model->syncParam = syncParam::fromMap($map['sync_param']);
        }
        return $model;
    }
    /**
     * @description 同步参数
     * @var syncParam
     */
    public $syncParam;

}
