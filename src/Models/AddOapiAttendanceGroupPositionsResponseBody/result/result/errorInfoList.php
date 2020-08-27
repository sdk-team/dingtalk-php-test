<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupPositionsResponseBody\result\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupPositionsResponseBody\result\result\errorInfoList\failureList;

class errorInfoList extends Model {
    protected $_name = [
        'failureList' => 'failure_list',
        'msg' => 'msg',
        'code' => 'code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->failureList) {
            $res['failure_list'] = [];
            if(null !== $this->failureList && is_array($this->failureList)){
                $n = 0;
                foreach($this->failureList as $item){
                    $res['failure_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return errorInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['failure_list'])){
            if(!empty($map['failure_list'])){
                $model->failureList = [];
                $n = 0;
                foreach($map['failure_list'] as $item) {
                    $model->failureList[$n++] = null !== $item ? failureList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['msg'])){
            $model->msg = $map['msg'];
        }
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        return $model;
    }
    /**
     * @description 失败列表
     * @var array
     */
    public $failureList;

    /**
     * @description 错误信息
     * @var string
     */
    public $msg;

    /**
     * @description 错误码
     * @var string
     */
    public $code;

}
