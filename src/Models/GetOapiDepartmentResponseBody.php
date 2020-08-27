<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiDepartmentResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'id' => 'id',
        'name' => 'name',
        'order' => 'order',
        'parentid' => 'parentid',
        'sourceIdentifier' => 'sourceIdentifier',
        'createDeptGroup' => 'createDeptGroup',
        'autoAddUser' => 'autoAddUser',
        'groupContainSubDept' => 'groupContainSubDept',
        'orgDeptOwner' => 'orgDeptOwner',
        'deptManagerUseridList' => 'deptManagerUseridList',
        'outerPermitUsers' => 'outerPermitUsers',
        'outerPermitDepts' => 'outerPermitDepts',
        'outerDept' => 'outerDept',
        'userPerimits' => 'userPerimits',
        'deptPerimits' => 'deptPerimits',
        'deptHiding' => 'deptHiding',
        'deptPermits' => 'deptPermits',
        'userPermits' => 'userPermits',
        'isFromUnionOrg' => 'isFromUnionOrg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
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
        if (null !== $this->groupContainSubDept) {
            $res['groupContainSubDept'] = $this->groupContainSubDept;
        }
        if (null !== $this->orgDeptOwner) {
            $res['orgDeptOwner'] = $this->orgDeptOwner;
        }
        if (null !== $this->deptManagerUseridList) {
            $res['deptManagerUseridList'] = $this->deptManagerUseridList;
        }
        if (null !== $this->outerPermitUsers) {
            $res['outerPermitUsers'] = $this->outerPermitUsers;
        }
        if (null !== $this->outerPermitDepts) {
            $res['outerPermitDepts'] = $this->outerPermitDepts;
        }
        if (null !== $this->outerDept) {
            $res['outerDept'] = $this->outerDept;
        }
        if (null !== $this->userPerimits) {
            $res['userPerimits'] = $this->userPerimits;
        }
        if (null !== $this->deptPerimits) {
            $res['deptPerimits'] = $this->deptPerimits;
        }
        if (null !== $this->deptHiding) {
            $res['deptHiding'] = $this->deptHiding;
        }
        if (null !== $this->deptPermits) {
            $res['deptPermits'] = $this->deptPermits;
        }
        if (null !== $this->userPermits) {
            $res['userPermits'] = $this->userPermits;
        }
        if (null !== $this->isFromUnionOrg) {
            $res['isFromUnionOrg'] = $this->isFromUnionOrg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiDepartmentResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['order'])){
            $model->order = $map['order'];
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
        if(isset($map['groupContainSubDept'])){
            $model->groupContainSubDept = $map['groupContainSubDept'];
        }
        if(isset($map['orgDeptOwner'])){
            $model->orgDeptOwner = $map['orgDeptOwner'];
        }
        if(isset($map['deptManagerUseridList'])){
            $model->deptManagerUseridList = $map['deptManagerUseridList'];
        }
        if(isset($map['outerPermitUsers'])){
            $model->outerPermitUsers = $map['outerPermitUsers'];
        }
        if(isset($map['outerPermitDepts'])){
            $model->outerPermitDepts = $map['outerPermitDepts'];
        }
        if(isset($map['outerDept'])){
            $model->outerDept = $map['outerDept'];
        }
        if(isset($map['userPerimits'])){
            $model->userPerimits = $map['userPerimits'];
        }
        if(isset($map['deptPerimits'])){
            $model->deptPerimits = $map['deptPerimits'];
        }
        if(isset($map['deptHiding'])){
            $model->deptHiding = $map['deptHiding'];
        }
        if(isset($map['deptPermits'])){
            $model->deptPermits = $map['deptPermits'];
        }
        if(isset($map['userPermits'])){
            $model->userPermits = $map['userPermits'];
        }
        if(isset($map['isFromUnionOrg'])){
            $model->isFromUnionOrg = $map['isFromUnionOrg'];
        }
        return $model;
    }
    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description 部门id
     * @var int
     */
    public $id;

    /**
     * @description 部门名称
     * @var string
     */
    public $name;

    /**
     * @description 在父部门中的次序值
     * @var int
     */
    public $order;

    /**
     * @description 父部门id，根部门为1
     * @var int
     */
    public $parentid;

    /**
     * @description 部门标识字段，开发者可用该字段来唯一标识一个部门，并与钉钉外部通讯录里的部门做映射
     * @var string
     */
    public $sourceIdentifier;

    /**
     * @description 是否同步创建一个关联此部门的企业群, true表示是, false表示不是
     * @var bool
     */
    public $createDeptGroup;

    /**
     * @description 当群已经创建后，是否有新人加入部门会自动加入该群, true表示是, false表示不是
     * @var bool
     */
    public $autoAddUser;

    /**
     * @description 部门群是否包含子部门
     * @var bool
     */
    public $groupContainSubDept;

    /**
     * @description 企业群群主
     * @var string
     */
    public $orgDeptOwner;

    /**
     * @description 部门的主管列表,取值为由主管的userid组成的字符串，不同的userid使用|符号进行分割
     * @var string
     */
    public $deptManagerUseridList;

    /**
     * @description 本部门的员工仅可见员工自己为true时，可以配置额外可见人员，值为userid组成的的字符串，使用| 符号进行分割
     * @var string
     */
    public $outerPermitUsers;

    /**
     * @description 本部门的员工仅可见员工自己为true时，可以配置额外可见部门，值为部门id组成的的字符串，使用|符号进行分割
     * @var string
     */
    public $outerPermitDepts;

    /**
     * @description 是否本部门的员工仅可见员工自己, 为true时，本部门员工默认只能看到员工自己
     * @var bool
     */
    public $outerDept;

    /**
     * @description 可以查看指定隐藏部门的其他人员列表，如果部门隐藏，则此值生效，取值为其他的人员userid组成的的字符串，使用|符号进行分割
     * @var string
     */
    public $userPerimits;

    /**
     * @description 可以查看指定隐藏部门的其他部门列表，如果部门隐藏，则此值生效，取值为其他的部门id组成的的字符串，使用|符号进行分割
     * @var string
     */
    public $deptPerimits;

    /**
     * @description 是否隐藏部门, true表示隐藏, false表示显示
     * @var bool
     */
    public $deptHiding;

    /**
     * @description 可以查看指定隐藏部门的其他人员列表，如果部门隐藏，则此值生效，取值为其他的人员userid组成的的字符串，使用|符号进行分割
     * @var string
     */
    public $deptPermits;

    /**
     * @description 可以查看指定隐藏部门的其他部门列表，如果部门隐藏，则此值生效，取值为其他的部门id组成的的字符串，使用|符号进行分割
     * @var string
     */
    public $userPermits;

    /**
     * @description 部门是否来自关联组织
     * @var bool
     */
    public $isFromUnionOrg;

}
