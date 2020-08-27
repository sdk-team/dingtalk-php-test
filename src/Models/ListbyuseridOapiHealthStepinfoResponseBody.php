<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyuseridOapiHealthStepinfoResponseBody\stepinfoList;

class ListbyuseridOapiHealthStepinfoResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'stepinfoList' => 'stepinfo_list',
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
        if (null !== $this->stepinfoList) {
            $res['stepinfo_list'] = [];
            if(null !== $this->stepinfoList && is_array($this->stepinfoList)){
                $n = 0;
                foreach($this->stepinfoList as $item){
                    $res['stepinfo_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListbyuseridOapiHealthStepinfoResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['stepinfo_list'])){
            if(!empty($map['stepinfo_list'])){
                $model->stepinfoList = [];
                $n = 0;
                foreach($map['stepinfo_list'] as $item) {
                    $model->stepinfoList[$n++] = null !== $item ? stepinfoList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description 步数列表
     * @var array
     */
    public $stepinfoList;

}
