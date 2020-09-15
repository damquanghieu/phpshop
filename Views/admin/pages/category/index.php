<?php
// echo "<pre>";
// print_r($categories);

view("admin/layouts/header");
if (isset($_GET['action'])) {
    if ($_GET['action'] == "index") {
        view('admin/pages/category/view', ['categories' => $categories]);
    }
    if ($_GET['action'] == "create") {
        view('admin/pages/category/create');
    }
    if ($_GET['action'] == "edit") {
        view('admin/pages/category/edit', ['category' => $category]);
    }
} else {
    view('admin/pages/category/view', ['categories' => $categories]);
}

// view('admin/pages/category/view',['categories' => $categories]);

view("admin/layouts/footer");
