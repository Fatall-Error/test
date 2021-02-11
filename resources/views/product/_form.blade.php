<div class="form-group">
    <input type="text" class="form-control" name="title" value="{{ $item->title ?? '' }}" placeholder="Наименование продукта">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="description" value="{{ $item->description ?? '' }}" placeholder="Описание продукта">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="slug" value="{{ $item->slug ?? '' }}" placeholder="Slug">
</div>
<div class="form-group">
    <input type="file" class="form-control" name="image" value="{{ $item->image ?? '' }}" placeholder="Изображение продукта">
</div>

<select name="category" class="form-control">
    <option value="0">без родительской категории</option>
    @include('category._categories')
</select>

<button type="submit" class="btn btn-primary">Сохранить</button>
