<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetleavestatusOapiAttendanceParams extends Model {
    protected $_name = [
        'useridList' => 'userid_list',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('useridList', $this->useridList, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateMaximum('size', $this->size, 20);
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
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetleavestatusOapiAttendanceParams
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
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 待查询用户id列表，支持最多100个用户的批量查询
     * @var array
     */
    public $useridList;

    /**
     * @description 开始时间 ，时间戳，支持最多180天的查询
     * @var int
     */
    public $startTime;

    /**
     * @description 结束时间，时间戳，支持最多180天的查询
     * @var int
     */
    public $endTime;

    /**
     * @description 分页偏移，非负整数
     * @var int
     */
    public $offset;

    /**
     * @description 分页大小，正整数，最大20
     * @var int
     */
    public $size;

}
