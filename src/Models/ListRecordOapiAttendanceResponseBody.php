<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListRecordOapiAttendanceResponseBody\recordresult;

class ListRecordOapiAttendanceResponseBody extends Model {
    protected $_name = [
        'recordresult' => 'recordresult',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->recordresult) {
            $res['recordresult'] = [];
            if(null !== $this->recordresult && is_array($this->recordresult)){
                $n = 0;
                foreach($this->recordresult as $item){
                    $res['recordresult'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListRecordOapiAttendanceResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['recordresult'])){
            if(!empty($map['recordresult'])){
                $model->recordresult = [];
                $n = 0;
                foreach($map['recordresult'] as $item) {
                    $model->recordresult[$n++] = null !== $item ? recordresult::fromMap($item) : $item;
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
     * @description recordresult
     * @var array
     */
    public $recordresult;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

}
