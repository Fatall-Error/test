@foreach($categories as $category_item)
    <option value="{{ $category_item -> id ?? '' }}">
        @isset($item->id)
             @if($item->parent_id == $category_item->id)
                 selected=""
             @endif
             @if($item->id)
                     disabled
             @endif
        @endisset
        {{ $delimetr ?? '' }}{{ $category_item->name ?? '' }}
    </option>
    @isset($category_item->children)
        @include('category._categories', [
    'categories' => $category_item->children,
    'delimetr' => ' - '. $delimetr
])
    @endisset
@endforeach
