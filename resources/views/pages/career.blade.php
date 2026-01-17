@extends('layouts.layout2')
@section('title', __('common.menu_career') . ' || Kreatif Digital Dinamik')
@php
    $title = __('common.menu_career');
    $subtitle = __('common.menu_career');
@endphp
@section('content')

    <x-strickyHeader />

    <section class="contact-two contact-two--contact-page">
        <div class="container">
            <div class="contact-two__wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-two__info"
                            style="position:relative; background: #111; border-radius: 12px; padding: 0;">
                            <img src="{{ asset('assets/images/gallery/1-team.jpg') }}" alt="Kreatif Digital Dinamik Team"
                                style="width:100%;height:auto;display:block;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.15);background:#111;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="contact-two__content">
                                {{-- Show validation errors --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="sec-title-two text-left">
                                    <h6 class="sec-title-two__tagline">
                                        <span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>
                                        {{ __('common.join_us_tagline', [], app()->getLocale()) }}
                                        <span class="sec-title-two__tagline__right icofont-rounded-double-right"></span>
                                    </h6>
                                    <h3 class="sec-title-two__title">
                                        {{ __('common.join_us_title', [], app()->getLocale()) }}
                                    </h3>
                                </div>
                                <p class="contact-two__content__text">
                                    {{ __('common.career_form_description', [], app()->getLocale()) }}
                                </p>
                                <form class="contact-two__form contact-form-validated form-one" action="{{ route('career.apply') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-one__group">
                                        <div class="form-one__control">
                                            <input type="text" name="name"
                                                placeholder="{{ __('common.your_name_placeholder', [], app()->getLocale()) }}" required>
                                        </div>
                                        <div class="form-one__control">
                                            <input type="email" name="email"
                                                placeholder="{{ __('common.email_address_placeholder', [], app()->getLocale()) }}" required>
                                        </div>
                                        <div class="form-one__control">
                                            <input type="text" name="role"
                                                placeholder="{{ __('common.role_placeholder', [], app()->getLocale()) }}" required>
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <textarea name="message" placeholder="{{ __('common.message_placeholder', [], app()->getLocale()) }}" rows="5" required></textarea>
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <label for="resume" style="margin-bottom: 8px;">{{ __('common.resume_label', [], app()->getLocale()) }}</label>
                                            <input type="file" name="resume" id="resume" accept="application/pdf" required>
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <button type="submit" class="tolak-btn">
                                                <b>{{ __('common.send_application', [], app()->getLocale()) }}</b><span></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.contact -->

    <x-footer />
    <x-mobileMenu />
    <x-sidebar />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('.contact-two__form').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                alert('{{ __('common.thank_you_message', [], app()->getLocale()) }}');
                // Optionally reset the form
                $('.contact-two__form')[0].reset();
            },
            error: function(xhr) {
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    let errors = xhr.responseJSON.errors;
                    let errorMsg = '';
                    for (let field in errors) {
                        errorMsg += errors[field].join(', ') + '\n';
                    }
                    alert(errorMsg);
                } else {
                    alert('{{ __('common.submission_failed', [], app()->getLocale()) }}');
                }
            }
        });
    });
});
</script>
@endpush
