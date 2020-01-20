@extends('layouts.master')

@section('content')

<div class="container">
    <form class="form-horizontal" action="{{route('main.update', $question) }}" method="post">
        @method('PUT')
        @csrf
        <fieldset class="form-horizontal">
            <div class="form-group"><label class="col-sm-2 control-label">Вопрос:</label>
                <div class="col-sm-10">
                    <input type="text" name="text" class="form-control" placeholder="" value="{{$question->text}}">
                </div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Описание</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" placeholder="" value="{{$question->description}}">
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
