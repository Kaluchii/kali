<tr role="row" class="odd" data-id="{{$item->id_field}}">

    {{-- ID  --}}
    <td>{{$item->id_field}}</td>

    {{-- Название  --}}
    <td class="sorting_1">
        <a href="production_cat_3/{{$item->id_field}}" class="">{{$item->product_name_field}}</a>
    </td>

    {{-- Дата последнего редактирования --}}
    <td> {{$item->getField('updated_at')->getItem()->getDate()}} </td>

    {{-- Опубликовано  --}}
    <td data-order="{{$item->show_field}}">
        <select class="form-control group-show"
                data-id="{{$item->id_field}}"
                data-block="other_products_list"
                data-name="show">
            @if($item->show_field)
                <option value="false">Не опубликовано</option>
                <option value="true" selected>Опубликовано</option>
            @else
                <option value="false" selected>Не опубликовано</option>
                <option value="true">Опубликовано</option>
            @endif
        </select>
    </td>

    {{-- Сортировака --}}
    <td data-order="{{$item->sorter_field}}">
        <input type="number" class="form-control group-sorter"
               data-id="{{$item->id_field}}"
               data-block="other_products_list"
               data-name="sorter"
               value="{{$item->sorter_field}}">
    </td>

    {{-- Удаления  --}}
    <td>
        <button type="button" class="btn btn-block btn-primary group-remove-item"
                data-id="{{$item->id_field}}" data-block="other_products_list">Удалить</button>
    </td>
</tr>