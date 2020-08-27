<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiWorkrecordParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'recordId' => 'record_id',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('recordId', $this->recordId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->recordId) {
            $res['record_id'] = $this->recordId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiWorkrecordParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['record_id'])){
            $model->recordId = $map['record_id'];
        }
        return $model;
    }
    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 待办事项唯一id
     * @var string
     */
    public $recordId;

}
