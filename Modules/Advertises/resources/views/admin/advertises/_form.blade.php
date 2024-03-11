<x-success-alert/>
<x-error-alert/>

<div class="row">
    <div class="col-md-6 form-group">
        <label>{{__('main.name_en')}}</label>
        <input type="text" class="form-control" name="name_en" value="{{$model->name_en??old('name_en')}}" required>
    </div>
    <div class="col-md-6 form-group">
        <label>{{__('main.name_ar')}}</label>
        <input type="text" class="form-control" name="name_ar" value="{{$model->name_ar??old('name_ar')}}" required>
    </div>
    <div class="col-md-12 form-group">
        <label>{{__('main.description_en')}}</label>
        <textarea rows="4" cols="4" class="form-control" name="description_en" >{!!$model->description_en??old('description_en')!!}</textarea>
    </div>
    <div class="col-md-12 form-group">
        <label>{{__('main.description_ar')}}</label>
        <textarea rows="4" cols="4" class="form-control" name="description_ar" >{!!$model->description_ar??old('description_ar')!!}</textarea>
    </div>
    <div class="col-md-12 form-group">
        <label>{{__('main.image')}}</label>
        <input type="file" class="form-control" name="image">
        @if($model->image)
            <br>
            <img src="{{\Storage::url($model->image)}}" width="200px">
        @endif
    </div>
    <div class="col-md-12 form-group">
        <div class="custom d-flex align-items-center">
            <!-- Rounded switch -->
            <label>{{__('main.send_directly')}}</label>
            <label class="switch mx-2">
                <input type="checkbox" id="checkedLabel" name="send_directly"  @if($model?->send_directly) checked @endif value="1">
                <span class="slider round"></span>
            </label>
        </div>
    </div>

    <div class="col-md-6 form-group dates">
        <label>{{__('main.start_date')}}</label>
        <input type="date" class="form-control" name="start_date" value="{{$model->start_date??old('start_date')}}" >
    </div>
    <div class="col-md-6 form-group dates">
        <label>{{__('main.end_date')}}</label>
        <input type="date" class="form-control" name="end_date" value="{{$model->end_date??old('end_date')}}" >
    </div>

    <div class="col-12">
        <label class="form-label">  {{__('main.chooseFamous')}}  </label>
        <select name="famous_ids[]" class="select-2 multiple-select"  multiple="multiple">
            @foreach($famous as $key=>$val)
                <option @if(in_array($val,$arrayFamousIds)) selected @endif  value="{{$val}}">{{$key}}</option>
            @endforeach
        </select>
    </div>


</div>

<div class="row mt-2">
    <div class="col-12">
        <input type="submit" class="btn btn-primary float-right" value="{{__('main.save')}}">
    </div>
</div>
