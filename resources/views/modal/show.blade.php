@extends('layouts.master')

@section('content')
<div>
    <a href="{{route('main.index')}}" class="btn btn-primary" placeholder="Список скриптов">Начало</a>

    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
        <thead>
            <tr>
                <th data-toggle="true">{{$question->text}}</th>
                <th data-toggle="true" class="text-right">Действие</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-toggle="true">{{$question->description}}</td>
                <td class="text-right"><a class="btn btn-primary"
                        href="{{route('main.edit', $question)}}">Редактировать</a></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th data-toggle="true">Ответы:</th>
                <th data-toggle="true" class="text-center">Действие</th>
                <th data-toggle="true" class="text-right">Следующий вопрос:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($question->answer as $answer)
            <tr>
                <td>{{ $answer->text }}</td>
                <td class="text-center">
                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }"
                        action="{{route('modal.destroy', $answer)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <div class="btn-group">
                            <a class="btn btn-primary" href="{{route('modal.edit', $answer)}}">Редактировать</a>
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </div>
                    </form>
                </td>
                <td>
                    <form action="{{route('editquestion', ['id' => $answer->id, ])}}" method="post">
                        @method('POST')
                        @csrf
                        <select name="child_id">
                            @foreach ($question->all() as $item)
                            <option value="{{$item->id}}">{{$item->text}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">Изменить</button>
                    </form>
                </td>
                @isset($answer->question)
                <td class="text-right">{{$answer->question->text}}</td>
                @endisset
            </tr>
            @endforeach
            <tr>
                <td data-toggle="true"><a href="{{route('modal.create', ['id' => $question->id])}}"
                        class="btn btn-primary">Добавить ответ</a></td>
            </tr>
        </tbody>
    </table>
    @foreach ($question->answer as $answer)
    @isset($answer->question)
    <p><a href="{{route('modal.show', $answer->question)}}">{{ $answer->question->text}}</a></p>
    @endisset
    @endforeach
</div>
@endsection
