<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetmemberlistOapiImpaasGroupmemberResponseBody\memberList;

class GetmemberlistOapiImpaasGroupmemberResponseBody extends Model {
    protected $_name = [
        'memberList' => 'member_list',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->memberList) {
            $res['member_list'] = [];
            if(null !== $this->memberList && is_array($this->memberList)){
                $n = 0;
                foreach($this->memberList as $item){
                    $res['member_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetmemberlistOapiImpaasGroupmemberResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['member_list'])){
            if(!empty($map['member_list'])){
                $model->memberList = [];
                $n = 0;
                foreach($map['member_list'] as $item) {
                    $model->memberList[$n++] = null !== $item ? memberList::fromMap($item) : $item;
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
     * @description result
     * @var array
     */
    public $memberList;

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

}
