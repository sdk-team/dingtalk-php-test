<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SyncOapiPbpEventParams\param\userEventList;

use AlibabaCloud\Tea\Model;

class positionList extends Model {
    protected $_name = [
        'positionId' => 'position_id',
        'positionType' => 'position_type',
    ];
    public function validate() {
        Model::validateRequired('positionId', $this->positionId, true);
        Model::validateRequired('positionType', $this->positionType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->positionId) {
            $res['position_id'] = $this->positionId;
        }
        if (null !== $this->positionType) {
            $res['position_type'] = $this->positionType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return positionList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['position_id'])){
            $model->positionId = $map['position_id'];
        }
        if(isset($map['position_type'])){
            $model->positionType = $map['position_type'];
        }
        return $model;
    }
    /**
     * @description 位置点id
     * @var string
     */
    public $positionId;

    /**
     * @description 位置类型
     * @var int
     */
    public $positionType;

}
