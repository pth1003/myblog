@extends('frontend.layout.layout')
@section('content')
    <style>
        .input-post-blog {
            border: none;
            outline: none;
            border-bottom: 2px solid #ccc;
            background-color: transparent;
        }

        .text-area-blog {
            border: 2px solid #ccc;
            outline: none;
        }

        .input-post-blog:focus, .text-area-blog:focus {
            border-color: #198754;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
    <div class="container">
        <p class="fw-bold fs-1 text-center">Write Blog</p>
        <form method="POST" enctype="multipart/form-data" id="form-write">
            <fieldset>
                <div class="w-100 mb-4">
                    <label class="fs-4 fw-bold">Title</label>
                    <input class="w-100 input-post-blog" type="text" placeholder="Blog title" name="title" required/>
                </div>
                <div class="w-100 mb-4">
                    <label class="fs-4 fw-bold">Content</label>
                    <textarea class="w-100 text-area-blog" name="contentt" id="content-ckeditor" required> {{old('contentt')}} </textarea>
                </div>
                <div class="w-100 mb-4">
                    <label class="fs-4 fw-bold">Select image</label>
                    <input type="file" accept="image/*" name="image" id="imgInp" required>
                    <img id="rvimg" src=""/>
                </div>
                <div class="w-100">
                    <label class="fs-4 fw-bold">Select category</label>
                    <select name="category">
                        @foreach($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success w-100 mt-4">Post</button>
            </fieldset>
            @csrf
        </form>
    </div>
    <script>
        $('#form-write').validate({
            rules: {
                title: "required",
                contentt: "required",
                image: {
                    required: true,
                    extension: "jpg, jpeg"
                },
            },

            messages: {
                title: "Please enter title",
                contentt: "Please enter content",
                image: {
                    required: "Please select image",
                    extension: "Please select image have type JPG, JPEG",
                }
            }
        });

        ClassicEditor
            .create( document.querySelector('#content-ckeditor'))

        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                rvimg.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection


