<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiImpaasGroupmemberParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiImpaasGroupmemberParams\request\memberList;

class request extends Model {
    protected $_name = [
        'modifyType' => 'modify_type',
        'memberList' => 'member_list',
        'channel' => 'channel',
        'chatid' => 'chatid',
    ];
    public function validate() {
        Model::validateRequired('modifyType', $this->modifyType, true);
        Model::validateRequired('memberList', $this->memberList, true);
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('chatid', $this->chatid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->modifyType) {
            $res['modify_type'] = $this->modifyType;
        }
        if (null !== $this->memberList) {
            $res['member_list'] = [];
            if(null !== $this->memberList && is_array($this->memberList)){
                $n = 0;
                foreach($this->memberList as $item){
                    $res['member_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['modify_type'])){
            $model->modifyType = $map['modify_type'];
        }
        if(isset($map['member_list'])){
            if(!empty($map['member_list'])){
                $model->memberList = [];
                $n = 0;
                foreach($map['member_list'] as $item) {
                    $model->memberList[$n++] = null !== $item ? memberList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        return $model;
    }
    /**
     * @description 该参数表示本次请求的操作类型，“1”表示添加成员，“2”表示删除成员。
     * @var string
     */
    public $modifyType;

    /**
     * @description 待操作成员列表
     * @var array
     */
    public $memberList;

    /**
     * @description 接入方channel信息，该值由接入方接入IMPaaS平台时，向IMPaaS平台申请，例如“hema”“eleme”等。
     * @var string
     */
    public $channel;

    /**
     * @description 群ID，由创建群接口返回。
     * @var string
     */
    public $chatid;

}
