<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiWorkspaceProjectMemberResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiWorkspaceProjectMemberResponseBody\result\tags;

class result extends Model {
    protected $_name = [
        'tags' => 'tags',
        'corpId' => 'corp_id',
        'userid' => 'userid',
        'fromUserId' => 'from_user_id',
        'fromCorpId' => 'from_corp_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->tags) {
            $res['tags'] = [];
            if(null !== $this->tags && is_array($this->tags)){
                $n = 0;
                foreach($this->tags as $item){
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->fromUserId) {
            $res['from_user_id'] = $this->fromUserId;
        }
        if (null !== $this->fromCorpId) {
            $res['from_corp_id'] = $this->fromCorpId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tags'])){
            if(!empty($map['tags'])){
                $model->tags = [];
                $n = 0;
                foreach($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['from_user_id'])){
            $model->fromUserId = $map['from_user_id'];
        }
        if(isset($map['from_corp_id'])){
            $model->fromCorpId = $map['from_corp_id'];
        }
        return $model;
    }
    /**
     * @description 角色
     * @var array
     */
    public $tags;

    /**
     * @description 组织id
     * @var string
     */
    public $corpId;

    /**
     * @description 成员id
     * @var string
     */
    public $userid;

    /**
     * @description 配合fromCorpId，在那个组织内的userid
     * @var string
     */
    public $fromUserId;

    /**
     * @description 从哪个组织选人
     * @var string
     */
    public $fromCorpId;

}
