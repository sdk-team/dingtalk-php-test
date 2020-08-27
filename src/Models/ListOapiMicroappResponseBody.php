<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiMicroappResponseBody\appList;

class ListOapiMicroappResponseBody extends Model {
    protected $_name = [
        'appList' => 'appList',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->appList) {
            $res['appList'] = [];
            if(null !== $this->appList && is_array($this->appList)){
                $n = 0;
                foreach($this->appList as $item){
                    $res['appList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiMicroappResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['appList'])){
            if(!empty($map['appList'])){
                $model->appList = [];
                $n = 0;
                foreach($map['appList'] as $item) {
                    $model->appList[$n++] = null !== $item ? appList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description appList
     * @var array
     */
    public $appList;

    /**
     * @description 对返回码的文本描述内容
     * @var string
     */
    public $errmsg;

    /**
     * @description 返回码
     * @var int
     */
    public $errcode;

}
