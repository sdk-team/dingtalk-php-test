<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiWorkspaceProjectRoleParams\tags;

class CreateOapiWorkspaceProjectRoleParams extends Model {
    protected $_name = [
        'tags' => 'tags',
    ];
    public function validate() {
        Model::validateRequired('tags', $this->tags, true);
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
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiWorkspaceProjectRoleParams
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
        return $model;
    }
    /**
     * @description 创建角色参数
     * @var array
     */
    public $tags;

}
