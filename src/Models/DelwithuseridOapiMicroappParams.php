<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DelwithuseridOapiMicroappParams extends Model {
    protected $_name = [
        'agentId' => 'agentId',
        'userids' => 'userids',
    ];
    public function validate() {
        Model::validateRequired('agentId', $this->agentId, true);
        Model::validateRequired('userids', $this->userids, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        if (null !== $this->userids) {
            $res['userids'] = $this->userids;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DelwithuseridOapiMicroappParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentId'])){
            $model->agentId = $map['agentId'];
        }
        if(isset($map['userids'])){
            if(!empty($map['userids'])){
                $model->userids = $map['userids'];
            }
        }
        return $model;
    }
    /**
     * @description 微应用实例化id，表示企业和微应用的唯一关系
     * @var int
     */
    public $agentId;

    /**
     * @description 用户id列表，最多10个
     * @var array
     */
    public $userids;

}
