@extends('layouts.main')

@section('container')
      <div class="container">
        <div class="row flex-lg-row-reverse align-items-center g-2 mt-3 ">
          <div class="col-xl-6">
            <img src="../img/faq.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"  loading="lazy">
          </div>
          <div class="col-xl-6">
            <div class="accordion-bg-dark my-3" id="accordionExample">
                  <div class="accordion-bg-dark my-3" id="accordionExample">
              @foreach ($faq as $faq)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $faq->id }}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true" aria-controls="collapseOne">
                    {{ $faq->pertanyaan }}
                    </button>
                </h2>
                <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    {{ $faq->jawaban }}
                    </div>
                </div>
              </div>
              @endforeach
            </div>  
          </div>
        </div>
      </div>

@endsection