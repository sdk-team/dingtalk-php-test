<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsendresultOapiMessageCorpconversationResponseBody\sendResult;

use AlibabaCloud\Tea\Model;

class forbiddenList extends Model {
    protected $_name = [
        'code' => 'code',
        'count' => 'count',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return forbiddenList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        if(isset($map['count'])){
            $model->count = $map['count'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 流控code
     * @var string
     */
    public $code;

    /**
     * @description 流控阀值
     * @var int
     */
    public $count;

    /**
     * @description 员工userId
     * @var string
     */
    public $userid;

}
