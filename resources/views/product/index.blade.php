@extends('layouts.main')
@section('title',  )

@section('content')
    <div class="container">
        <table class="table">
            <a href="{{ route('product.create') }}" class="btn btn-primary mt-2 mb-2">Создать продукт</a>
            <thead>
            <tr>
                <th>Продукт</th>
                <th>Описания</th>
                <th>Категория</th>
                <th class="text-right">Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $item)
                <tr>
                    <td>{{ $item->title ?? '' }}</td>
                    <td>{{ $item->description ?? '' }}</td>
                    <td>{{ $item->category ?? '' }}</td>
                    <td class="text-right">

                        <form action="{{ route('product.destroy', $item) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Удалить">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">
                        <h1 class="text-center">Продуктов нет</h1>
                    </td>
                </tr>
            @endforelse

            </tbody>
        </table>
    </div>
@endsection

