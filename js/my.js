$(function() { 
    $('#initial-form').submit(function(e) 
    { 
        e.preventDefault();
        if ( $(this).parsley().isValid() ) 
        {
            console.log("Validation Passed!");
            $('#contactModal').modal('show');
        }
    });
}); 