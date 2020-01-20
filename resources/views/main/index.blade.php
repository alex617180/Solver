@extends('layouts.master')



@section('content')
	<div class="container">
		<a href="{{route('main.create')}}" class="btn btn-primary">Создать</a>

<table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
    <thead>
        <tr>
            <th data-toggle="true">Вопросы</th>
            <th data-toggle="true">Описание</th>
            <th data-hide="phone">Ответы</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($questions as $question)
        <tr>
            <td><a href="{{route('modal.show', $question)}}">{{ $question->text }}</a></td>
            <td>{{ $question->description }}</td>
            <td>
                @foreach ($question->answer as $answer)
                <p>{{ $answer->text }}</p>
                @endforeach
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">
                <h2 class="ui center aligned icon header" class="center aligned">
                    <i class="circular database icon"></i>
                    Вопросы отсутствуют
                </h2>
            </td>
        </tr>
        @endforelse

    </tbody>
</table>
</div>
@endsection
