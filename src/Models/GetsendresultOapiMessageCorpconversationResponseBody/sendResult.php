<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsendresultOapiMessageCorpconversationResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsendresultOapiMessageCorpconversationResponseBody\sendResult\forbiddenList;

class sendResult extends Model {
    protected $_name = [
        'invalidUserIdList' => 'invalid_user_id_list',
        'forbiddenUserIdList' => 'forbidden_user_id_list',
        'failedUserIdList' => 'failed_user_id_list',
        'readUserIdList' => 'read_user_id_list',
        'unreadUserIdList' => 'unread_user_id_list',
        'invalidDeptIdList' => 'invalid_dept_id_list',
        'forbiddenList' => 'forbidden_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->invalidUserIdList) {
            $res['invalid_user_id_list'] = $this->invalidUserIdList;
        }
        if (null !== $this->forbiddenUserIdList) {
            $res['forbidden_user_id_list'] = $this->forbiddenUserIdList;
        }
        if (null !== $this->failedUserIdList) {
            $res['failed_user_id_list'] = $this->failedUserIdList;
        }
        if (null !== $this->readUserIdList) {
            $res['read_user_id_list'] = $this->readUserIdList;
        }
        if (null !== $this->unreadUserIdList) {
            $res['unread_user_id_list'] = $this->unreadUserIdList;
        }
        if (null !== $this->invalidDeptIdList) {
            $res['invalid_dept_id_list'] = $this->invalidDeptIdList;
        }
        if (null !== $this->forbiddenList) {
            $res['forbidden_list'] = [];
            if(null !== $this->forbiddenList && is_array($this->forbiddenList)){
                $n = 0;
                foreach($this->forbiddenList as $item){
                    $res['forbidden_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return sendResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['invalid_user_id_list'])){
            if(!empty($map['invalid_user_id_list'])){
                $model->invalidUserIdList = $map['invalid_user_id_list'];
            }
        }
        if(isset($map['forbidden_user_id_list'])){
            if(!empty($map['forbidden_user_id_list'])){
                $model->forbiddenUserIdList = $map['forbidden_user_id_list'];
            }
        }
        if(isset($map['failed_user_id_list'])){
            if(!empty($map['failed_user_id_list'])){
                $model->failedUserIdList = $map['failed_user_id_list'];
            }
        }
        if(isset($map['read_user_id_list'])){
            if(!empty($map['read_user_id_list'])){
                $model->readUserIdList = $map['read_user_id_list'];
            }
        }
        if(isset($map['unread_user_id_list'])){
            if(!empty($map['unread_user_id_list'])){
                $model->unreadUserIdList = $map['unread_user_id_list'];
            }
        }
        if(isset($map['invalid_dept_id_list'])){
            if(!empty($map['invalid_dept_id_list'])){
                $model->invalidDeptIdList = $map['invalid_dept_id_list'];
            }
        }
        if(isset($map['forbidden_list'])){
            if(!empty($map['forbidden_list'])){
                $model->forbiddenList = [];
                $n = 0;
                foreach($map['forbidden_list'] as $item) {
                    $model->forbiddenList[$n++] = null !== $item ? forbiddenList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 无效的用户id
     * @var array
     */
    public $invalidUserIdList;

    /**
     * @description 因发送消息过于频繁或超量而被流控过滤后实际未发送的userid。未被限流的接收者仍会被成功发送。限流规则包括：1、给同一用户发相同内容消息一天仅允许一次；2、如果是ISV接入方式，给同一用户发消息一天不得超过100次；如果是企业接入方式，此上限为500。
     * @var array
     */
    public $forbiddenUserIdList;

    /**
     * @description 发送失败的用户id
     * @var array
     */
    public $failedUserIdList;

    /**
     * @description 已读消息的用户id
     * @var array
     */
    public $readUserIdList;

    /**
     * @description 未读消息的用户id
     * @var array
     */
    public $unreadUserIdList;

    /**
     * @description 无效的部门id
     * @var array
     */
    public $invalidDeptIdList;

    /**
     * @description 推送被禁止的具体原因
     * @var array
     */
    public $forbiddenList;

}
