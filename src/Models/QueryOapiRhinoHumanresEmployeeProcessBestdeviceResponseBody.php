<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresEmployeeProcessBestdeviceResponseBody\model;

class QueryOapiRhinoHumanresEmployeeProcessBestdeviceResponseBody extends Model {
    protected $_name = [
        'hsfcode' => 'hsfcode',
        'success' => 'success',
        'model' => 'model',
        'errmsg' => 'errmsg',
        'externalMsgInfo' => 'external_msg_info',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hsfcode) {
            $res['hsfcode'] = $this->hsfcode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->model) {
            $res['model'] = [];
            if(null !== $this->model && is_array($this->model)){
                $n = 0;
                foreach($this->model as $item){
                    $res['model'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->externalMsgInfo) {
            $res['external_msg_info'] = $this->externalMsgInfo;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiRhinoHumanresEmployeeProcessBestdeviceResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['hsfcode'])){
            $model->hsfcode = $map['hsfcode'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['model'])){
            if(!empty($map['model'])){
                $model->model = [];
                $n = 0;
                foreach($map['model'] as $item) {
                    $model->model[$n++] = null !== $item ? model::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['external_msg_info'])){
            $model->externalMsgInfo = $map['external_msg_info'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description code
     * @var int
     */
    public $hsfcode;

    /**
     * @description 是否成功
     * @var bool
     */
    public $success;

    /**
     * @description 结果
     * @var array
     */
    public $model;

    /**
     * @description 返回文案
     * @var string
     */
    public $errmsg;

    /**
     * @description 额外返回信息
     * @var string
     */
    public $externalMsgInfo;

    /**
     * @description 1
     * @var int
     */
    public $errcode;

}
