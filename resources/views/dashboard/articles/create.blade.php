@extends('dashboard.layouts.app', [
    'activePage' => 'article-management',
    'menuParent' => 'laravel',
    'titlePage' => __('Article Management')
])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data" action="{{ route('article.store') }}"
                        autocomplete="off" class="form-horizontal article-form">
                        @csrf
                        @method('post')
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">filter_none</i>
                                </div>
                                <h4 class="card-title">{{ __('Agregar artículo') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('article.index') }}"
                                            class="btn btn-sm btn-rose">{{ __('Regresar') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Foto') }}</label>
                                    <div class="col-sm-7">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{ asset('material') }}/img/image_placeholder.jpg" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-rose btn-file">
                                                    <span class="fileinput-new">{{ __('Seleciona imagen') }}</span>
                                                    <span class="fileinput-exists">{{ __('Cambiar') }}</span>
                                                    <input type="file" name="photo" id="input-picture" require />
                                                </span>
                                                <a href="#pablo" class="btn btn-danger fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                    {{ __('Remove') }}</a>
                                            </div>
                                            @include('dashboard.alerts.feedback', ['field' => 'photo'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Titulo') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                                name="title" id="input-title" type="text" placeholder="{{ __('Titulo') }}"
                                                value="{{ old('title') }}" required="true" aria-required="true" />
                                            @include('dashboard.alerts.feedback', ['field' => 'title'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('URL') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('slug') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}"
                                                name="slug" id="input-slug" type="text" placeholder="{{ __('URL') }}"
                                                value="{{ old('slug') }}" required="true" aria-required="true" />
                                            @include('dashboard.alerts.feedback', ['field' => 'slug'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Categoria') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
                                            <select class="selectpicker col-sm-12 pl-0 pr-0" name="category_id"
                                                data-style="select-with-transition" title="" data-size="100">
                                                <option value="">-</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @include('dashboard.alerts.feedback', ['field' => 'category_id'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Content') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                            <textarea  class="editor-content" id="editor" name="content">
                                                 {!! old('content') !!}
                                                </textarea>
                                            @include('dashboard.alerts.feedback', ['field' => 'content'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Excerpt') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('excerpt') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('excerpt') ? ' is-invalid' : '' }}"
                                                name="excerpt" id="input-excerpt" type="text" placeholder="{{ __('Excerpt') }}"
                                                value="{{ old('excerpt') }}" required="true" aria-required="true" />
                                            @include('dashboard.alerts.feedback', ['field' => 'excerpt'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Etiquetas') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('tags') ? ' has-danger' : '' }}">
                                            <select class="selectpicker col-sm-12 pl-0 pr-0" name="tags[]"
                                                data-style="select-with-transition" multiple title="-" data-size="7">
                                                @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}"
                                                    {{ in_array($tag->id, old('tags') ?? []) ? 'selected' : '' }}>
                                                    {{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                            @include('dashboard.alerts.feedback', ['field' => 'tags'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label label-checkbox">{{ __('Status') }}</label>
                                    <div class="col-sm-10 checkbox-radios">
                                        <div class="togglebutton">
                                            <label>{{ __('Draft')}}
                                                <input type="checkbox" name="status" value="draft"
                                                    {{ old('status') == 'draft' ? ' checked' : 'published' }}>
                                                <span class="toggle"></span>
                                                {{ __('Published')}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label
                                        class="col-sm-2 col-form-label label-checkbox">{{ __('Mostrar en el home') }}</label>
                                    <div class="col-sm-4 checkbox-radios">
                                        <div class="form-check" style="margin-top:-6px;">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="show_on_homepage" value="1"
                                                        {{ old('show_on_homepage') == 1 ? ' checked' : '' }}>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Tiempo de lectura') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('read_time') ? ' has-danger' : '' }}">
                                            <input type="number" name="read_time" id="read_time"
                                                placeholder="{{ __('Seleccione el tiempo de lectura') }}" class="form-control"
                                                value="{{ old('read_time')}}" />
                                            @include('dashboard.alerts.feedback', ['field' => 'read_time'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('pulish_date') ? ' has-danger' : '' }}">
                                            <input type="text" name="publish_date" id="publish_date"
                                                placeholder="{{ __('Select date') }}" class="form-control datetimepicker"
                                                value="{{ old('publish_date', now()->format('d-m-Y')) }}" />
                                            @include('dashboard.alerts.feedback', ['field' => 'publish_date'])
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">{{ __('Agregar articulo') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('material') }}/js/article.js"></script>
    <script>
        $(document).ready(function () {
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
            } );
            $('.datetimepicker').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                },
                format: 'DD-MM-YYYY'
            });
            $(document).on('blur', 'input#input-title', function () {
                if (!$('input#input-slug').val()) {
                    setSlug($('input#input-title'), $('input#input-slug'));
                }
            })
            
        });
        
    </script>
    <script async src="//www.instagram.com/embed.js"></script>
@endpush