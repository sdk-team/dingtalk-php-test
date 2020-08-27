<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupPositionsParams\positionList;

class AddOapiAttendanceGroupPositionsParams extends Model {
    protected $_name = [
        'opUserid' => 'op_userid',
        'groupKey' => 'group_key',
        'positionList' => 'position_list',
    ];
    public function validate() {
        Model::validateRequired('groupKey', $this->groupKey, true);
        Model::validateRequired('positionList', $this->positionList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        if (null !== $this->groupKey) {
            $res['group_key'] = $this->groupKey;
        }
        if (null !== $this->positionList) {
            $res['position_list'] = [];
            if(null !== $this->positionList && is_array($this->positionList)){
                $n = 0;
                foreach($this->positionList as $item){
                    $res['position_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiAttendanceGroupPositionsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        if(isset($map['group_key'])){
            $model->groupKey = $map['group_key'];
        }
        if(isset($map['position_list'])){
            if(!empty($map['position_list'])){
                $model->positionList = [];
                $n = 0;
                foreach($map['position_list'] as $item) {
                    $model->positionList[$n++] = null !== $item ? positionList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 操作人userId
     * @var string
     */
    public $opUserid;

    /**
     * @description 考勤组id
     * @var string
     */
    public $groupKey;

    /**
     * @description postion列表
     * @var array
     */
    public $positionList;

}
