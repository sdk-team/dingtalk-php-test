<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BindqueryOapiRetailUserResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BindqueryOapiRetailUserResponseBody\result\outerList;

class result extends Model {
    protected $_name = [
        'token' => 'token',
        'extension' => 'extension',
        'outerList' => 'outer_list',
        'associateUnionId' => 'associate_union_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->outerList) {
            $res['outer_list'] = [];
            if(null !== $this->outerList && is_array($this->outerList)){
                $n = 0;
                foreach($this->outerList as $item){
                    $res['outer_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->associateUnionId) {
            $res['associate_union_id'] = $this->associateUnionId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['token'])){
            $model->token = $map['token'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['outer_list'])){
            if(!empty($map['outer_list'])){
                $model->outerList = [];
                $n = 0;
                foreach($map['outer_list'] as $item) {
                    $model->outerList[$n++] = null !== $item ? outerList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['associate_union_id'])){
            $model->associateUnionId = $map['associate_union_id'];
        }
        return $model;
    }
    /**
     * @description token
     * @var string
     */
    public $token;

    /**
     * @description 扩展字段
     * @var string
     */
    public $extension;

    /**
     * @description 帐号列表
     * @var array
     */
    public $outerList;

    /**
     * @description 中心组织唯一ID
     * @var string
     */
    public $associateUnionId;

}
