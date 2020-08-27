<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\RecordOapiCheckinResponseBody\data;

class RecordOapiCheckinResponseBody extends Model {
    protected $_name = [
        'data' => 'data',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = [];
            if(null !== $this->data && is_array($this->data)){
                $n = 0;
                foreach($this->data as $item){
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return RecordOapiCheckinResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['data'])){
            if(!empty($map['data'])){
                $model->data = [];
                $n = 0;
                foreach($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
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
     * @description data
     * @var array
     */
    public $data;

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
