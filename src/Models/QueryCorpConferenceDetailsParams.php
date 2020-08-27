<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryCorpConferenceDetailsParams extends Model {
    protected $_name = [
        'sinceTime' => 'since_time',
        'limit' => 'limit',
        'callerUserId' => 'caller_user_id',
        'memberUserId' => 'member_user_id',
    ];
    public function validate() {
        Model::validatePattern('sinceTime', $this->sinceTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->sinceTime) {
            $res['since_time'] = $this->sinceTime;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->callerUserId) {
            $res['caller_user_id'] = $this->callerUserId;
        }
        if (null !== $this->memberUserId) {
            $res['member_user_id'] = $this->memberUserId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryCorpConferenceDetailsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['since_time'])){
            $model->sinceTime = $map['since_time'];
        }
        if(isset($map['limit'])){
            $model->limit = $map['limit'];
        }
        if(isset($map['caller_user_id'])){
            $model->callerUserId = $map['caller_user_id'];
        }
        if(isset($map['member_user_id'])){
            $model->memberUserId = $map['member_user_id'];
        }
        return $model;
    }
    /**
     * @description 查询起始时间
     * @var string
     */
    public $sinceTime;

    /**
     * @description 查询个数，上限100
     * @var int
     */
    public $limit;

    /**
     * @description 主叫userId
     * @var string
     */
    public $callerUserId;

    /**
     * @description 成员userId
     * @var string
     */
    public $memberUserId;

}
