<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetCcoserviceServicegroupParams extends Model {
    protected $_name = [
        'openGroupId' => 'open_group_id',
    ];
    public function validate() {
        Model::validateRequired('openGroupId', $this->openGroupId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->openGroupId) {
            $res['open_group_id'] = $this->openGroupId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetCcoserviceServicegroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_group_id'])){
            $model->openGroupId = $map['open_group_id'];
        }
        return $model;
    }
    /**
     * @description 服务群id
     * @var string
     */
    public $openGroupId;

}
