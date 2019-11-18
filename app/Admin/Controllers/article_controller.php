<?php

namespace App\Admin\Controllers;

use App\article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class article_controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new article);

        $grid->column('id', __('Id'));
//        $grid->column('article_title', __('Article title'));
        $grid->column('article_description', __('Article description'));
//        $grid->column('article_keyword', __('Article keyword'));
//        $grid->column('article_click_time', __('Article click time'));
//        $grid->column('article_thumbnail_url', __('Article thumbnail url'));
//        $grid->column('article_content', __('Article content'));
        $grid->column('article_auth', __('Article auth'));
//        $grid->column('article_navigation_id', __('Article navigation id'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('article_title', __('Article title'));
        $show->field('article_description', __('Article description'));
        $show->field('article_keyword', __('Article keyword'));
        $show->field('article_click_time', __('Article click time'));
        $show->field('article_thumbnail_url', __('Article thumbnail url'));
        $show->field('article_content', __('Article content'))->unescape();
        $show->field('article_auth', __('Article auth'));
        $show->field('article_navigation_id', __('Article navigation id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new article);

        $form->text('article_title', __('Article title'));
//        $form->number('article_navigation_id', __('Article navigation id'));

        $navigation_list=\DB::table("navigation")->pluck("navigation_name","id");
        $form->select("article_navigation_id","导航")->options($navigation_list);

        $form->text('article_description', __('Article description'));
        $form->text('article_keyword', __('Article keyword'));
        $form->number('article_click_time', __('Article click time'));
//        $form->text('article_thumbnail_url', __('Article thumbnail url'));
        $form->file("article_thumbnail_url","缩略图");
//        $form->textarea('article_content', __('Article content'));
        $form->ueditor('article_content');
        $form->text('article_auth', __('Article auth'));

        return $form;
    }
}
