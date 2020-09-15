<?php

view("admin/layouts/header");
if (isset($_GET['action'])) {
    if ($_GET['action'] == "index") {
        view('admin/pages/product/view', ['products' => $products]);
    }
    if ($_GET['action'] == "create") {
        view('admin/pages/product/create');
    }
    if ($_GET['action'] == "edit") {
        view('admin/pages/category/edit', ['products' => $products]);
    }
} else {

    view('admin/pages/product/view', ['products' => $products]);
}

view("admin/layouts/footer");
