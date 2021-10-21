<?php
use App\Models\Category;

if(!function_exists('sidebar_job_category')){
    function sidebar_job_category()
    {
        $sidebar_job_category = Category::all();

        return $sidebar_job_category;
    }
}