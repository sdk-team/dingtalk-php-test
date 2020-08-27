<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAttendanceVacationTypeResponseBody\result;

class ListOapiAttendanceVacationTypeResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'success' => 'success',
        'result' => 'result',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->result) {
            $res['result'] = [];
            if(null !== $this->result && is_array($this->result)){
                $n = 0;
                foreach($this->result as $item){
                    $res['result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiAttendanceVacationTypeResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['result'])){
            if(!empty($map['result'])){
                $model->result = [];
                $n = 0;
                foreach($map['result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description dingOpenErrcode
     * @var int
     */
    public $errcode;

    /**
     * @description errorMsg
     * @var string
     */
    public $errmsg;

    /**
     * @description 是否正确访问
     * @var bool
     */
    public $success;

    /**
     * @description result
     * @var array
     */
    public $result;

}
