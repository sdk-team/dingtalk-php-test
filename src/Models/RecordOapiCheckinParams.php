<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RecordOapiCheckinParams extends Model {
    protected $_name = [
        'departmentId' => 'department_id',
        'endTime' => 'end_time',
        'startTime' => 'start_time',
        'offset' => 'offset',
        'size' => 'size',
        'order' => 'order',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->departmentId) {
            $res['department_id'] = $this->departmentId;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RecordOapiCheckinParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['department_id'])){
            $model->departmentId = $map['department_id'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['order'])){
            $model->order = $map['order'];
        }
        return $model;
    }
    /**
     * @description 部门id（1 表示根部门）
     * @var string
     */
    public $departmentId;

    /**
     * @description 开始时间，精确到毫秒，注意字段的位数 例：1520956800000
     * @var int
     */
    public $endTime;

    /**
     * @description 结束时间，精确到毫秒，注意字段的位数 例：1520956800000（默认为当前时间）
     * @var int
     */
    public $startTime;

    /**
     * @description 支持分页查询，与size 参数同时设置时才生效，此参数代表偏移量，从0 开始
     * @var int
     */
    public $offset;

    /**
     * @description 支持分页查询，与offset 参数同时设置时才生效，此参数代表分页大小，最大100
     * @var int
     */
    public $size;

    /**
     * @description 排序，asc 为正序，desc 为倒序
     * @var string
     */
    public $order;

}
