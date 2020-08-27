<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCrmObjectdataContactParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCrmObjectdataContactParams\instance\permission;

class instance extends Model {
    protected $_name = [
        'creatorUserid' => 'creator_userid',
        'creatorNick' => 'creator_nick',
        'data' => 'data',
        'extendData' => 'extend_data',
        'permission' => 'permission',
    ];
    public function validate() {
        Model::validateRequired('creatorUserid', $this->creatorUserid, true);
        Model::validateRequired('data', $this->data, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->creatorUserid) {
            $res['creator_userid'] = $this->creatorUserid;
        }
        if (null !== $this->creatorNick) {
            $res['creator_nick'] = $this->creatorNick;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->extendData) {
            $res['extend_data'] = $this->extendData;
        }
        if (null !== $this->permission) {
            $res['permission'] = null !== $this->permission ? $this->permission->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return instance
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['creator_userid'])){
            $model->creatorUserid = $map['creator_userid'];
        }
        if(isset($map['creator_nick'])){
            $model->creatorNick = $map['creator_nick'];
        }
        if(isset($map['data'])){
            $model->data = $map['data'];
        }
        if(isset($map['extend_data'])){
            $model->extendData = $map['extend_data'];
        }
        if(isset($map['permission'])){
            $model->permission = permission::fromMap($map['permission']);
        }
        return $model;
    }
    /**
     * @description 记录创建人的用户ID
     * @var string
     */
    public $creatorUserid;

    /**
     * @description 记录创建人的昵称
     * @var string
     */
    public $creatorNick;

    /**
     * @description 数据内容
     * @var string
     */
    public $data;

    /**
     * @description 扩展数据内容
     * @var string
     */
    public $extendData;

    /**
     * @description 权限
     * @var permission
     */
    public $permission;

}
