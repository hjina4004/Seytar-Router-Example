<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return json_encode([
            'class' => __CLASS__,
            'method' => __FUNCTION__,
            'data' => $_REQUEST
        ], JSON_UNESCAPED_UNICODE);
    }

    public function store()
    {
        return json_encode([
            'class' => __CLASS__,
            'method' => __FUNCTION__,
            'data' => $_REQUEST
        ], JSON_UNESCAPED_UNICODE);
    }

    public function show($id)
    {
        return json_encode([
            'class' => __CLASS__,
            'method' => __FUNCTION__,
            'id' => $id
        ], JSON_UNESCAPED_UNICODE);
    }

    public function update($id)
    {
        return json_encode([
            'class' => __CLASS__,
            'method' => __FUNCTION__,
            'id' => $id,
            'data' => $_REQUEST
        ], JSON_UNESCAPED_UNICODE);
    }

    public function destroy($id)
    {
        return json_encode([
            'class' => __CLASS__,
            'method' => __FUNCTION__,
            'id' => $id,
        ], JSON_UNESCAPED_UNICODE);
    }
}
