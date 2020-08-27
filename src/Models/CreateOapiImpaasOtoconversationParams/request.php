<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiImpaasOtoconversationParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiImpaasOtoconversationParams\request\accountInfoList;

class request extends Model {
    protected $_name = [
        'accountInfoList' => 'account_info_list',
        'entranceIdList' => 'entrance_id_list',
        'uuid' => 'uuid',
        'channel' => 'channel',
        'extension' => 'extension',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->accountInfoList) {
            $res['account_info_list'] = [];
            if(null !== $this->accountInfoList && is_array($this->accountInfoList)){
                $n = 0;
                foreach($this->accountInfoList as $item){
                    $res['account_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->entranceIdList) {
            $res['entrance_id_list'] = $this->entranceIdList;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['account_info_list'])){
            if(!empty($map['account_info_list'])){
                $model->accountInfoList = [];
                $n = 0;
                foreach($map['account_info_list'] as $item) {
                    $model->accountInfoList[$n++] = null !== $item ? accountInfoList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['entrance_id_list'])){
            if(!empty($map['entrance_id_list'])){
                $model->entranceIdList = $map['entrance_id_list'];
            }
        }
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        return $model;
    }
    /**
     * @description 账号列表，size=2。第一个表示自己，第二个表示对方
     * @var array
     */
    public $accountInfoList;

    /**
     * @description 入口id列表，size=2。普通会话填0，二级会话填entrnaceid
     * @var array
     */
    public $entranceIdList;

    /**
     * @description 用于去重和追踪
     * @var string
     */
    public $uuid;

    /**
     * @description channel名称
     * @var string
     */
    public $channel;

    /**
     * @description 扩展信息
     * @var string
     */
    public $extension;

}
