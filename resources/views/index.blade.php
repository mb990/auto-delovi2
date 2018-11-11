@extends('layout.app')
@section('page title', 'ПОЧЕТНА')
<?php $heading = "ТР ПЛУС"; ?>
            @section('content')
            <h2 class="text-center" style="padding-top:48px;">@section('heading') <?php echo $heading ?> @endsection</h2>
                <p class="text-center" style="height:100px;">ДОБРОДОШЛИ НА СТРАНИЦУ ПРОДАВНИЦЕ АУТО-ДИЈЕЛОВА ТР ПЛУС<br></p>
            <div class="buttons"><a class="btn btn-primary" role="button" href="/kontakt">КОНТАКТ</a></div>
            @endsection
        </div>
    </div>
    