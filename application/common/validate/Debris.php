<?php
/**
 * +----------------------------------------------------------------------
 * | 碎片管理验证器
 * +----------------------------------------------------------------------
 *                      .::::.
 *                    .::::::::.            | AUTHOR: siyu
 *                    :::::::::::           | EMAIL: 407593529@qq.com
 *                 ..:::::::::::'           | QQ: 407593529
 *             '::::::::::::'               | WECHAT: zhaoyingjie4125
 *                .::::::::::               | DATETIME: 2019/03/06
 *           '::::::::::::::..
 *                ..::::::::::::.
 *              ``::::::::::::::::
 *               ::::``:::::::::'        .:::.
 *              ::::'   ':::::'       .::::::::.
 *            .::::'      ::::     .:::::::'::::.
 *           .:::'       :::::  .:::::::::' ':::::.
 *          .::'        :::::.:::::::::'      ':::::.
 *         .::'         ::::::::::::::'         ``::::.
 *     ...:::           ::::::::::::'              ``::.
 *   ```` ':.          ':::::::::'                  ::::..
 *                      '.:::::'                    ':'````..
 * +----------------------------------------------------------------------
 */
namespace app\common\validate;

use think\Validate;

class Debris extends Validate
{
    protected $rule = [
        'title|碎片标题' => [
            'require' => 'require',
            'max'     => '255',
        ],
        'name|调用名称' => [
            'require' => 'require',
            'max'     => '255',
            'unique'  => 'debris',
        ],
        'sort|排序' => [
            'require' => 'require',
            'number'  => 'number',
        ],
    ];
}