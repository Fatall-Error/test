@extends('layouts.main')
@section('title',  )

@section('content')
   <div class="container">
       <a href="{{ route('product.index') }}" class="btn btn-primary mt-2 mb-2">Управлять продуктами</a>
       <a href="{{ route('category.index') }}" class="btn btn-primary mt-2 mb-2">Управлять категориями</a>
   </div>
    <div class="container">
        <table class="table">

            <thead>
            <tr>
                <th>Продукт</th>
                <th>Описания</th>
                <th>Категория</th>
                <th>Ссылка</th>

            </tr>
            </thead>
            <tbody>
            @forelse($products as $item)
                <tr>
                    <td>{{ $item->title ?? '' }}</td>
                    <td>{{ $item->description ?? '' }}</td>
                    <td>{{ $item->category ?? '' }}</td>
                    <td>
                        <a href="/product/{{ $item->slug ?? '' }}">Перейти</a>
                        <a href="/add-to-cart/{{ $item->id }}">Купить</a>

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


