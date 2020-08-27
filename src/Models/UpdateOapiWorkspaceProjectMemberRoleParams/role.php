<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkspaceProjectMemberRoleParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkspaceProjectMemberRoleParams\role\tags;

class role extends Model {
    protected $_name = [
        'tags' => 'tags',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('userid', $this->userid, true);
    }
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
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return role
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
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 角色，不允许空，list内的元素不允许null。最多20个
     * @var array
     */
    public $tags;

    /**
     * @description 成员id
     * @var string
     */
    public $userid;

}
