<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiAtsJobParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiAtsJobParams\jobs\extData;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiAtsJobParams\jobs\address;

class jobs extends Model {
    protected $_name = [
        'extData' => 'ext_data',
        'creatorUserId' => 'creator_user_id',
        'address' => 'address',
        'maxSalary' => 'max_salary',
        'minSalary' => 'min_salary',
        'requiredEdu' => 'required_edu',
        'campus' => 'campus',
        'description' => 'description',
        'name' => 'name',
    ];
    public function validate() {
        Model::validateRequired('extData', $this->extData, true);
        Model::validateRequired('creatorUserId', $this->creatorUserId, true);
        Model::validateRequired('maxSalary', $this->maxSalary, true);
        Model::validateRequired('minSalary', $this->minSalary, true);
        Model::validateRequired('requiredEdu', $this->requiredEdu, true);
        Model::validateRequired('campus', $this->campus, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('name', $this->name, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->extData) {
            $res['ext_data'] = null !== $this->extData ? $this->extData->toMap() : null;
        }
        if (null !== $this->creatorUserId) {
            $res['creator_user_id'] = $this->creatorUserId;
        }
        if (null !== $this->address) {
            $res['address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->maxSalary) {
            $res['max_salary'] = $this->maxSalary;
        }
        if (null !== $this->minSalary) {
            $res['min_salary'] = $this->minSalary;
        }
        if (null !== $this->requiredEdu) {
            $res['required_edu'] = $this->requiredEdu;
        }
        if (null !== $this->campus) {
            $res['campus'] = $this->campus;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return jobs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ext_data'])){
            $model->extData = extData::fromMap($map['ext_data']);
        }
        if(isset($map['creator_user_id'])){
            $model->creatorUserId = $map['creator_user_id'];
        }
        if(isset($map['address'])){
            $model->address = address::fromMap($map['address']);
        }
        if(isset($map['max_salary'])){
            $model->maxSalary = $map['max_salary'];
        }
        if(isset($map['min_salary'])){
            $model->minSalary = $map['min_salary'];
        }
        if(isset($map['required_edu'])){
            $model->requiredEdu = $map['required_edu'];
        }
        if(isset($map['campus'])){
            $model->campus = $map['campus'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 扩展数据
     * @var extData
     */
    public $extData;

    /**
     * @description 操作人员工标识
     * @var string
     */
    public $creatorUserId;

    /**
     * @description 工作地点
     * @var address
     */
    public $address;

    /**
     * @description 最低月薪，单位：元
     * @var int
     */
    public $maxSalary;

    /**
     * @description 最高月薪，单位：元
     * @var int
     */
    public $minSalary;

    /**
     * @description 学历要求，1小学 2初中 3高中  4中专 5大专 6本科  7硕士 8 博士 9其他
     * @var int
     */
    public $requiredEdu;

    /**
     * @description 是否校招
     * @var bool
     */
    public $campus;

    /**
     * @description 职位描述
     * @var string
     */
    public $description;

    /**
     * @description 职位名称
     * @var string
     */
    public $name;

}
