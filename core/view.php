<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 10.11.2017
 * Time: 8:58
 */
class View
{
    function generate($content_view, $template_view, $data = null)
    {

		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}


        include 'views/'.$template_view;
    }
}