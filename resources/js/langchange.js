var url = "{{ route('lang.change') }}";

$('lang-change').change(function(){
    let lang_code = $(this).val();
    window.location.href = url + "?lang=" + lang_code;
})