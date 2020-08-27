<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiProjectInviteDataParams\inviteDataQuery;

class QueryOapiProjectInviteDataParams extends Model {
    protected $_name = [
        'inviteDataQuery' => 'invite_data_query',
    ];
    public function validate() {
        Model::validateRequired('inviteDataQuery', $this->inviteDataQuery, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->inviteDataQuery) {
            $res['invite_data_query'] = null !== $this->inviteDataQuery ? $this->inviteDataQuery->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiProjectInviteDataParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['invite_data_query'])){
            $model->inviteDataQuery = inviteDataQuery::fromMap($map['invite_data_query']);
        }
        return $model;
    }
    /**
     * @description 请求对象
     * @var inviteDataQuery
     */
    public $inviteDataQuery;

}
