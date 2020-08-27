<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiWorkspaceCorpMemberResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiWorkspaceCorpMemberResponseBody\result\tags;

class result extends Model {
    protected $_name = [
        'fromUserid' => 'from_userid',
        'corpId' => 'corp_id',
        'tags' => 'tags',
        'userid' => 'userid',
        'fromCorpId' => 'from_corp_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->fromUserid) {
            $res['from_userid'] = $this->fromUserid;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if(null !== $this->tags && is_array($this->tags)){
                $n = 0;
                foreach($this->tags as $item){
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
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
        if(isset($map['from_userid'])){
            $model->fromUserid = $map['from_userid'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['tags'])){
            if(!empty($map['tags'])){
                $model->tags = [];
                $n = 0;
                foreach($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['from_corp_id'])){
            $model->fromCorpId = $map['from_corp_id'];
        }
        return $model;
    }
    /**
     * @description 配合fromCorpId，在那个组织内的userid
     * @var string
     */
    public $fromUserid;

    /**
     * @description 组织id
     * @var string
     */
    public $corpId;

    /**
     * @description 角色
     * @var array
     */
    public $tags;

    /**
     * @description 成员id
     * @var string
     */
    public $userid;

    /**
     * @description 配合fromCorpId，在那个组织内的userid
     * @var string
     */
    public $fromCorpId;

}
