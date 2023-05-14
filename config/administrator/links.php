<?php

use App\Models\Link;
use Illuminate\Support\Facades\Auth;

return [
    'title'   => 'Recommendations',
    'single'  => 'Recommendation',

    'model'   => Link::class,

    // 访问权限判断
    'permission'=> function()
    {
        // 只允许站长管理资源推荐链接
        return Auth::user()->hasRole('Founder');
    },

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'title' => [
            'title'    => 'Name',
            'sortable' => false,
        ],
        'link' => [
            'title'    => 'Link',
            'sortable' => false,
        ],
        'operation' => [
            'title'  => 'Operations',
            'sortable' => false,
        ],
    ],
    'edit_fields' => [
        'title' => [
            'title'    => 'Name',
        ],
        'link' => [
            'title'    => 'Link',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => 'ID',
        ],
        'title' => [
            'title' => 'Name',
        ],
    ],
];
