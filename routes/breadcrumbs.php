<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('/', function (BreadcrumbTrail $trail) {
    $trail->push('Blogs', route('blog'));
});

Breadcrumbs::for('single', function (BreadcrumbTrail $trail, $single_page) {
    $trail->parent('/');
    $trail->push($single_page, route('single', $single_page));
});


Breadcrumbs::for('blog', function (BreadcrumbTrail $trail, $blog) {
    $trail->parent('/');
    $trail->push($blog, route('single', $blog));
});

Breadcrumbs::for('/category', function (BreadcrumbTrail $trail) {
    $trail->push('category', route('category.index'));
});

Breadcrumbs::for('categorys', function (BreadcrumbTrail $trail, $categoryid) {
    $trail->parent('/category');
    $trail->push($categoryid, route('single', $categoryid));
});

