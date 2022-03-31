<?php
if (!function_exists('showmsg'))
{
    function showmsg()
    {
        if(session('type'))
        return '<div class="alert alert-'.session('type').' alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>'.session('title').'</strong><br><br>'.session('msg').'
        </div>';
        return;
    }
}
if (!function_exists('loadconfig'))
{
    function loadconfig()
    {
        return App\Models\Config::all();
    }
}
