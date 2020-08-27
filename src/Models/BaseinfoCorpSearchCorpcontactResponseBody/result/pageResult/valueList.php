<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BaseinfoCorpSearchCorpcontactResponseBody\result\pageResult;

use AlibabaCloud\Tea\Model;

class valueList extends Model {
    protected $_name = [
        'name' => 'name',
        'title' => 'title',
        'aliTmpDept' => 'ali_tmp_dept',
        'flowerName' => 'flower_name',
        'jobNumber' => 'job_number',
        'userid' => 'userid',
        'workStation' => 'work_station',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->aliTmpDept) {
            $res['ali_tmp_dept'] = $this->aliTmpDept;
        }
        if (null !== $this->flowerName) {
            $res['flower_name'] = $this->flowerName;
        }
        if (null !== $this->jobNumber) {
            $res['job_number'] = $this->jobNumber;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->workStation) {
            $res['work_station'] = $this->workStation;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return valueList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['ali_tmp_dept'])){
            $model->aliTmpDept = $map['ali_tmp_dept'];
        }
        if(isset($map['flower_name'])){
            $model->flowerName = $map['flower_name'];
        }
        if(isset($map['job_number'])){
            $model->jobNumber = $map['job_number'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['work_station'])){
            $model->workStation = $map['work_station'];
        }
        return $model;
    }
    /**
     * @description 姓名
     * @var string
     */
    public $name;

    /**
     * @description 职位
     * @var string
     */
    public $title;

    /**
     * @description aliTmpDept
     * @var string
     */
    public $aliTmpDept;

    /**
     * @description flowerName
     * @var string
     */
    public $flowerName;

    /**
     * @description jobNumber
     * @var string
     */
    public $jobNumber;

    /**
     * @description userid
     * @var string
     */
    public $userid;

    /**
     * @description workStation
     * @var string
     */
    public $workStation;

}
