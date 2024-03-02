@extends('layouts.guest')



@section('content')
    <section class="text-gray-600 body-font theme-bg-color  wow fadeInUp "   data-wow-delay=".2s">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-wrap md:m-20 md:mt-0">

                @foreach($blogs as $blog)
                    <x-blog.blog-item :id="$blog->id" :title="$blog->title" :short-description="$blog->short_description"
                        :thumbnail="$blog->thumbnail"/>
                @endforeach

            </div>
        </div>
    </section>
@endsection
