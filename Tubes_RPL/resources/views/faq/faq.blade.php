@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">FAQ - Pertanyaan yang Sering Ditanyakan</h1>
    <div class="accordion" id="faqAccordion">
        @foreach ($faqs as $index => $faq)
            <div class="card">
                <div class="card-header" id="heading{{ $index }}">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="true" aria-controls="collapse{{ $index }}">
                            {{ $faq->pertanyaan }}
                        </button>
                    </h2>
                </div>

                <div id="collapse{{ $index }}" class="collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-parent="#faqAccordion">
                    <div class="card-body">
                        {{ $faq->jawaban }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
