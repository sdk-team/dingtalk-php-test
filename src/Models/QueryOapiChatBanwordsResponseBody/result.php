<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiChatBanwordsResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiChatBanwordsResponseBody\result\userBanWords;

class result extends Model {
    protected $_name = [
        'userBanWords' => 'user_ban_words',
        'allBanWords' => 'all_ban_words',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userBanWords) {
            $res['user_ban_words'] = null !== $this->userBanWords ? $this->userBanWords->toMap() : null;
        }
        if (null !== $this->allBanWords) {
            $res['all_ban_words'] = $this->allBanWords;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['user_ban_words'])){
            $model->userBanWords = userBanWords::fromMap($map['user_ban_words']);
        }
        if(isset($map['all_ban_words'])){
            $model->allBanWords = $map['all_ban_words'];
        }
        return $model;
    }
    /**
     * @description 单个人禁言的状态
     * @var userBanWords
     */
    public $userBanWords;

    /**
     * @description true为开启全员禁言，false为关闭全员禁言
     * @var bool
     */
    public $allBanWords;

}
