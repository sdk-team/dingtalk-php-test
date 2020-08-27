<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiExtcontactResponseBody\results;

class ListOapiExtcontactResponseBody extends Model {
    protected $_name = [
        'results' => 'results',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->results) {
            $res['results'] = [];
            if(null !== $this->results && is_array($this->results)){
                $n = 0;
                foreach($this->results as $item){
                    $res['results'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListOapiExtcontactResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['results'])){
            if(!empty($map['results'])){
                $model->results = [];
                $n = 0;
                foreach($map['results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
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
    public $results;

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

}
