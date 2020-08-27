<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmObjectdataFollowrecordResponseBody\resultList;

class ListOapiCrmObjectdataFollowrecordResponseBody extends Model {
    protected $_name = [
        'resultList' => 'result_list',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->resultList) {
            $res['result_list'] = [];
            if(null !== $this->resultList && is_array($this->resultList)){
                $n = 0;
                foreach($this->resultList as $item){
                    $res['result_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiCrmObjectdataFollowrecordResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['result_list'])){
            if(!empty($map['result_list'])){
                $model->resultList = [];
                $n = 0;
                foreach($map['result_list'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        return $model;
    }
    /**
     * @description 实例数据
     * @var array
     */
    public $resultList;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

}
