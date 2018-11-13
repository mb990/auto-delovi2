<!DOCTYPE html>
<html>

<head>
@extends('layout.app')
@section('page title', 'ПРОИЗВОДИ')
<?php $heading = "ПРОИЗВОДИ"; ?>

            
            
            @section('content')
            <h2 class="text-center">@section('heading') <?php echo $heading ?> @endsection</h2>
                <ul style="padding-top:48px; ">
                    <li>Уља</li>
                    <li>Акумулатори</li>
                    <li>Ауто Гуме</li>
                    <li>Остали ауто-дијелови</li>
                </ul>
            @endsection
            <div class="buttons"></div>
        </div>
    </div>
   