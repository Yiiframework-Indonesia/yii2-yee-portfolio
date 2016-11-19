<?php
/**
 * @link http://www.yiiframework.id/
 * @copyright Copyright (c) 2016 Yii Framework Indonesia
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */
namespace yiid\portfolio;

use Yii;

/**
 * Portfolio Module For Yee CMS
 *
 * @author Yuda Sukmana <yudasukmana1992@gmail.com>
 */
 
class PortfolioModule extends \yii\base\Module
{
    /**
     * Version number of the module.
     */
    const VERSION = '0.1.0';
    public $controllerNamespace = 'yeesoft\post\controllers';
    public $viewList;
    public $layoutList;
    
    /**
     * Post model class
     *
     * @var string
     */
    public $postModelClass = 'yeesoft\post\models\Post';
    
    /**
     * Post search model class
     *
     * @var string
     */
    public $postModelSearchClass = 'yeesoft\post\models\search\PostSearch';
    
    /**
     * Index page view
     *
     * @var string
     */
    public $indexView = 'index';
    
    /**
     * View page view
     *
     * @var string
     */
    public $viewView = 'view';
    
    /**
     * Create page view
     *
     * @var string
     */
    public $createView = 'create';
    
    /**
     * Update page view
     *
     * @var string
     */
    public $updateView = 'update';
    /**
     * Size of thumbnail image of the post.
     *
     * Expected values: 'original' or sizes from yeesoft\media\MediaModule::$thumbs,
     * by default there are: 'small', 'medium', 'large'
     *
     * @var string
     */
    public $thumbnailSize =  'medium';
    /**
     * Default views and layouts
     * Add more views and layouts in your main config file by calling the module
     *
     *   Example:
     *
     *   'post' => [
     *       'class' => 'yeesoft\post\PostModule',
     *       'viewList' => [
     *           'post' => 'View Label 1',
     *           'post_test' => 'View Label 2',
     *       ],
     *       'layoutList' => [
     *           'main' => 'Layout Label 1',
     *           'dark_layout' => 'Layout Label 2',
     *       ],
     *   ],
     */
    public function init()
    {
        if(in_array($this->thumbnailSize, [])){
            $this->thumbnailSize = 'medium';
        }
        if (empty($this->viewList)) {
            $this->viewList = [
                'post' => Yii::t('yee', 'Post view')
            ];
        }
        if (empty($this->layoutList)) {
            $this->layoutList = [
                'main' => Yii::t('yee', 'Main layout')
            ];
        }
        parent::init();
    }
}