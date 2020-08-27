<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdatepunchesOapiAttendanceShiftParams\punches;

class UpdatepunchesOapiAttendanceShiftParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'punches' => 'punches',
        'shiftId' => 'shift_id',
    ];
    public function validate() {
        Model::validateRequired('opUserId', $this->opUserId, true);
        Model::validateRequired('shiftId', $this->shiftId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->punches) {
            $res['punches'] = [];
            if(null !== $this->punches && is_array($this->punches)){
                $n = 0;
                foreach($this->punches as $item){
                    $res['punches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->shiftId) {
            $res['shift_id'] = $this->shiftId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdatepunchesOapiAttendanceShiftParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['punches'])){
            if(!empty($map['punches'])){
                $model->punches = [];
                $n = 0;
                foreach($map['punches'] as $item) {
                    $model->punches[$n++] = null !== $item ? punches::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['shift_id'])){
            $model->shiftId = $map['shift_id'];
        }
        return $model;
    }
    /**
     * @description 操作者userId
     * @var string
     */
    public $opUserId;

    /**
     * @description 系统自动生成
     * @var array
     */
    public $punches;

    /**
     * @description 班次id
     * @var int
     */
    public $shiftId;

}
