<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetCorpUserPersonainfoResponseBody\result;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'dob' => 'dob',
        'gender' => 'gender',
        'workStation' => 'work_station',
        'industry' => 'industry',
        'title' => 'title',
        'umids' => 'umids',
    ];
    public function validate() {
        Model::validatePattern('dob', $this->dob, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->dob) {
            $res['dob'] = $this->dob;
        }
        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }
        if (null !== $this->workStation) {
            $res['work_station'] = $this->workStation;
        }
        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->umids) {
            $res['umids'] = $this->umids;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dob'])){
            $model->dob = $map['dob'];
        }
        if(isset($map['gender'])){
            $model->gender = $map['gender'];
        }
        if(isset($map['work_station'])){
            $model->workStation = $map['work_station'];
        }
        if(isset($map['industry'])){
            $model->industry = $map['industry'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['umids'])){
            if(!empty($map['umids'])){
                $model->umids = $map['umids'];
            }
        }
        return $model;
    }
    /**
     * @description 生日
     * @var string
     */
    public $dob;

    /**
     * @description 性别
     * @var string
     */
    public $gender;

    /**
     * @description 工作区域
     * @var string
     */
    public $workStation;

    /**
     * @description 行业
     * @var string
     */
    public $industry;

    /**
     * @description 头衔
     * @var string
     */
    public $title;

    /**
     * @description umids
     * @var array
     */
    public $umids;

}
