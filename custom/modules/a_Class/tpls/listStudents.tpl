<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<input type="hidden" value="{$current_language}" id="cur_lang">
<input type="hidden" value="{$class_id}" id="class_id">
<table class="table">
    <thead>
    <tr>
        <th style="display: none;"></th>
        <th style="width: 15%; text-align: left; padding: 4px;">{$thead.Code_Student}</th>
        <th style="width: 25%; text-align: left;">&nbsp;{$thead.Name}</th>
        <th style="width: 20%; text-align: left;">&nbsp;{$thead.Phone}</th>
        <th style="width: 20%; text-align: left;">&nbsp;{$thead.Email}</th>
        <th style="width: 10%; text-align: center;">&nbsp;{$thead.Actions}</th>
    </tr>
    </thead>
    <tbody>
    {section name=item loop=$list}
        <tr>
            <td style="display: none;">{$list[item].id}</td>
            <td style="padding: 4px;">{$list[item].code_student}</td>
            <td style="padding: 4px;">{$list[item].name}</td>
            <td style="padding: 4px;">{$list[item].phone}</td>
            <td style="padding: 4px;">{$list[item].mail}</td>
            <td style="padding: 4px;text-align: center;">
                <a target="_blank" style="text-decoration: none;cursor: pointer; color: black;" class="view_detail_student button"
                href="{$list[item].url}">{$thead.View}</a>
                <button class="view_list_option">&#9660;</button>
                <a style="text-decoration: none;cursor: pointer; display: none;color: black;"
                   class="removeButton button" data-student-id="{$list[item].id}">
                    {$thead.Remove}</a>
            </td>
        </tr>
    {/section}
    </tbody>
</table>
{literal}
<script>
    $(".view_list_option").click(function () {
        var tdParent = $(this).closest('td');
        var removeButton = tdParent.find('.removeButton');
        removeButton.toggle();
    });
    $(document).click(function (event) {
        var clickedElement = $(event.target);
        if (!clickedElement.hasClass('view_list_option')) {
            $(".removeButton").hide();
        }
    });
    $('.removeButton').on('click', function () {
        var trParent = $(this).closest('tr');
        var studentId = $(this).data('student-id');
        var class_id = $('#class_id').val();
        var title = "Do you want to remove this student from the class?";
        if($('#cur_lang').val() == 'vn_vn') {
            title = "Bạn có muốn loại bỏ học viên này ra khỏi lớp?";
        }
        Swal.fire({
            title: title,
            showCancelButton: true,
            confirmButtonText: "Confirm",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                   type: 'POST',
                   url: 'index.php?module=a_Class&action=handleClass',
                   data: {
                       type: 'RemoveStudent',
                       studentId: studentId,
                       class_id: class_id,
                   },
                    success: function (data) {
                       debugger
                        trParent.remove();
                        Swal.fire("Saved!", "", "success");
                    },
                });
            }
        });
    })
</script>
{/literal}