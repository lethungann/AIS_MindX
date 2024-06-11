<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<input type="hidden" id="bookkeeping_id" value="{$bookkeeping_id}">
<label>Chọn loại file: </label>
<select>
    <option>Excel</option>
    <option>PDF</option>
</select>
<a id="click" class="button" style="text-decoration: none;cursor: pointer; color: black;margin-bottom: 10px;">Lấy file</a>
{literal}
<script>
    $('#click').on('click', function () {
        Swal.fire({
            title: 'Loading...',
            allowEscapeKey: false,
            allowOutsideClick: false,
            showConfirmButton: false,
        });
        var bookkeeping_id = $('#bookkeeping_id').val();
        var type = $('#type').val();
        $.ajax({
            type: 'POST',
            url: 'index.php?entryPoint=handleAIS',
            data: {
                type: 'exportBookkeping',
                id: bookkeeping_id,
                file: 'Excel',
            },
            success: function (data) {
                var data = JSON.parse(data);
                Swal.close();
                if(data.success = 1) {
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Lấy file thành công",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    window.open(data.url_download);
                    location.reload();
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.close();
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Lấy file không thành công",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        })
    })
</script>
{/literal}