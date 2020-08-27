<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiDepartmentResponseBody;

use AlibabaCloud\Tea\Model;

class department extends Model {
    protected $_name = [
        'id' => 'id',
        'name' => 'name',
        'parentid' => 'parentid',
        'sourceIdentifier' => 'sourceIdentifier',
        'createDeptGroup' => 'createDeptGroup',
        'autoAddUser' => 'autoAddUser',
        'isFromUnionOrg' => 'isFromUnionOrg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parentid) {
            $res['parentid'] = $this->parentid;
        }
        if (null !== $this->sourceIdentifier) {
            $res['sourceIdentifier'] = $this->sourceIdentifier;
        }
        if (null !== $this->createDeptGroup) {
            $res['createDeptGroup'] = $this->createDeptGroup;
        }
        if (null !== $this->autoAddUser) {
            $res['autoAddUser'] = $this->autoAddUser;
        }
        if (null !== $this->isFromUnionOrg) {
            $res['isFromUnionOrg'] = $this->isFromUnionOrg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return department
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['parentid'])){
            $model->parentid = $map['parentid'];
        }
        if(isset($map['sourceIdentifier'])){
            $model->sourceIdentifier = $map['sourceIdentifier'];
        }
        if(isset($map['createDeptGroup'])){
            $model->createDeptGroup = $map['createDeptGroup'];
        }
        if(isset($map['autoAddUser'])){
            $model->autoAddUser = $map['autoAddUser'];
        }
        if(isset($map['isFromUnionOrg'])){
            $model->isFromUnionOrg = $map['isFromUnionOrg'];
        }
        return $model;
    }
    /**
     * @description id
     * @var int
     */
    public $id;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description parentid
     * @var int
     */
    public $parentid;

    /**
     * @description sourceIdentifier
     * @var string
     */
    public $sourceIdentifier;

    /**
     * @description createDeptGroup
     * @var bool
     */
    public $createDeptGroup;

    /**
     * @description autoAddUser
     * @var bool
     */
    public $autoAddUser;

    /**
     * @description isFromUnionOrg
     * @var bool
     */
    public $isFromUnionOrg;

}
