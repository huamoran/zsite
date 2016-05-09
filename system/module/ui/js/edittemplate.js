$(document).ready(function()
{
    $.setAjaxForm('#editForm', function(response) 
    {
        if(response.result == 'fail')
        {
            bootbox.alert(response.warning);
        }
        if(response.result == 'success')
        {
            setTimeout(function()
            {
                location.href = response.locate;  
            }, 2000);
        }
    });

    $.setAjaxLoader('.okFile', '#ajaxModal');

    $('#resetBtn').click(function()
    {
       $('#content').val($('#rawContent').val());
       $('#editForm').submit();
    });

    btn = $('.btn-file.active');
    file = btn.parents('.panel').find('strong').html() + ' / ' + btn.html();
    $('#fileName').prepend(file);

    $('.panel-folder').each(function()
    {
        $(this).toggle($(this).find('a.active').size() > 0);
    });

    $('.folder-menu').find('.panel-heading').click(function()
    {
        $(this).next().toggle();
    })
});