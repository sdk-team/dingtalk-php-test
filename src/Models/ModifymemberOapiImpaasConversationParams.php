<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ModifymemberOapiImpaasConversationParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'memberidList' => 'memberid_list',
        'type' => 'type',
        'channel' => 'channel',
    ];
    public function validate() {
        Model::validateRequired('chatid', $this->chatid, true);
        Model::validateRequired('memberidList', $this->memberidList, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('channel', $this->channel, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->memberidList) {
            $res['memberid_list'] = $this->memberidList;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ModifymemberOapiImpaasConversationParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['memberid_list'])){
            if(!empty($map['memberid_list'])){
                $model->memberidList = $map['memberid_list'];
            }
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        return $model;
    }
    /**
     * @description 群ID
     * @var string
     */
    public $chatid;

    /**
     * @description 会员ID列表
     * @var array
     */
    public $memberidList;

    /**
     * @description 1 添加 2 删除
     * @var int
     */
    public $type;

    /**
     * @description 渠道
     * @var string
     */
    public $channel;

}
