<?php
/**
 * Created by PhpStorm.
 * User: moTzxx
 * Date: 2019/1/10
 * Time: 18:20
 */

namespace app\uniApi\Controller;


use app\common\model\Articles;
use think\Request;

class Index
{
    protected $articleModel;

    public function __construct()
    {
        $this->articleModel = new Articles();
        header("Access-Control-Allow-Origin: *");
    }

    /**
     * 获取文章列表
     */
    public function getArticleList(){

        $articleList = $this->articleModel->getArticleList();
        return showMsg(1,'articleList',$articleList);
    }
    public function getArticleInfo(Request $request){
        $article_id = $request->get('id');
        $articleInfo = $this->articleModel->getInfoByID(intval($article_id));
        return showMsg(1,'getArticleInfo',$articleInfo);
    }
}