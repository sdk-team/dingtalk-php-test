<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiImpaasGroupParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiImpaasGroupParams\request\groupOwner;

class request extends Model {
    protected $_name = [
        'groupOwner' => 'group_owner',
        'groupName' => 'group_name',
        'chatid' => 'chatid',
        'showHistoryType' => 'show_history_type',
    ];
    public function validate() {
        Model::validateRequired('groupOwner', $this->groupOwner, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('chatid', $this->chatid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->groupOwner) {
            $res['group_owner'] = null !== $this->groupOwner ? $this->groupOwner->toMap() : null;
        }
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->showHistoryType) {
            $res['show_history_type'] = $this->showHistoryType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_owner'])){
            $model->groupOwner = groupOwner::fromMap($map['group_owner']);
        }
        if(isset($map['group_name'])){
            $model->groupName = $map['group_name'];
        }
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['show_history_type'])){
            $model->showHistoryType = $map['show_history_type'];
        }
        return $model;
    }
    /**
     * @description 修改后的群主，若为空或与当前群主相同，则不会对群主进行变更操作。
     * @var groupOwner
     */
    public $groupOwner;

    /**
     * @description 修改后的群名称
     * @var string
     */
    public $groupName;

    /**
     * @description 群ID，由创建群接口返回
     * @var string
     */
    public $chatid;

    /**
     * @description 新人进群是否能查看最近100条记录。0:不能；1:可以查看最近100条记录；不填默认为0
     * @var int
     */
    public $showHistoryType;

}
