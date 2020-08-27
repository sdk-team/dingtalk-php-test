<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetmemberlistOapiImpaasGroupmemberParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'offset' => 'offset',
        'length' => 'length',
    ];
    public function validate() {
        Model::validateRequired('chatid', $this->chatid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->length) {
            $res['length'] = $this->length;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['length'])){
            $model->length = $map['length'];
        }
        return $model;
    }
    /**
     * @description 群ID
     * @var string
     */
    public $chatid;

    /**
     * @description 群成员列表偏移
     * @var int
     */
    public $offset;

    /**
     * @description 本次请求返回的群成员列表数量
     * @var int
     */
    public $length;

}
