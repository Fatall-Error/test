<div class="form-group">
    <input type="text" class="form-control" name="name" value="{{ $item->name ?? '' }}" placeholder="Категория">
</div>
<div class="form-group">
    <select name="parent_id" class="form-control">
        <option value="0">без родительской категории</option>
        @include('category._categories')
    </select>
</div>
<button type="submit" class="btn btn-primary">Сохранить</button>
