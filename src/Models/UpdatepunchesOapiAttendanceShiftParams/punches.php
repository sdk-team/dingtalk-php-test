<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdatepunchesOapiAttendanceShiftParams;

use AlibabaCloud\Tea\Model;

class punches extends Model {
    protected $_name = [
        'id' => 'id',
        'freeCheck' => 'free_check',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('freeCheck', $this->freeCheck, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->freeCheck) {
            $res['free_check'] = $this->freeCheck;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return punches
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['free_check'])){
            $model->freeCheck = $map['free_check'];
        }
        return $model;
    }
    /**
     * @description 卡点id
     * @var int
     */
    public $id;

    /**
     * @description 是否无需打卡 true：开启无需打卡，false：关闭无需打卡
     * @var bool
     */
    public $freeCheck;

}
