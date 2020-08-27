<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchupdateOapiChatNickParams\userNickModel;

class BatchupdateOapiChatNickParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'userNickModel' => 'user_nick_model',
    ];
    public function validate() {
        Model::validateRequired('chatid', $this->chatid, true);
        Model::validateRequired('userNickModel', $this->userNickModel, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->userNickModel) {
            $res['user_nick_model'] = [];
            if(null !== $this->userNickModel && is_array($this->userNickModel)){
                $n = 0;
                foreach($this->userNickModel as $item){
                    $res['user_nick_model'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BatchupdateOapiChatNickParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['user_nick_model'])){
            if(!empty($map['user_nick_model'])){
                $model->userNickModel = [];
                $n = 0;
                foreach($map['user_nick_model'] as $item) {
                    $model->userNickModel[$n++] = null !== $item ? userNickModel::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 会话id
     * @var string
     */
    public $chatid;

    /**
     * @description userId和nick的模型
     * @var array
     */
    public $userNickModel;

}
