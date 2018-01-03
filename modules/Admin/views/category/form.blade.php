
<div class="col-md-12">

             @if(Session::has('flash_alert_notice2')) 
            
                <div class="alert alert-success">    {{ Session::get('flash_alert_notice2') }} </div>
            @endif
    
     <div class="form-group{{ $errors->first('title', ' has-error') }}">
        <label class="col-lg-2 col-md-2 control-label"> Service title <span class="error">*</span></label>
        <div class="col-lg-8 col-md-8"> 
            {!! Form::text('title',null, ['class' => 'form-control form-cascade-control input-small'])  !!} 
            <span class="label label-danger">{{ $errors->first('title', ':message') }}</span>
           
        </div>
    </div> 
 

     <div class="form-group{{ $errors->first('description', ' has-error') }}">
        <label class="col-lg-2 col-md-2 control-label">Description</label>
        <div class="col-lg-8 col-md-8"> 
            {!! Form::textarea('description',null, ['class' => 'form-control ckeditor form-cascade-control input-small'])  !!}
            <span class="label label-danger">{{ $errors->first('description', ':message') }}</span>
            @if(Session::has('flash_alert_notice')) 
            <span class="label label-danger">

                {{ Session::get('flash_alert_notice') }} 

            </span>@endif
        </div>
    </div>  
 
     <div class="form-group{{ $errors->first('images', ' has-error') }}">
        <label class="col-lg-2 col-md-2 control-label">Image </label>
        <div class="col-lg-8 col-md-8">  

             {!! Form::file('images',null,['class' => 'form-control form-cascade-control input-small'])  !!}
             <br>
              @if(isset($page->images))
                 <img src="{!! Url::to('storage/assets/images/'.$page->images) !!}" width="100px" height="100px">
              @endif                                   
            <span class="label label-danger">{{ $errors->first('images', ':message') }}</span>
            @if(Session::has('flash_alert_notice')) 
            <span class="label label-danger">

                {{ Session::get('flash_alert_notice') }} 

            </span>@endif
        </div>
    </div>  
      
    
    <div class="form-group">
        <label class="col-lg-2 col-md-2 control-label"></label>
        <div class="col-lg-8 col-md-8">

            {!! Form::submit(' Save ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']) !!}

            <a href="{{route('page')}}">
            {!! Form::button('Back', ['class'=>'btn btn-warning text-white']) !!} </a>
        </div>
    </div>

</div> 
