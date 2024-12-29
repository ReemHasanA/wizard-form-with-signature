@props(['name', 'model' => ''])

<div class="col-2 form-group">
    <label for="{{$name}}">{{ucwords(str_replace('_', ' ',$name))}}:</label>
    <input type="datetime-local" id="{{$name}}" name="{{$name}}" class="form-control" value="{{old($name, $model)}}">
    <button type="btn" class="btn date-time-btn w-100">Save</button>
</div>