<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Asyncsend_v2OapiMessageCorpconversationParams\msg;

class Asyncsend_v2OapiMessageCorpconversationParams extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'useridList' => 'userid_list',
        'deptIdList' => 'dept_id_list',
        'toAllUser' => 'to_all_user',
        'msg' => 'msg',
    ];
    public function validate() {
        Model::validateRequired('agentId', $this->agentId, true);
        Model::validateRequired('msg', $this->msg, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        if (null !== $this->deptIdList) {
            $res['dept_id_list'] = $this->deptIdList;
        }
        if (null !== $this->toAllUser) {
            $res['to_all_user'] = $this->toAllUser;
        }
        if (null !== $this->msg) {
            $res['msg'] = null !== $this->msg ? $this->msg->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Asyncsend_v2OapiMessageCorpconversationParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        if(isset($map['dept_id_list'])){
            if(!empty($map['dept_id_list'])){
                $model->deptIdList = $map['dept_id_list'];
            }
        }
        if(isset($map['to_all_user'])){
            $model->toAllUser = $map['to_all_user'];
        }
        if(isset($map['msg'])){
            $model->msg = msg::fromMap($map['msg']);
        }
        return $model;
    }
    /**
     * @description 微应用的id
     * @var int
     */
    public $agentId;

    /**
     * @description 接收者的用户userid列表
     * @var array
     */
    public $useridList;

    /**
     * @description 接收者的部门id列表
     * @var array
     */
    public $deptIdList;

    /**
     * @description 是否发送给企业全部用户
     * @var bool
     */
    public $toAllUser;

    /**
     * @description 消息体，具体见文档
     * @var msg
     */
    public $msg;

}
