<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetSmartworkCheckinRecordParams extends Model {
    protected $_name = [
        'useridList' => 'userid_list',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'cursor' => 'cursor',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('useridList', $this->useridList, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetSmartworkCheckinRecordParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 需要查询的用户列表
     * @var array
     */
    public $useridList;

    /**
     * @description 起始时间,单位毫秒
     * @var int
     */
    public $startTime;

    /**
     * @description 截止时间，单位毫秒。如果是取1个人的数据，时间范围最大到10天，如果是取多个人的数据，时间范围最大1天。
     * @var int
     */
    public $endTime;

    /**
     * @description 分页查询的游标，最开始可以传0
     * @var int
     */
    public $cursor;

    /**
     * @description 分页查询的每页大小，最大100
     * @var int
     */
    public $size;

}
