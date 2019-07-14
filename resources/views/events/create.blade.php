@extends('layouts.master')
@section('custom-css')
    <link rel="stylesheet" href="/editor/minified/themes/default.min.css" />
@endsection
@section('bredcrumb')
    <section class="page_title ds s-py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <h1 class="bold">Create adventure</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Create adventure
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="ls routs routs-main s-py-80 s-py-md-120 s-py-xl-160">
        <div class="container-fluid" style="padding-top: 20px;">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title">Create adventure</h1>
                <form>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" placeholder="Title">
                        <small id="eventTitle" class="form-text text-muted">Title off event
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="title">Price</label>
                        <input type="number" name="price">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="title">Days</label>
                        <input type="number" name="days">
                    </div>

                    <div class="form-group">
                        <label for="select">Type</label>
                        <select class="select custom-select mb-3" name="type">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="select">Location</label>
                        <select class="select custom-select mb-3" name="location">
                            @foreach($locations as $location)
                                <option value="{{$location->name}}">{{$location->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="select">Region</label>
                        <select class="select custom-select mb-3" name="region">
                            <option value="south">South</option>
                            <option value="central">Central</option>
                            <option value="north">North</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="select">Difficultly</label>
                        <select class="select custom-select mb-3" name="difficultly">
                            <option value="Easy">Easy</option>
                            <option value="Medium">Medium</option>
                            <option value="Hard">Hard</option>
                            <option value="Very Hard">Very Hard</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="select">Season</label>
                        <select class="select custom-select mb-3" name="season">
                            <option value="summer">Summer</option>
                            <option value="autumn">Autumn</option>
                            <option value="winter">Winter</option>
                            <option value="spring">Spring</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea id="body" name="body"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Main preview image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Adventure images</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" multiple>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom-scripts')
    <script src="/editor/minified/jquery.sceditor.bbcode.min.js"></script>
    <script>
        // Replace the textarea #example with SCEditor
        var textarea = document.getElementById('body');
        sceditor.create(textarea, {
            format: 'bbcode',
            style: '/editor/minified/themes/content/default.min.css',
            emoticonsRoot: '/editor/'
        });
    </script>

    <script src="/editor/minified/sceditor.min.js"></script>
@stop
