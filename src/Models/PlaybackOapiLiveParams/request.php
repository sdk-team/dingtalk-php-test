<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\PlaybackOapiLiveParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'startTime' => 'start_time',
        'pageSize' => 'page_size',
        'offset' => 'offset',
        'endTime' => 'end_time',
    ];
    public function validate() {
        Model::validatePattern('startTime', $this->startTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('endTime', $this->endTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        return $model;
    }
    /**
     * @description 直播开始时间
     * @var string
     */
    public $startTime;

    /**
     * @description 直播结束时间
     * @var int
     */
    public $pageSize;

    /**
     * @description 页面大小
     * @var int
     */
    public $offset;

    /**
     * @description 偏移量
     * @var string
     */
    public $endTime;

}
