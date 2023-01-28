@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Question List') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('msg'))
                            <div class="alert alert-success" role="alert">
                                {{ session('msg') }}
                            </div>
                        @endif
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>SNo.</th>
                                    <th>Question</th>
                                    <th>Option 1</th>
                                    <th>Option 2</th>
                                    <th>Option 3</th>
                                    <th>Option 4</th>
                                    <th>Option 5</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($questionData as $question)
                                    <tr>
                                        <td scope="row">{{ $i }}</td>
                                        <td>{{ $question->question }}</td>
                                        <td>{{ $question->a }}</td>
                                        <td>{{ $question->b }}</td>
                                        <td>{{ $question->c }}</td>
                                        <td>{{ $question->d }}</td>
                                        <td>{{ $question->e }}</td>
                                        <td>
                                            <a href="/editQuestion/{{ $question->id }}" class="btn btn-primary btn-sm"
                                                title="Edit"><i class="fa fa-pencil"></i></a>
                                            <form method="post"
                                                action="{{ route('deleteQuestion', ['id' => $question->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
