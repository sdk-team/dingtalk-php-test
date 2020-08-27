<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiUserCorpinfoResponseBody\corpList;

class ListOapiUserCorpinfoResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'corpList' => 'corp_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->corpList) {
            $res['corp_list'] = [];
            if(null !== $this->corpList && is_array($this->corpList)){
                $n = 0;
                foreach($this->corpList as $item){
                    $res['corp_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiUserCorpinfoResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['corp_list'])){
            if(!empty($map['corp_list'])){
                $model->corpList = [];
                $n = 0;
                foreach($map['corp_list'] as $item) {
                    $model->corpList[$n++] = null !== $item ? corpList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 企业列表
     * @var array
     */
    public $corpList;

}
