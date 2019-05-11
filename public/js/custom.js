$(document).ready(function () {
    $("#languageSwitcher").change(function () {
        
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        
        var locale = $(this).val();

        var _token = $("input[name=_token]").val();

        $.ajax({
            url: "/language",
            type: 'POST',
            data: {'locale': locale, '_token': _token},
            dataType: 'JSON',
            success: function (data) {
                
            },
            error: function (data) {
            
            },
            beforeSend: function (data) {
                
            },
            complete: function (data) {
                window.location.reload(true);
            }
        });
    });
});