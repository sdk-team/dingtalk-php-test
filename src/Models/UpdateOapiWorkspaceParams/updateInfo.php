<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkspaceParams;

use AlibabaCloud\Tea\Model;

class updateInfo extends Model {
    protected $_name = [
        'name' => 'name',
        'ownerUserid' => 'owner_userid',
        'logoMediaId' => 'logo_media_id',
        'desc' => 'desc',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ownerUserid) {
            $res['owner_userid'] = $this->ownerUserid;
        }
        if (null !== $this->logoMediaId) {
            $res['logo_media_id'] = $this->logoMediaId;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return updateInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['owner_userid'])){
            $model->ownerUserid = $map['owner_userid'];
        }
        if(isset($map['logo_media_id'])){
            $model->logoMediaId = $map['logo_media_id'];
        }
        if(isset($map['desc'])){
            $model->desc = $map['desc'];
        }
        return $model;
    }
    /**
     * @description 非必填必填。组织名，长度3-50个字符以内，不允许中划线、下划线、逗号、空格
     * @var string
     */
    public $name;

    /**
     * @description 非必填。修改项目负责人，传新负责人在项目组织内的userId（注意不是归属组织的）
     * @var string
     */
    public $ownerUserid;

    /**
     * @description 非必填。mediaId格式，参考https://ding-doc.dingtalk.com/doc#/serverapi2/bcmg0i
     * @var string
     */
    public $logoMediaId;

    /**
     * @description 非必填。描述，长度256字符以内
     * @var string
     */
    public $desc;

}
