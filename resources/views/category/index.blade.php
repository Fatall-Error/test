@extends('layouts.main')
@section('title',  )

@section('content')
<div class="container">
    <table class="table">
        <a href="{{ route('category.create') }}" class="btn btn-primary">Создать категорию</a>
        <thead>
            <tr>
                <th>Категория</th>
                <th class="text-right">Действия</th>
            </tr>
        </thead>
        <tbody>
        @forelse($categories as $item)
            <tr>
                <td>{{ $item->name ?? '' }}</td>
                <td class="text-right">

                    <form action="{{ route('category.destroy', $item) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Удалить">
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="2">
                    <h1 class="text-center">Категорий нет</h1>
                </td>
            </tr>
        @endforelse

        </tbody>
    </table>
</div>
@endsection
