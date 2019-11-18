<?php

namespace App\Admin\Controllers;

use App\navigation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class navigation_controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\navigation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new navigation);

        $grid->column('id', __('Id'));
        $grid->column('parent_id', __('Parent id'));
        $grid->column('navigation_name', __('Navigation name'));
        $grid->column('navigation_url', __('Navigation url'));

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
        $show = new Show(navigation::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent_id', __('Parent id'));
        $show->field('navigation_name', __('Navigation name'));
        $show->field('navigation_url', __('Navigation url'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new navigation);

        $navigation_list =  \DB::table("navigation")->pluck("navigation_name","id");
        $form->select('parent_id', '上级目录')->options($navigation_list);
        $form->text('navigation_name', __('Navigation name'));
        $form->textarea('navigation_url', __('Navigation url'));
        return $form;
    }
}
