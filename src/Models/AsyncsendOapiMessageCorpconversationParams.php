<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AsyncsendOapiMessageCorpconversationParams extends Model {
    protected $_name = [
        'msgtype' => 'msgtype',
        'agentId' => 'agent_id',
        'useridList' => 'userid_list',
        'deptIdList' => 'dept_id_list',
        'toAllUser' => 'to_all_user',
        'msgcontent' => 'msgcontent',
    ];
    public function validate() {
        Model::validateRequired('msgtype', $this->msgtype, true);
        Model::validateRequired('agentId', $this->agentId, true);
        Model::validateRequired('msgcontent', $this->msgcontent, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->msgtype) {
            $res['msgtype'] = $this->msgtype;
        }
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
        if (null !== $this->msgcontent) {
            $res['msgcontent'] = $this->msgcontent;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AsyncsendOapiMessageCorpconversationParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['msgtype'])){
            $model->msgtype = $map['msgtype'];
        }
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
        if(isset($map['msgcontent'])){
            $model->msgcontent = $map['msgcontent'];
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
     * @description 与msgtype对应的消息体，具体见文档
     * @var string
     */
    public $msgcontent;

}
