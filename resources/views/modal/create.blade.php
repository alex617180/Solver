@extends('layouts.master')

@section('content')

<div class="container">

    <form class="form-horizontal" action="{{route('modal.store') }}" method="post">
        @csrf
        <fieldset class="form-horizontal">
            <div class="form-group"><label class="col-sm-2 control-label">Ответ:</label>
                <div class="col-sm-10">
                    <input type="text" name="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-primary" type="submit">Сохранить</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>

@endsection
