<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiImpaasGroupParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiImpaasGroupParams\request\creater;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiImpaasGroupParams\request\memberList;

class request extends Model {
    protected $_name = [
        'name' => 'name',
        'creater' => 'creater',
        'type' => 'type',
        'channel' => 'channel',
        'memberList' => 'member_list',
        'extension' => 'extension',
        'uuid' => 'uuid',
        'entranceId' => 'entrance_id',
        'showHistoryType' => 'show_history_type',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('creater', $this->creater, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('memberList', $this->memberList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->creater) {
            $res['creater'] = null !== $this->creater ? $this->creater->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
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
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->entranceId) {
            $res['entrance_id'] = $this->entranceId;
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
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['creater'])){
            $model->creater = creater::fromMap($map['creater']);
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
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
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        if(isset($map['entrance_id'])){
            $model->entranceId = $map['entrance_id'];
        }
        if(isset($map['show_history_type'])){
            $model->showHistoryType = $map['show_history_type'];
        }
        return $model;
    }
    /**
     * @description 群名称
     * @var string
     */
    public $name;

    /**
     * @description 创建者
     * @var creater
     */
    public $creater;

    /**
     * @description 群类型,目前没有使用，填0即可
     * @var int
     */
    public $type;

    /**
     * @description 接入方channel信息，该值由接入方接入IMPaaS平台时，向IMPaaS平台申请，例如“hema”“eleme”等。
     * @var string
     */
    public $channel;

    /**
     * @description 群成员列表
     * @var array
     */
    public $memberList;

    /**
     * @description 扩展数据,业务可以自定义，目前最大支持256B
     * @var string
     */
    public $extension;

    /**
     * @description uuid, 用于防止弱网情况下超时导致重复创建, 一分钟内传递相同的uuid会返回同一个群，传空则不去重
     * @var string
     */
    public $uuid;

    /**
     * @description 二级会话入口ID
     * @var int
     */
    public $entranceId;

    /**
     * @description 新人进群是否能查看最近100条记录。0:不能；1:可以查看最近100条记录；不填默认为0
     * @var int
     */
    public $showHistoryType;

}
