<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAtsJobResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAtsJobResponseBody\result\address;

class result extends Model {
    protected $_name = [
        'headCount' => 'head_count',
        'address' => 'address',
        'district' => 'district',
        'city' => 'city',
        'province' => 'province',
        'maxSalary' => 'max_salary',
        'minSalary' => 'min_salary',
        'salaryNegotiable' => 'salary_negotiable',
        'description' => 'description',
        'requiredEdu' => 'required_edu',
        'jobCode' => 'job_code',
        'jobId' => 'job_id',
        'corpid' => 'corpid',
        'name' => 'name',
        'salaryPeriod' => 'salary_period',
        'salaryMonth' => 'salary_month',
        'category' => 'category',
        'campus' => 'campus',
        'jobNature' => 'job_nature',
        'maxJobExperience' => 'max_job_experience',
        'minJobExperience' => 'min_job_experience',
        'mainDeptId' => 'main_dept_id',
        'tags' => 'tags',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->headCount) {
            $res['head_count'] = $this->headCount;
        }
        if (null !== $this->address) {
            $res['address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->district) {
            $res['district'] = $this->district;
        }
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->province) {
            $res['province'] = $this->province;
        }
        if (null !== $this->maxSalary) {
            $res['max_salary'] = $this->maxSalary;
        }
        if (null !== $this->minSalary) {
            $res['min_salary'] = $this->minSalary;
        }
        if (null !== $this->salaryNegotiable) {
            $res['salary_negotiable'] = $this->salaryNegotiable;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->requiredEdu) {
            $res['required_edu'] = $this->requiredEdu;
        }
        if (null !== $this->jobCode) {
            $res['job_code'] = $this->jobCode;
        }
        if (null !== $this->jobId) {
            $res['job_id'] = $this->jobId;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->salaryPeriod) {
            $res['salary_period'] = $this->salaryPeriod;
        }
        if (null !== $this->salaryMonth) {
            $res['salary_month'] = $this->salaryMonth;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->campus) {
            $res['campus'] = $this->campus;
        }
        if (null !== $this->jobNature) {
            $res['job_nature'] = $this->jobNature;
        }
        if (null !== $this->maxJobExperience) {
            $res['max_job_experience'] = $this->maxJobExperience;
        }
        if (null !== $this->minJobExperience) {
            $res['min_job_experience'] = $this->minJobExperience;
        }
        if (null !== $this->mainDeptId) {
            $res['main_dept_id'] = $this->mainDeptId;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['head_count'])){
            $model->headCount = $map['head_count'];
        }
        if(isset($map['address'])){
            $model->address = address::fromMap($map['address']);
        }
        if(isset($map['district'])){
            $model->district = $map['district'];
        }
        if(isset($map['city'])){
            $model->city = $map['city'];
        }
        if(isset($map['province'])){
            $model->province = $map['province'];
        }
        if(isset($map['max_salary'])){
            $model->maxSalary = $map['max_salary'];
        }
        if(isset($map['min_salary'])){
            $model->minSalary = $map['min_salary'];
        }
        if(isset($map['salary_negotiable'])){
            $model->salaryNegotiable = $map['salary_negotiable'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['required_edu'])){
            $model->requiredEdu = $map['required_edu'];
        }
        if(isset($map['job_code'])){
            $model->jobCode = $map['job_code'];
        }
        if(isset($map['job_id'])){
            $model->jobId = $map['job_id'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['salary_period'])){
            $model->salaryPeriod = $map['salary_period'];
        }
        if(isset($map['salary_month'])){
            $model->salaryMonth = $map['salary_month'];
        }
        if(isset($map['category'])){
            $model->category = $map['category'];
        }
        if(isset($map['campus'])){
            $model->campus = $map['campus'];
        }
        if(isset($map['job_nature'])){
            $model->jobNature = $map['job_nature'];
        }
        if(isset($map['max_job_experience'])){
            $model->maxJobExperience = $map['max_job_experience'];
        }
        if(isset($map['min_job_experience'])){
            $model->minJobExperience = $map['min_job_experience'];
        }
        if(isset($map['main_dept_id'])){
            $model->mainDeptId = $map['main_dept_id'];
        }
        if(isset($map['tags'])){
            if(!empty($map['tags'])){
                $model->tags = $map['tags'];
            }
        }
        return $model;
    }
    /**
     * @description 招募人数
     * @var int
     */
    public $headCount;

    /**
     * @description 职位地址详情
     * @var address
     */
    public $address;

    /**
     * @description 职位地址 区/县
     * @var string
     */
    public $district;

    /**
     * @description 职位地址 市
     * @var string
     */
    public $city;

    /**
     * @description 职位地址 升
     * @var string
     */
    public $province;

    /**
     * @description 最高薪水，单位元
     * @var int
     */
    public $maxSalary;

    /**
     * @description 最低薪水，单位元
     * @var int
     */
    public $minSalary;

    /**
     * @description 是否薪资面议
     * @var bool
     */
    public $salaryNegotiable;

    /**
     * @description 职位描述
     * @var string
     */
    public $description;

    /**
     * @description 1小学 2初中 3高中 4中专 5大专 6本科 7硕士 8 博士 9其他
     * @var int
     */
    public $requiredEdu;

    /**
     * @description 职位编码
     * @var string
     */
    public $jobCode;

    /**
     * @description 职位唯一标识
     * @var string
     */
    public $jobId;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 职位名称
     * @var string
     */
    public $name;

    /**
     * @description 薪资类型，HOUR:小时，DAY:天，WEEK:周，MONTH:月，BY_TIME:次
     * @var string
     */
    public $salaryPeriod;

    /**
     * @description 薪资月数
     * @var int
     */
    public $salaryMonth;

    /**
     * @description 职位分类
     * @var string
     */
    public $category;

    /**
     * @description true :校招，false：社招
     * @var bool
     */
    public $campus;

    /**
     * @description 职位类型：FULL-TIME:全职，PART-TIME:兼职，INTERNSHIP:实习，OTHER:其他
     * @var string
     */
    public $jobNature;

    /**
     * @description 最高工作年限
     * @var int
     */
    public $maxJobExperience;

    /**
     * @description 最低工作年限
     * @var int
     */
    public $minJobExperience;

    /**
     * @description 职位部门id
     * @var int
     */
    public $mainDeptId;

    /**
     * @description 职位标签
     * @var array
     */
    public $tags;

}
