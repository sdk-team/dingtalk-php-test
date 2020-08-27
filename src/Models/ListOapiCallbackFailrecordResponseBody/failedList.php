<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCallbackFailrecordResponseBody;

use AlibabaCloud\Tea\Model;

class failedList extends Model {
    protected $_name = [
        'callBackData' => 'call_back_data',
        'callBackTag' => 'call_back_tag',
        'eventTime' => 'event_time',
        'corpid' => 'corpid',
        'id' => 'id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->callBackData) {
            $res['call_back_data'] = $this->callBackData;
        }
        if (null !== $this->callBackTag) {
            $res['call_back_tag'] = $this->callBackTag;
        }
        if (null !== $this->eventTime) {
            $res['event_time'] = $this->eventTime;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return failedList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['call_back_data'])){
            $model->callBackData = $map['call_back_data'];
        }
        if(isset($map['call_back_tag'])){
            $model->callBackTag = $map['call_back_tag'];
        }
        if(isset($map['event_time'])){
            $model->eventTime = $map['event_time'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description 回调数据。不同事件类型不同，通常为JSON String
     * @var string
     */
    public $callBackData;

    /**
     * @description 事件类型
     * @var string
     */
    public $callBackTag;

    /**
     * @description 失败时间。单位：毫秒
     * @var int
     */
    public $eventTime;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 回调失败记录id
     * @var int
     */
    public $id;

}
