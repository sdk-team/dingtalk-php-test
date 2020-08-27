<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiHealthStepinfoParams extends Model {
    protected $_name = [
        'type' => 'type',
        'objectId' => 'object_id',
        'statDates' => 'stat_dates',
    ];
    public function validate() {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('objectId', $this->objectId, true);
        Model::validateRequired('statDates', $this->statDates, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->objectId) {
            $res['object_id'] = $this->objectId;
        }
        if (null !== $this->statDates) {
            $res['stat_dates'] = $this->statDates;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiHealthStepinfoParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['object_id'])){
            $model->objectId = $map['object_id'];
        }
        if(isset($map['stat_dates'])){
            if(!empty($map['stat_dates'])){
                $model->statDates = $map['stat_dates'];
            }
        }
        return $model;
    }
    /**
     * @description 0表示取用户步数，1表示取部门步数
     * @var int
     */
    public $type;

    /**
     * @description 可以传入用户userid或者部门id
     * @var string
     */
    public $objectId;

    /**
     * @description 时间列表，注意时间格式是YYYYMMDD
     * @var array
     */
    public $statDates;

}
