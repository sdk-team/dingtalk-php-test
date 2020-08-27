<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiWorkspaceProjectParams extends Model {
    protected $_name = [
        'name' => 'name',
        'belongCorpUserid' => 'belong_corp_userid',
        'type' => 'type',
        'userid' => 'userid',
        'openConversationId' => 'open_conversation_id',
        'desc' => 'desc',
        'createGroup' => 'create_group',
        'templateId' => 'template_id',
        'outerId' => 'outer_id',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('belongCorpUserid', $this->belongCorpUserid, true);
        Model::validateRequired('type', $this->type, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->belongCorpUserid) {
            $res['belong_corp_userid'] = $this->belongCorpUserid;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->createGroup) {
            $res['create_group'] = $this->createGroup;
        }
        if (null !== $this->templateId) {
            $res['template_id'] = $this->templateId;
        }
        if (null !== $this->outerId) {
            $res['outer_id'] = $this->outerId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiWorkspaceProjectParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['belong_corp_userid'])){
            $model->belongCorpUserid = $map['belong_corp_userid'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['desc'])){
            $model->desc = $map['desc'];
        }
        if(isset($map['create_group'])){
            $model->createGroup = $map['create_group'];
        }
        if(isset($map['template_id'])){
            $model->templateId = $map['template_id'];
        }
        if(isset($map['outer_id'])){
            $model->outerId = $map['outer_id'];
        }
        return $model;
    }
    /**
     * @description 组织名，长度3-50个字符以内，不允许中划线、下划线、逗号、空格
     * @var string
     */
    public $name;

    /**
     * @description 创建人（主管理员）在归属组织内的userId
     * @var string
     */
    public $belongCorpUserid;

    /**
     * @description 1项目组织  2圈子组织
     * @var int
     */
    public $type;

    /**
     * @description 可以指定创建人在项目/圈子组织内的userId，如果不填系统随机生成
     * @var string
     */
    public $userid;

    /**
     * @description 开放的cid，如果有值会把该群作为组织的默认群，否则会新创建1个默认群
     * @var string
     */
    public $openConversationId;

    /**
     * @description 描述，长度256字符以内
     * @var string
     */
    public $desc;

    /**
     * @description 是否建圈自动建群
     * @var bool
     */
    public $createGroup;

    /**
     * @description 模板id
     * @var int
     */
    public $templateId;

    /**
     * @description 允许调用者传入外部id用于做系统关联
     * @var string
     */
    public $outerId;

}
