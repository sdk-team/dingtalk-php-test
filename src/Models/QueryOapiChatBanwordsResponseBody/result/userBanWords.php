<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiChatBanwordsResponseBody\result;

use AlibabaCloud\Tea\Model;

class userBanWords extends Model {
    protected $_name = [
        'startTime' => 'start_time',
        'banWordsStatus' => 'ban_words_status',
        'endTime' => 'end_time',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->banWordsStatus) {
            $res['ban_words_status'] = $this->banWordsStatus;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return userBanWords
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['ban_words_status'])){
            $model->banWordsStatus = $map['ban_words_status'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        return $model;
    }
    /**
     * @description 开始禁言的时间戳
     * @var int
     */
    public $startTime;

    /**
     * @description true为该用户禁言，false该用户没有被禁言
     * @var bool
     */
    public $banWordsStatus;

    /**
     * @description 结束禁言的时间戳
     * @var int
     */
    public $endTime;

}
