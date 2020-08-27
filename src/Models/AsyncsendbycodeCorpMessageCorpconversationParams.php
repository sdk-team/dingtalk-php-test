<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AsyncsendbycodeCorpMessageCorpconversationParams extends Model {
    protected $_name = [
        'msgtype' => 'msgtype',
        'agentId' => 'agent_id',
        'userIdList' => 'user_id_list',
        'deptIdList' => 'dept_id_list',
        'toAllUser' => 'to_all_user',
        'msgcontent' => 'msgcontent',
        'code' => 'code',
    ];
    public function validate() {
        Model::validateRequired('msgtype', $this->msgtype, true);
        Model::validateRequired('agentId', $this->agentId, true);
        Model::validateRequired('msgcontent', $this->msgcontent, true);
        Model::validateRequired('code', $this->code, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->msgtype) {
            $res['msgtype'] = $this->msgtype;
        }
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->userIdList) {
            $res['user_id_list'] = $this->userIdList;
        }
        if (null !== $this->deptIdList) {
            $res['dept_id_list'] = $this->deptIdList;
        }
        if (null !== $this->toAllUser) {
            $res['to_all_user'] = $this->toAllUser;
        }
        if (null !== $this->msgcontent) {
            $res['msgcontent'] = $this->msgcontent;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AsyncsendbycodeCorpMessageCorpconversationParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['msgtype'])){
            $model->msgtype = $map['msgtype'];
        }
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['user_id_list'])){
            if(!empty($map['user_id_list'])){
                $model->userIdList = $map['user_id_list'];
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
        if(isset($map['msgcontent'])){
            $model->msgcontent = $map['msgcontent'];
        }
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        return $model;
    }
    /**
     * @description 消息类型,如text、file、oa等，具体见文档
     * @var string
     */
    public $msgtype;

    /**
     * @description 微应用的id
     * @var int
     */
    public $agentId;

    /**
     * @description 接收者的用户userid列表
     * @var array
     */
    public $userIdList;

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
     * @description 与msgtype对应的消息体，具体见文档
     * @var string
     */
    public $msgcontent;

    /**
     * @description 用户操作产生的授权码
     * @var string
     */
    public $code;

}
