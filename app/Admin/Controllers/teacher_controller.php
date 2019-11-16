<?php

namespace App\Admin\Controllers;

use App\teachers;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class teacher_controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\teachers';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new teachers);

        $grid->column('id', __('编号'));
        $grid->column('teacher_name', __(' 教师名字'));
        $grid->column('teacher_address', __('居住地址'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

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
        $show = new Show(teachers::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('teacher_name', __('Teacher name'));
        $show->field('teacher_address', __('Teacher address'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new teachers);

        $form->text('teacher_name', __('教师名字'));
        $form->text('teacher_address', __('Teacher address'));

        return $form;
    }
}
