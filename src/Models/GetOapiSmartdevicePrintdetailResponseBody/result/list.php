<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiSmartdevicePrintdetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'deptLevel1Name' => 'dept_level1_name',
        'pageDoubleType' => 'page_double_type',
        'deptLevel3Name' => 'dept_level3_name',
        'printDate' => 'print_date',
        'origin' => 'origin',
        'pageSizeType' => 'page_size_type',
        'pageColorType' => 'page_color_type',
        'deptExtInfo' => 'dept_ext_info',
        'userName' => 'user_name',
        'deptFullName' => 'dept_full_name',
        'printerNick' => 'printer_nick',
        'deptLevel2Name' => 'dept_level2_name',
        'pages' => 'pages',
    ];
    public function validate() {
        Model::validatePattern('printDate', $this->printDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deptLevel1Name) {
            $res['dept_level1_name'] = $this->deptLevel1Name;
        }
        if (null !== $this->pageDoubleType) {
            $res['page_double_type'] = $this->pageDoubleType;
        }
        if (null !== $this->deptLevel3Name) {
            $res['dept_level3_name'] = $this->deptLevel3Name;
        }
        if (null !== $this->printDate) {
            $res['print_date'] = $this->printDate;
        }
        if (null !== $this->origin) {
            $res['origin'] = $this->origin;
        }
        if (null !== $this->pageSizeType) {
            $res['page_size_type'] = $this->pageSizeType;
        }
        if (null !== $this->pageColorType) {
            $res['page_color_type'] = $this->pageColorType;
        }
        if (null !== $this->deptExtInfo) {
            $res['dept_ext_info'] = $this->deptExtInfo;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->deptFullName) {
            $res['dept_full_name'] = $this->deptFullName;
        }
        if (null !== $this->printerNick) {
            $res['printer_nick'] = $this->printerNick;
        }
        if (null !== $this->deptLevel2Name) {
            $res['dept_level2_name'] = $this->deptLevel2Name;
        }
        if (null !== $this->pages) {
            $res['pages'] = $this->pages;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dept_level1_name'])){
            $model->deptLevel1Name = $map['dept_level1_name'];
        }
        if(isset($map['page_double_type'])){
            $model->pageDoubleType = $map['page_double_type'];
        }
        if(isset($map['dept_level3_name'])){
            $model->deptLevel3Name = $map['dept_level3_name'];
        }
        if(isset($map['print_date'])){
            $model->printDate = $map['print_date'];
        }
        if(isset($map['origin'])){
            $model->origin = $map['origin'];
        }
        if(isset($map['page_size_type'])){
            $model->pageSizeType = $map['page_size_type'];
        }
        if(isset($map['page_color_type'])){
            $model->pageColorType = $map['page_color_type'];
        }
        if(isset($map['dept_ext_info'])){
            $model->deptExtInfo = $map['dept_ext_info'];
        }
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        if(isset($map['dept_full_name'])){
            $model->deptFullName = $map['dept_full_name'];
        }
        if(isset($map['printer_nick'])){
            $model->printerNick = $map['printer_nick'];
        }
        if(isset($map['dept_level2_name'])){
            $model->deptLevel2Name = $map['dept_level2_name'];
        }
        if(isset($map['pages'])){
            $model->pages = $map['pages'];
        }
        return $model;
    }
    /**
     * @description 一级部门名
     * @var string
     */
    public $deptLevel1Name;

    /**
     * @description 单双面类型，0是单面，1是双面
     * @var int
     */
    public $pageDoubleType;

    /**
     * @description 三级部门名
     * @var string
     */
    public $deptLevel3Name;

    /**
     * @description 打印时间戳，单位是毫秒
     * @var string
     */
    public $printDate;

    /**
     * @description 打印来源编号，0-5： 0-其他  1-pc驱动  2-二维码   3-审批   4-钉盘  5-IM
     * @var string
     */
    public $origin;

    /**
     * @description 纸张大小类型 A3
     * @var string
     */
    public $pageSizeType;

    /**
     * @description 彩色或黑白打印类型.0黑白，1彩色
     * @var int
     */
    public $pageColorType;

    /**
     * @description 部门扩展信息
     * @var string
     */
    public $deptExtInfo;

    /**
     * @description 用户名
     * @var string
     */
    public $userName;

    /**
     * @description 部门全称
     * @var string
     */
    public $deptFullName;

    /**
     * @description 打印机名称
     * @var string
     */
    public $printerNick;

    /**
     * @description 二级部门名
     * @var string
     */
    public $deptLevel2Name;

    /**
     * @description 打印总页数
     * @var int
     */
    public $pages;

}
