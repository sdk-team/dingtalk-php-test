<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetCorpHrmEmployeeResponseBody\result\groupList;

use AlibabaCloud\Tea\Model;

class fieldList extends Model {
    protected $_name = [
        'hiddenFromEmployeeFlag' => 'hidden_from_employee_flag',
        'contactClientFlag' => 'contact_client_flag',
        'contactSystemFlag' => 'contact_system_flag',
        'contactFlag' => 'contact_flag',
        'systemFlag' => 'system_flag',
        'value' => 'value',
        'hint' => 'hint',
        'optionText' => 'option_text',
        'typeName' => 'type_name',
        'fieldType' => 'field_type',
        'required' => 'required',
        'editableByHr' => 'editable_by_hr',
        'deleted' => 'deleted',
        'editableByEmp' => 'editable_by_emp',
        'visibleByEmp' => 'visible_by_emp',
        'groupId' => 'group_id',
        'fieldName' => 'field_name',
        'fieldCode' => 'field_code',
        'corpId' => 'corp_id',
        'empProfileRequired' => 'emp_profile_required',
        'key' => 'key',
        'contactSource' => 'contact_source',
        'noWatermark' => 'no_watermark',
        'confirmEntryRequired' => 'confirm_entry_required',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hiddenFromEmployeeFlag) {
            $res['hidden_from_employee_flag'] = $this->hiddenFromEmployeeFlag;
        }
        if (null !== $this->contactClientFlag) {
            $res['contact_client_flag'] = $this->contactClientFlag;
        }
        if (null !== $this->contactSystemFlag) {
            $res['contact_system_flag'] = $this->contactSystemFlag;
        }
        if (null !== $this->contactFlag) {
            $res['contact_flag'] = $this->contactFlag;
        }
        if (null !== $this->systemFlag) {
            $res['system_flag'] = $this->systemFlag;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->hint) {
            $res['hint'] = $this->hint;
        }
        if (null !== $this->optionText) {
            $res['option_text'] = $this->optionText;
        }
        if (null !== $this->typeName) {
            $res['type_name'] = $this->typeName;
        }
        if (null !== $this->fieldType) {
            $res['field_type'] = $this->fieldType;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }
        if (null !== $this->editableByHr) {
            $res['editable_by_hr'] = $this->editableByHr;
        }
        if (null !== $this->deleted) {
            $res['deleted'] = $this->deleted;
        }
        if (null !== $this->editableByEmp) {
            $res['editable_by_emp'] = $this->editableByEmp;
        }
        if (null !== $this->visibleByEmp) {
            $res['visible_by_emp'] = $this->visibleByEmp;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->fieldName) {
            $res['field_name'] = $this->fieldName;
        }
        if (null !== $this->fieldCode) {
            $res['field_code'] = $this->fieldCode;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->empProfileRequired) {
            $res['emp_profile_required'] = $this->empProfileRequired;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->contactSource) {
            $res['contact_source'] = $this->contactSource;
        }
        if (null !== $this->noWatermark) {
            $res['no_watermark'] = $this->noWatermark;
        }
        if (null !== $this->confirmEntryRequired) {
            $res['confirm_entry_required'] = $this->confirmEntryRequired;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return fieldList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['hidden_from_employee_flag'])){
            $model->hiddenFromEmployeeFlag = $map['hidden_from_employee_flag'];
        }
        if(isset($map['contact_client_flag'])){
            $model->contactClientFlag = $map['contact_client_flag'];
        }
        if(isset($map['contact_system_flag'])){
            $model->contactSystemFlag = $map['contact_system_flag'];
        }
        if(isset($map['contact_flag'])){
            $model->contactFlag = $map['contact_flag'];
        }
        if(isset($map['system_flag'])){
            $model->systemFlag = $map['system_flag'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['hint'])){
            $model->hint = $map['hint'];
        }
        if(isset($map['option_text'])){
            $model->optionText = $map['option_text'];
        }
        if(isset($map['type_name'])){
            $model->typeName = $map['type_name'];
        }
        if(isset($map['field_type'])){
            $model->fieldType = $map['field_type'];
        }
        if(isset($map['required'])){
            $model->required = $map['required'];
        }
        if(isset($map['editable_by_hr'])){
            $model->editableByHr = $map['editable_by_hr'];
        }
        if(isset($map['deleted'])){
            $model->deleted = $map['deleted'];
        }
        if(isset($map['editable_by_emp'])){
            $model->editableByEmp = $map['editable_by_emp'];
        }
        if(isset($map['visible_by_emp'])){
            $model->visibleByEmp = $map['visible_by_emp'];
        }
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['field_name'])){
            $model->fieldName = $map['field_name'];
        }
        if(isset($map['field_code'])){
            $model->fieldCode = $map['field_code'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['emp_profile_required'])){
            $model->empProfileRequired = $map['emp_profile_required'];
        }
        if(isset($map['key'])){
            $model->key = $map['key'];
        }
        if(isset($map['contact_source'])){
            $model->contactSource = $map['contact_source'];
        }
        if(isset($map['no_watermark'])){
            $model->noWatermark = $map['no_watermark'];
        }
        if(isset($map['confirm_entry_required'])){
            $model->confirmEntryRequired = $map['confirm_entry_required'];
        }
        return $model;
    }
    /**
     * @description 对员工不可见
     * @var bool
     */
    public $hiddenFromEmployeeFlag;

    /**
     * @description 是否通讯录client字段
     * @var bool
     */
    public $contactClientFlag;

    /**
     * @description 是否通讯录系统字段
     * @var bool
     */
    public $contactSystemFlag;

    /**
     * @description 是否通讯录字段
     * @var bool
     */
    public $contactFlag;

    /**
     * @description 是否系统字段
     * @var bool
     */
    public $systemFlag;

    /**
     * @description 字段的值
     * @var string
     */
    public $value;

    /**
     * @description 提醒
     * @var string
     */
    public $hint;

    /**
     * @description 选项值
     * @var string
     */
    public $optionText;

    /**
     * @description 类型名
     * @var string
     */
    public $typeName;

    /**
     * @description 字段类型
     * @var string
     */
    public $fieldType;

    /**
     * @description required
     * @var bool
     */
    public $required;

    /**
     * @description editableByHr
     * @var bool
     */
    public $editableByHr;

    /**
     * @description 是否已删除
     * @var bool
     */
    public $deleted;

    /**
     * @description editableByEmp
     * @var bool
     */
    public $editableByEmp;

    /**
     * @description visibleByEmp
     * @var bool
     */
    public $visibleByEmp;

    /**
     * @description groupId
     * @var string
     */
    public $groupId;

    /**
     * @description 字段名称
     * @var string
     */
    public $fieldName;

    /**
     * @description 字段code
     * @var string
     */
    public $fieldCode;

    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description 在个人信息展示
     * @var bool
     */
    public $empProfileRequired;

    /**
     * @description 字段key
     * @var string
     */
    public $key;

    /**
     * @description 通讯录来源
     * @var int
     */
    public $contactSource;

    /**
     * @description 是否需要水印
     * @var bool
     */
    public $noWatermark;

    /**
     * @description 确认入职是否必填
     * @var bool
     */
    public $confirmEntryRequired;

}
