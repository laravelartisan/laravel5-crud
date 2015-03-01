<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/12/2015
 * Time: 2:34 PM
 */
function delete_form($routeParams,$label='Delete'){

    $form = Form::open(['method'=>'DELETE', 'route'=>$routeParams]);
    $form .= Form::submit($label,['class'=>'btn btn-danger']);
    return $form .= Form::close();

}