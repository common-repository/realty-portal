(function($) {
    $(document).ready(function () {
        $('.btn-correct-page').click(function () {
            var btn = $(this);
            var div_parent = $(this).parent();
            var option_name = btn.data('option-name'),
                option_group = btn.data('option-group'),
                page_title = btn.data('page-title'),
                page_content = btn.data('page-content');

            var data ={
                action: 'rp_admin_quick_correct_page',
                option_group: option_group,
                option_name: option_name,
                page_title: page_title,
                page_content: page_content,

            };


            $.ajax({
                url: RP_Property_Admin.ajax_url,
                type: 'POST',
                data: data,
                beforeSend: function () {
                    btn.prop('disabled', true);
                },
                success: function (rs) {
                    btn.prop('disabled',false);
                    if (rs.status == 'success') {
                        div_parent.html(rs.html);
                    }
                },
                dataType: 'json',
            })
        });

    });

}(jQuery))