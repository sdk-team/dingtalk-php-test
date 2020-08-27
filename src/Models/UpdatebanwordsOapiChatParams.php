<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdatebanwordsOapiChatParams extends Model {
    protected $_name = [
        'useridList' => 'userid_list',
        'chatid' => 'chatid',
        'type' => 'type',
        'banWordsTime' => 'ban_words_time',
    ];
    public function validate() {
        Model::validateRequired('useridList', $this->useridList, true);
        Model::validateRequired('chatid', $this->chatid, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('banWordsTime', $this->banWordsTime, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->banWordsTime) {
            $res['ban_words_time'] = $this->banWordsTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdatebanwordsOapiChatParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['ban_words_time'])){
            $model->banWordsTime = $map['ban_words_time'];
        }
        return $model;
    }
    /**
     * @description 被禁言人id列表
     * @var array
     */
    public $useridList;

    /**
     * @description chatid
     * @var string
     */
    public $chatid;

    /**
     * @description 0表示剔除禁言名单，1表示加入禁言名单
     * @var int
     */
    public $type;

    /**
     * @description 禁言时间，单位ms
     * @var int
     */
    public $banWordsTime;

}
